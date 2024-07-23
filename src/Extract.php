<?php

namespace Heytextual;

use GuzzleHttp\Client as GuzzleClient;

class Extract
{
    private $client;

    public function __construct(GuzzleClient $client)
    {
        $this->client = $client;
    }

    public function perform($filePath, $templateId)
    {
        $response = $this->client->request('POST', '/extract', [
            'multipart' => [
                [
                    'name'     => 'file',
                    'contents' => fopen($filePath, 'r')
                ],
                [
                    'name'     => 'template',
                    'contents' => $templateId
                ]
            ]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}
