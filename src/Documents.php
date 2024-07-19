<?php

namespace Heytextual;

use GuzzleHttp\Client as GuzzleClient;

class Documents
{
    private $client;

    public function __construct(GuzzleClient $client)
    {
        $this->client = $client;
    }

    public function fetch($params = [])
    {
        $response = $this->client->request('POST', '/documents', [
            'json' => $params
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}
