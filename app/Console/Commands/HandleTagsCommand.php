<?php

namespace App\Console\Commands;

use App\Models\Tag;
use Illuminate\Console\Command;

class HandleTagsCommand extends Command
{
    protected $signature = 'handle:tags';

    protected $description = 'Command description';

    public function handle(): void
    {
        $this->info('Handle tags');

        Tag::factory()->count(10)->create();
    }
}
