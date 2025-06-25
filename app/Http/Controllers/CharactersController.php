<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CharactersController extends Controller
{
    public function index(Request $request) 
    {
        $page = request('page', 1);
        $url = "https://api.attackontitanapi.com/characters?page={$page}?";

        $url .= isset($request->name) ? "&name={$request->name}" : '';
        $url .= isset($request->gender) ? "&gender={$request->gender}" : '';
        $url .= isset($request->status) ? "&status={$request->status}" : '';
        $url .= isset($request->occupation) ? "&occupation={$request->occupation}" : '';

        $response = Http::withOptions([
            'verify' => false,
        ])->get($url);
        
        $data = $response->json();
        return view('characters')->with('data', $data);
    }
}
