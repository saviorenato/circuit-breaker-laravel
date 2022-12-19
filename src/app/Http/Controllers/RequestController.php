<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class RequestController extends Controller
{
    public function testCircuitBreaker()
    {
        return "CONECTADO...";
    }
    public function requestApi()
    {
        $client = new Client();

        try {

            $request = $client->get('https://saviorenato.com.br'); //OK

            // $response = $request->getBody()->getContents();
            $response = $request->getStatusCode();

            echo 'Response: ' . $response . PHP_EOL;
        } catch (GuzzleException $e) {
            echo get_class($e) . ': ' . $e->getMessage() . PHP_EOL;
        }


    }
}
