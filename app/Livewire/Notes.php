<?php

namespace App\Livewire;

use App\Models\Note;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;

class Notes extends Component
{
    public bool $showModal = false;
    public string $comment = '';
    public $selected;

    public array $comments = [];

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.notes', [
            'notes' => auth()->user()
                ->notes()
                ->withCount('comments')
                ->with('reading')
                ->orderBy('date', 'desc')
                ->get()->sortByDesc('created_at'),
        ]);
    }

    public function createComment(): void
    {
        $this->validate([
            'comment' => 'required|min:3',
        ]);

        $comment = $this->selected->comments()->create([
            'text' => $this->comment,
            'user_id' => auth()->id(),
        ]);

        $this->comment = '';
        /* Add to the end of array comments */
        $this->comments[] = [
            'id' => $comment->id,
            'text' => $comment->text,
            'user' => $comment->user->name,
            'created_at' => $comment->created_at->format('H:i'),
        ];
    }

    public function deleteComment(int $commentId): void
    {
        $comment = $this->selected->comments()->find($commentId);
        $comment->delete();
        /* Remove from array comments */
        $this->comments = array_filter($this->comments, function ($comment) use ($commentId) {
            return $comment['id'] !== $commentId;
        });
    }

    public function showModalAdd(Note $note): void
    {
        $comments = $note->comments()->get();
        $this->selected = $note;
        /* Pass comment with user */
        $this->comments = $comments->map(function ($comment) {
            return [
                'id' => $comment->id,
                'text' => $comment->text,
                'user' => $comment->user->name,
                'created_at' => $comment->created_at->format('H:i'),
            ];
        })->toArray();
        $this->showModal = true;
    }

    public function deleteNote(Note $note): void
    {
        $note->delete();
    }
}
