<?php

namespace App\Livewire;

use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class NavigationChatMenu extends Component
{

    public function createNewConversation(): void
    {
        $chat = auth()->user()->chatUsers()->create([
            'name' => 'Nova conversa',
        ]);

        auth()->user()->conversations()->create([
            'chat_user_id' => $chat->id,
            'historic' => [],
        ]);

        session()->put('chat', $chat->id);

        $this->dispatch('changedChat');
        $this->dispatch('leavePage');
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function deleteConversation(): void
    {
        $this->dispatch('deleteChat', id: session()->get('chat'));
    }

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.navigation-chat-menu');
    }
}
