<?php

namespace App\Livewire;

use App\Models\Tag;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;

class Tags extends Component
{

    public bool $showAddTag = false;

    public string $name = '';
    public string $color = 'green';

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.tags', [
            'allTags' => Tag::all(),
        ]);
    }

    public function addTag(): void
    {
        $this->showAddTag = true;
    }

    public function saveTag(): void
    {
        $this->validate([
            'name' => 'required',
            'color' => 'required',
        ]);

        $tag = Tag::firstOrCreate([
            'name' => $this->name,
            'color' => $this->color,
        ]);

        if ($tag->exists()) {
            $this->reset();
        }
    }

    public function removeTag(string $id): void
    {
    }
}
