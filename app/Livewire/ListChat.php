<?php

namespace App\Livewire;

use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;

class ListChat extends Component
{
    public string $selectedChat = '';
    public string $editChat = '';
    public string $newName = '';

    public $selectedChatEdit = '';
    protected $listeners = ['changedChat' => '$refresh'];

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        $this->selectedChat = session()->get('chat', 0) ?: 0;

        return view('livewire.list-chat', [
            'chats' => auth()->user()->chatUsers()->get()
        ]);
    }

    public function delete($id): void
    {
        if (is_null($id)) {
            return;
        }

        auth()->user()->chatUsers()->find($id)->delete();
        $lastChat = auth()->user()->chatUsers()->first();
        $this->selectChat($lastChat->id);
        $this->dispatch('changedChat');
    }

    public function selectChat($id): void
    {

        session()->put('chat', $id);
        $this->selectedChat = $id;

        $this->dispatch('leavePage');
    }

    public function cancelUpdateName(): void
    {
        if (!empty($this->newName)) {
            $this->updateName();
        }

        $this->reset('selectedChatEdit', 'newName');

    }

    public function updateName(): void
    {
        $this->validate([
            'newName' => 'required|min:3|max:255'
        ]);

        auth()->user()->chatUsers()->find($this->selectedChatEdit)->update([
            'name' => $this->newName
        ]);

        $this->reset('selectedChatEdit', 'newName');
    }

    public function selectChatEdit(string $id): void
    {
        $this->selectedChatEdit = $id;
    }
}
