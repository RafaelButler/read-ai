<?php

namespace App\Services\OpenAI;

use OpenAI;

abstract class AbstractOpenAiClient
{
    protected OpenAI\Client $client;
    protected string|array|false $apiKey;

    public function __construct(OpenAI\Client $client)
    {
        $this->apiKey = getenv('OPENAI_API_KEY');
        $this->client = $client;
    }

    abstract public function create();
}
