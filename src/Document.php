<?php

namespace Heytextual;

use GuzzleHttp\Client as GuzzleClient;

class Document
{
    private $client;

    public function __construct(GuzzleClient $client)
    {
        $this->client = $client;
    }

    public function fetch($documentId)
    {
        $response = $this->client->request('POST', '/document', [
            'form_params' => [
                'documentId' => $documentId
            ]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}
