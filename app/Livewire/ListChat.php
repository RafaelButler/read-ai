<?php

namespace App\Livewire;

use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;

class ListChat extends Component
{
    protected $listeners = ['changedChat' => '$refresh'];

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.list-chat', [
            'chats' => auth()->user()->chatUsers()->get()
        ]);
    }
}
