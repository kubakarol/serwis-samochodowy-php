<?php

// app/Http/Controllers/ChuckNorrisJokesController.php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ChuckController extends Controller
{
    public function getRandomJoke()
    {
        $client = new Client();

        $response = $client->request('GET', 'https://matchilling-chuck-norris-jokes-v1.p.rapidapi.com/jokes/random', [
            'headers' => [
                'X-RapidAPI-Host' => 'matchilling-chuck-norris-jokes-v1.p.rapidapi.com',
                'X-RapidAPI-Key' => 'f29d31b2b2mshc2ef6288718c3c5p121794jsnbbfb99b6734b',
                'accept' => 'application/json',
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        // Zwróć tylko wartość z klucza 'value'
        return response()->json(['joke' => $data['value']]);
    }
}
