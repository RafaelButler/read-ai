<?php

namespace App\Livewire;

use App\Services\OpenAI\Gpt;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;

class ChatMessage extends Component
{
    public string $prompt;
    public string $question;

    public array $messages = [];
    public string $answer = '';
    public array $instructions = [];
    public $streams;

    public function mount(): void
    {
        $my_readings = auth()->user()->readings->pluck('title')->toArray();

        $this->instructions = [
            'role' => 'system',
            'content' => "
                Você será como professor de literatura. Um assistente. Seu objetivo é ajudar a correlacionar os textos dos livros lidos.
                Identificar os personagens, os cenários, os conflitos e as resoluções. Ajudar a identificar as características dos personagens.
                Identificar a estrutura dos textos, os elementos de linguagem, os recursos literários e a intenção do autor.
                Tentar identificar o contexto histórico, social e cultural em que a obra foi escrita.
                O principal objetivo é ajudar a correlacionar os textos dos livros lidos.
                Exemplo:
                    Seu aluno leu o Livro 'Crime e castigo' de Machado de Assis e leu 'Genealogia da moral' de Friedrich Nietzsche. Através de uma conversa, você deve ajudar a correlacionar os textos.
                Seja claro e objetivo.
                Seja bem reduzido e direto. Evite textos longos.
                Estas são as ultimas leituras do seu aluno: " . implode(', ', $my_readings) . ". De insights sobre essas leituras a partir das perguntas.
                Não precisa utilizar os nomes dos livros para cumprimentar o aluno. Conte a historia se somente for perguntado, pois o aluno ja leu o livro.
                Evite falar sobre o que ele não leu. Somente fale nesse caso se pedir indicação de leitura.
            ",
        ];
    }

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.chat-message');
    }

    public function sendMessage(): void
    {
        $this->validate([
            'prompt' => 'required',
        ]);

        $chat = new Gpt();

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

        $this->answer = '';


//        /* last question made by user inside messages */
//        $this->question = $this->messages[count($this->messages) - 2]['content'];
//        /* last response from assistant */
//        $this->answer = $this->messages[count($this->messages) - 1]['content'];
    }
}
