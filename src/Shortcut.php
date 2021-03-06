<?php

namespace kayrah87;

use GuzzleHttp\Client;

class Shortcut
{

    protected $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    // make a guzzle request to shortcut.com with a token in the header
    public function makeRequest($location, $method = 'GET', $body = null)
    {
        $uri = 'https://api.app.shortcut.com/api/v3/' . $location;
        $client = new Client();
        $response = $client->request($method, $uri, [
            'headers' => [
                'Content-Type' => 'application/json',
                'Shortcut-Token' => $this->token
            ],
            'body' => $body
        ]);
        return $response;
    }

    // get function that takes an object and an optional id and returns a getShortcut response
    public function get($object, $id = null)
    {
        $uri = $object;
        if ($id) {
            $uri .= '/' . $id;
        }
        $response = $this->makeRequest($uri);
        return json_decode($response->getBody());
    }

    // create function that takes an object and an optional id and returns a createShortcut response
    public function create($object, $body = null)
    {
        $uri = $object;

        $response = $this->makeRequest($uri, 'POST', $body);
        return json_decode($response->getBody());
    }

    public function update($object, $id, $body = null)
    {
        $uri = $object . '/' . $id;

        $response = $this->makeRequest($uri, 'PUT', $body);
        return json_decode($response->getBody());
    }

    public function delete($object, $id)
    {
        $uri = $object . '/' . $id;

        $response = $this->makeRequest($uri, 'DELETE');
        return json_decode($response->getBody());
    }
}