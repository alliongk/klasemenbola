<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\TeamRequest;

class TeamController extends Controller
{
   
    public function index(): View
    {
        $teams = Team::all();

        return view('teams.index', compact('teams'));
    }

    public function create(): View
    {
        return view('teams.create');
    }

    public function store(TeamRequest $request): RedirectResponse
    {
        Team::create($request->validated());

        return redirect()->route('teams.index')->with([
            'message' => 'input data sukses !',
            'alert-type' => 'success'
        ]);
    }

}
