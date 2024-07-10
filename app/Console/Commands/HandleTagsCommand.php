<?php

namespace App\Console\Commands;

use App\Models\Reading;
use Illuminate\Console\Command;

class HandleTagsCommand extends Command
{
    protected $signature = 'handle:tags';

    protected $description = 'Command description';

    public function handle(): void
    {
        $this->info('Handle tags');
        Reading::factory()->count(10)->create([
            'user_id' => 1,
        ]);

//        Tag::factory()->count(10)->create();
    }
}
