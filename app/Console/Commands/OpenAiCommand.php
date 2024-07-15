<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use OpenAI;

class OpenAiCommand extends Command
{
    protected $signature = 'open:ai';

    protected $description = 'Command description';

    public function handle(): void
    {
        /* Get th env api key */
        $apiKey = getenv('OPENAI_API_KEY');
        $client = OpenAI::client($apiKey);

        $stream = $client->chat()->createStreamed([
            'model' => 'gpt-4o',
            'messages' => [
                ['role' => 'user', 'content' => 'Whats capital of EUA?'],
            ],
        ]);

        foreach ($stream as $response) {
            $choices = $response->choices[0]->toArray();
            if (count($choices['delta']) > 0) {
                if ($choices['delta']['content']) {
                    print_r($choices['delta']['content']);
                }
            }
        }
    }
}
