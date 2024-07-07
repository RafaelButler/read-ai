<?php

namespace App\Livewire;

use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;

class CreateReading extends Component
{
    public bool $showAddModal = false;

    public function create(): void
    {
        $this->showAddModal = true;
    }

    public function close(): void
    {
        $this->showAddModal = false;
    }

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.create-reading');
    }
}
