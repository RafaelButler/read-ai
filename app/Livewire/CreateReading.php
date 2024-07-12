<?php

namespace App\Livewire;

use App\Models\Reading;
use App\Models\Tag;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class CreateReading extends Component
{
    use WithPagination, WithoutUrlPagination;

    public Reading $readingEdit;
    public bool $showAddModal = false;
    public bool $showDeleteModal = false;
    public bool $showEditModal = false;
    public int $reading_to_delete;

    public string $title = '';
    public string $author = '';
    public string $gender_author = '';
    public int $pages;
    public string $publisher = '';
    public string $translator = '';
    public string $country = '';
    public int $year;
    public string $month = '';
    public string $format = '';
    public string $gender_literary = '';
    public int $note;

    public function showModal(): void
    {
        $this->reset();
        $this->showAddModal = true;
    }

    public function createReading(): void
    {
        $this->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'gender_author' => 'required|string',
            'format' => 'required|string',
            'note' => 'integer|min:0|max:10'
        ]);

        auth()->user()->readings()->firstOrCreate([
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

        $this->close();
        $this->reset();
    }

    public function close(): void
    {
        $this->showAddModal = false;
    }

    public function deleteModal(int $readingId): void
    {
        $this->showDeleteModal = true;
        $this->reading_to_delete = $readingId;
    }


    public function editModal(Reading $reading): void
    {
        $this->showEditModal = true;
        $this->readingEdit = $reading;
        $this->title = $reading->title;
        $this->author = $reading->author;
        $this->gender_author = $reading->gender_author;
        $this->pages = $reading->pages;
        $this->publisher = $reading->publisher;
        $this->translator = $reading->translator;
        $this->country = $reading->country;
        $this->year = $reading->year;
        $this->month = $reading->month;
        $this->format = $reading->format;
        $this->gender_literary = $reading->gender_literary;
        $this->note = $reading->note;
    }

    public function updateReading(): void
    {
        $this->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'gender_author' => 'required|string',
            'format' => 'required|string',
            'note' => 'integer|min:0|max:10',
        ]);

        $this->readingEdit->update([
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

        $this->showEditModal = false;
        $this->reset();
    }

    public function deleteReading(): void
    {
        auth()->user()->readings()->where('id', $this->reading_to_delete)->delete();
        $this->showDeleteModal = false;
    }

    public function addTag(Reading $reading, Tag $tag): void
    {
        $tag->update([
            'reading_id' => $reading->id,
        ]);
    }

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.create-reading', [
            'readings' => auth()->user()->readings()->with('tags')->paginate(10),
            'tags' => auth()->user()->tags()->get(),
        ]);
    }
}
