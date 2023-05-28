<?php

namespace App\Http\Controllers\Admin;

use App\Models\Game;
use App\Models\Team;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\TeamRequest;

class TeamController extends Controller
{
   
    public function index(): View
    {
        $teams = Team::all();

        return view('admin.teams.index', compact('teams'));
    }

    public function create(): View
    {
        return view('admin.teams.create');
    }

    public function store(TeamRequest $request): RedirectResponse
    {
        Team::create($request->validated());

        return redirect()->route('admin.teams.index')->with([
            'message' => 'input data sukses !',
            'alert-type' => 'success'
        ]);
    }

    public function massDestroy()
    {
        Team::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
