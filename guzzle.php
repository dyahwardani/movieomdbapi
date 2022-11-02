<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->request('GET', 'http://omdbapi.com', [
    'query' => [
        'apikey' => 'dca61bcc',
        's' => 'transformers'
    ]
]);

$result = json_decode($response->getBody()->getContents());
var_dump($result);

?>
