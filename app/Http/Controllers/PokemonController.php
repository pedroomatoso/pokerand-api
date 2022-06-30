<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        return Pokemon::orderBy('id')->get();
    }

    public function store(Request $request)
    {
        return Pokemon::create([
            'pokemon_id' => $request->input('pokemonId'),
            'name' => $request->input('name'),
        ]);
    }
}
