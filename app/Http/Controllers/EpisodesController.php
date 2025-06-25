<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EpisodesController extends Controller
{
    public function index()
    {
        $response = Http::withOptions([
            'verify' => false,
        ])->get('https://api.attackontitanapi.com/episodes');
        $episodes = $response->json();
        return view('episodes')->with('episodes', $episodes);
    }
}
