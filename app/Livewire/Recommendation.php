<?php

namespace App\Livewire;

use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;

class Recommendation extends Component
{
    public bool $modalRecommendation = false;
    protected $listeners = [
        'showModalRecommendation' => 'showModalAdd',
    ];

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.recommendation');
    }

    public function showModalAdd(): void
    {
        $this->modalRecommendation = true;
    }
}
