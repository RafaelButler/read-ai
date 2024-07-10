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
    public bool $showDropdown = false;
    public $editTagId = null;

    public array $colors = [
        'green',
        'blue',
        'red',
        'yellow',
        'purple',
        'pink',
        'gray',
        'indigo',
        'orange',
        'teal',
    ];

    public string $name = '';
    public string $color = 'green';

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.tags', [
            'allTags' => Tag::all(),
            'colors' => $this->colors,
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

    public function editTag(int $tagId): void
    {
        $this->editTagId = $tagId;
    }

    public function updateTagName(Tag $tag): void
    {
        if (empty($this->name)) {
            $this->reset();
            return;
        }

        $tag->update([
            'name' => $this->name,
        ]);

        $this->reset();
    }

    public function updateTagColor(Tag $tag, string $color): void
    {
        $tag->update([
            'color' => $color,
        ]);

        $this->reset();
    }

    public function removeTag(Tag $tag): void
    {
        $tag->delete();
    }
}
