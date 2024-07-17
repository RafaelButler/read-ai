<?php

namespace App\Livewire;

use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class ListChat extends Component
{
    public string $selectedChat = '';
    protected $listeners = ['changedChat' => '$refresh'];

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        $this->selectedChat = session()->get('chat', 0) ?: 0;

        return view('livewire.list-chat', [
            'chats' => auth()->user()->chatUsers()->get()
        ]);
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function selectChat($id): void
    {

        session()->put('chat', $id);
        $this->selectedChat = $id;

        $this->dispatch('leavePage');
    }

    public function delete($id): void
    {
        auth()->user()->chatUsers()->find($id)->delete();
        $this->dispatch('changedChat');
    }
}
