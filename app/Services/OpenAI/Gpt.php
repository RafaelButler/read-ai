<?php

namespace App\Services\OpenAI;

use OpenAI;

class Gpt extends AbstractOpenAiClient
{
    public array $messages = [];

    private array $instruction = [];

    public function addMessage(string $role, string $content): void
    {
        $this->messages[] = [
            'role' => $role,
            'content' => $content,
        ];
    }

    public function addInstruction(string $role, string $content): void
    {
        $this->instruction = [
            'role' => $role,
            'content' => $content,
        ];
    }

    public function getMessages(): array
    {
        return $this->messages;
    }
    
    public function create(): OpenAI\Responses\StreamResponse
    {
        $messages = array_merge([$this->instruction], $this->messages);

        return $this->client->chat()->createStreamed([
            'model' => 'gpt-4o-mini',
            'messages' => $messages,
        ]);
    }
}
