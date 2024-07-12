<?php

namespace App\Console\Commands;

use App\Models\Comment;
use App\Models\Note;
use Illuminate\Console\Command;

class HandleTagsCommand extends Command
{
    protected $signature = 'handle:tags';

    protected $description = 'Command description';

    public function handle(): void
    {
        $this->info('Handle tags');

        $note = Note::factory()->create([
            'user_id' => 1,
            'reading_id' => 112,
        ]);

        Comment::factory()->count(3)->create([
            'user_id' => 1,
            'note_id' => $note->id,
        ]);

//        Reading::factory()->count(10)->create([
//            'user_id' => 1,
//        ]);

//        Tag::factory()->count(10)->create();
    }
}
