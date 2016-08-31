<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getIndex()
    {
        return view('team.create');
    }

    public function show() {
      $players = Player::all();
      return view('team.index')->with('players', $players);
    }

    public function store(Request $request)
    {
        // Validate
        $this->validate($request, [
               'position' => 'required|max:255',
               'name' => 'required|max:255',
               'age' => 'required|integer',
               'overall' => 'required|integer',
               'appearances' => 'required|integer',
               'goals' => 'required|integer',
               'assists' => 'required|integer',
               'joined' => 'required|integer',
               'form' => 'required|integer',
               'contract' => 'required|max:255',
               'nationality' => 'required|max:255',
               'value' => 'required|integer',
               'wages' => 'required|integer',

         ]);

        // Store
        $players = new Player();
        $players->position    = $request->position;
        $players->name        = $request->name;
        $players->age         = $request->age;
        $players->overall     = $request->overall;
        $players->appearances = $request->appearances;
        $players->goals       = $request->goals;
        $players->assists     = $request->assists;
        $players->joined      = $request->joined;
        $players->form        = $request->form;
        $players->contract    = $request->contract;
        $players->nationality = $request->nationality;
        $players->value       = $request->value;
        $players->wages       = $request->wages;


        $players->save();

        // Redirect
        return redirect()->route('list.player');

    }
}
