<?php

namespace App\Livewire;

use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;

class InitialChat extends Component
{
    public string $prompt;

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.initial-chat');
    }

    public function create()
    {
        $this->validate([
            'prompt' => 'required|min:3'
        ]);

        /* Dispatch event to reload chat created */
        auth()->user()->chatUsers()->create([
            'name' => $this->prompt
        ]);

        $this->dispatch('changedChat');

        $this->prompt = '';
        /* redirect to route dashboard and preserve state */
        return redirect()->route('chat.show', ['conversation' => auth()->user()->chatUsers()->latest()->first()]);
    }
}
