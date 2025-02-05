<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BreweryController extends Controller
{
    public function index(Request $request)
    {
        $response = Http::withOptions([
            'verify' => false,
        ])->get('https://api.openbrewerydb.org/breweries', [
            'per_page' => $request->input('per_page', 1000),
            'page' => $request->input('page', 1)
        ]);

        return response()->json($response->json());
    }
}
