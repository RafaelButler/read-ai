<?php

namespace App\Livewire;

use Carbon\Carbon;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;

class CreateReading extends Component
{
    public bool $showAddModal = false;

    public string $title = '';
    public string $author = '';
    public string $gender_author = '';
    public int $pages = 0;
    public string $publisher = '';
    public string $translator = '';
    public string $country = '';
    public int $year = 0;
    public string $month = '';
    public string $format = '';
    public string $gender_literary = '';
    public int $note = 5;

    public function mount(): void
    {
        $this->year = Carbon::now()->year;
    }

    public function showModal(): void
    {
        $this->showAddModal = true;
    }

    public function createReading(): void
    {
        $this->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'gender_author' => 'required|string',
            'format' => 'required|string',
        ]);

        auth()->user()->readings()->create([
            'title' => $this->title,
            'author' => $this->author,
            'format' => $this->format,
            'gender_author' => $this->gender_author,
            'pages' => $this->pages,
            'publisher' => $this->publisher,
            'translator' => $this->translator,
            'country' => $this->country,
            'year' => $this->year,
            'month' => $this->month,
            'gender_literary' => $this->gender_literary,
            'note' => $this->note,
        ]);

        $this->reset();
        $this->close();
    }

    public function close(): void
    {
        $this->showAddModal = false;
    }

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.create-reading', [
            'readings' => auth()->user()->readings()->get()
        ]);
    }
}
