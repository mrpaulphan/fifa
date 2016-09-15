<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Team;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getSeasons() {

      $userID = Auth::user()->id;
      $team = Team::where('user_id', $userID)->get();
      // return teams that belong to current user
      return view('index')->with('team', $team);

    }

    public function create() {
        return view('season.create');
    }
    public function store(Request $request)
    {
        // Validate
        $this->validate($request, [
               'team' => 'required|max:255',
               'body' => 'nullable',
               'worth' => 'required|integer',
               'budget' => 'required|integer',
               'win' => 'required|integer',
               'loss' => 'required|integer',
               'season' => 'required',
         ]);

        // Store
        $team = new Team();
        $team->team = $request->team;
        $team->body = $request->body;
        $team->worth = $request->worth;
        $team->budget = $request->budget;
        $team->win = $request->win;
        $team->loss = $request->loss;
        $team->season = $request->season;
        $team->user_id = Auth::user()->id;
        $team->save();

        // Redirect
        return redirect()->route('show.seasons');
    }

    public function edit(Request $request)
    {

      // Validate
      $this->validate($request, [
             'team' => 'required|max:255',
             'body' => 'nullable',
             'worth' => 'required|integer',
             'budget' => 'required|integer',
             'win' => 'required|integer',
             'loss' => 'required|integer',
             'season' => 'required',
       ]);
       // Store
       $team = new Team();
        $team = Team::where('id', $request->id)->update([
          'team' => $request->team,
          'body' => $request->body,
          'worth' => $request->worth,
          'budget' => $request->budget,
          'win' => $request->win,
          'loss' => $request->loss,
          'season' => $request->season,

        ]);

        return redirect()->route('show.seasons');
    }

    public function destroy(Request $request)
    {
        $deleteRowWithID = Player::where('id', $request->id)->delete();
        $deleteRowWithID;

        return redirect()->route('list.player');
    }
}
