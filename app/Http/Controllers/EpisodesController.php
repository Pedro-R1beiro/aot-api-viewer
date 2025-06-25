<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EpisodesController extends Controller
{
    public function index(Request $request)
    {

        $page = request('page', 1);
        $url = "https://api.attackontitanapi.com/episodes?page={$page}?";

        $url .= isset($request->name) ? "&name={$request->name}" : '';
        $url .= isset($request->season) ? "&episode={$request->season}" : '';

        $response = Http::withOptions([
            'verify' => false,
        ])->get($url);
        $data = $response->json();
        return view('episodes')->with('data', $data);
    }
}
