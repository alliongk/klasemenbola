<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Team;
use Illuminate\Http\Request;

class OutputController extends Controller
{
    public function index(){
        
        $games = Game::whereNotNull('result1')->get();
        $results = Game::whereNotNull('result1')->get();
        $teams = Team::all()->sortByDesc('points');

        return view('outputs', compact('teams','games','results'));
    }
}
