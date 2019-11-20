<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class ApiController extends Controller
{
    public function index()
    {
        $api_key = '966807fff7e243bd921c605c991bb5b4';
        $client = new Client();

        $response = $client->request('GET','https://newsapi.org/v2/top-headlines?country=id&apiKey='.$api_key);
        $responseBody = $response->getBody()->getContents();

        $api_response = json_decode($responseBody,true);
        return view('home',compact('api_response'));
    }
}
