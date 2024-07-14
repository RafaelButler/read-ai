<?php

namespace App\Livewire;

use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;

class NavigationChatMenu extends Component
{
    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.navigation-chat-menu');
    }
}
