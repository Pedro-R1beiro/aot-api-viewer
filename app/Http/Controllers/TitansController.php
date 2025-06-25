<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TitansController extends Controller
{
    public function index(Request $request)
    {
        $url = "https://api.attackontitanapi.com/titans?";

        $url .= isset($request->name) ? "name={$request->name}" : '';
        $url .= isset($request->allegiance) ? "allegiance={$request->allegiance}" : '';

        $response = Http::withOptions([
            'verify' => false,
        ])->get($url);
        $data = $response->json();

        return view('titans')->with('data', $data);
    }
}
