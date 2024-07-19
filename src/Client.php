<?php

namespace Heytextual;

use GuzzleHttp\Client as GuzzleClient;

class Client
{
    private $apiKey;
    private $client;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
        $this->client = new GuzzleClient([
            'base_uri' => 'https://api.heytextual.com',
            'headers' => [
                'Authorization' => "Bearer {$this->apiKey}"
            ]
        ]);
    }

    public function extract($filePath, $templateId)
    {
        return (new Extract($this->client))->perform($filePath, $templateId);
    }

    public function documents($params = [])
    {
        return (new Documents($this->client))->fetch($params);
    }

    public function document($documentId)
    {
        return (new Document($this->client))->fetch($documentId);
    }

    public function templates($params = [])
    {
        return (new Templates($this->client))->fetch($params);
    }
}
