<?php

namespace App\Livewire;

use App\Services\OpenAI\Gpt;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use OpenAI;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class ChatMessage extends Component
{
    public string $prompt;
    public string $question;
    public array $messages = [];
    public string $answer = '';
    public array $instructions = [];
    public $streams;
    protected $listeners = ['leavePage' => '$refresh'];
    protected $conversation_id = null;

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        try {
            $conversation_id = session()->get('chat') ?? null;

            if ($conversation_id) {
                $this->messages = $this->getLastMessages($conversation_id);
            }

        } catch (\Exception) {
            info('Error get lastMessages');
        }

        $my_readings = auth()->user()->readings->pluck('title')->toArray();

        $this->instructions = [
            'role' => 'system',
            'content' => "
                Você será como professor de literatura. Um assistente. Seu objetivo é ajudar a correlacionar os textos dos livros lidos.
                Use uma linguagem acadêmica e formal, evitando gírias e abreviações. Pois o seu aluno é bem avançado nos estudos.
                O objetivo é ajudar a correlacionar os textos dos livros lidos, analisando a estrutura dos textos, os elementos de linguagem, os recursos literários e a intenção do autor.
                Você pode pegar livros que foram escritos em épocas diferentes ou da mesma época, para que o aluno possa ter uma visão mais ampla.
                Identificar os personagens, os cenários, os conflitos e as resoluções. Ajudar a identificar as características dos personagens.
                Tentar identificar o contexto histórico, social e cultural em que a obra foi escrita.
                O principal objetivo é ajudar a correlacionar os textos dos livros lidos.
                Exemplo:
                    Seu aluno leu o Livro 'Crime e castigo' de Machado de Assis e leu 'Genealogia da moral' de Friedrich Nietzsche. Você pode pegar elementos dos dois livros para correlacionar.
                Seja claro e objetivo.
                Seja bem reduzido e direto. Evite textos longos.
                Estas são as ultimas leituras do seu aluno: " . implode(', ', $my_readings) . ".
                Não precisa utilizar os nomes dos livros para cumprimentar o aluno. Conte a historia se somente for perguntado, seu objetivo é analisar os textos.
            ",
        ];

        return view('livewire.chat-message', [
            'number_chat' => auth()->user()->chatUsers()->count(),
            'chat_id' => session()->get('chat')
        ]);
    }

    public function getLastMessages($id_chat): array
    {

        $chat = auth()
            ->user()
            ->chatUsers()
            ->with(['conversations' => function ($query) {
                $query->limit(10);

            }])
            ->find($id_chat);

        if (is_null($chat)) return [];

        if ($chat) return $chat->conversations?->first()->historic ?? [];

        return [];
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function updatedMessages(): void
    {
        $conversation_id = session()->get('chat') ?? null;

        if ($conversation_id) {
            $this->messages = $this->getLastMessages($conversation_id);
        }

    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function sendMessage(): void
    {
        $this->validate([
            'prompt' => 'required',
        ]);

        $chat = new Gpt(
            OpenAI::client(getenv('OPENAI_API_KEY'))
        );

        $chat->addInstruction('system', $this->instructions['content']);
        $chat->addMessage('user', $this->prompt);

        $this->messages[] = [
            'role' => 'user',
            'content' => $this->prompt,
        ];

        $this->prompt = '';

        $streams = $chat->create();

        foreach ($streams as $response) {
            $choices = $response->choices[0]->toArray();
            if (count($choices['delta']) > 0) {
                if ($choices['delta']['content']) {
                    $this->answer .= $choices['delta']['content'];
                }
            }
        }

        $chat->addMessage('assistant', $this->answer);

        $this->messages[] = [
            'role' => 'assistant',
            'content' => $this->answer,
        ];

        $this->saveChatMessages();

        $this->answer = '';
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function saveChatMessages(): void
    {
        if (count($this->messages) <= 0) return;

        $chatId = (int)session()->get('chat');

        /* Find in conversation with chatId from session */
        $conversation = auth()->user()->conversations()->where('chat_user_id', $chatId)->first();

        if ($conversation) {
            $conversation->update([
                'historic' => $this->messages,
            ]);
        }

    }

}
