<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Game;


class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Game $game)
    {
        $games = Game::all();
        return view('create_game', ['games' => $games]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Game $game)
    {
        $game_name = $request->input("game_name");
        DB::table('games')->insert(['name' => $game_name]); 
        $games = Game::all();   
        return view('create_game', ['games' => $games]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
