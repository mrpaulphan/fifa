<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Team;
use App\Save;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getSeasons() {

      $userID                        = Auth::user()->id;
      $team                          = Team::where('user_id', $userID)->get();
      // return teams that belong to current user
      return view('index')->with('team', $team);

    }

    public function create() {
        return view('season.create');
    }

    public function store(Request $request)
    {
        // Store
        $team                        = new Team();
        $team->team_color            = $request->team_color;
        $team->team_name             = $request->team_name;
        $team->user_id               = Auth::user()->id;
        $team->save_id               = $request->save_id;
        $team->domestic_objective    = $request->domestic_objective;
        $team->continental_objective = $request->continental_objective;
        $team->brand_objective       = $request->brand_objective;
        $team->financial_objective   = $request->financial_objective;
        $team->youth_objective       = $request->youth_objective;
        $team->club_worth            = $request->club_worth;
        $team->transfer_budget       = $request->transfer_budget;
        $team->save();

        // Store TeamID to SavesID
    

        // Redirect
        return redirect()->route('show.seasons', [Auth::user()->username, $request->slug ]);
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
       $team                         = new Team();
        $team                        = Team::where('id', $request->id)->update([
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
        $deleteRowWithID             = Player::where('id', $request->id)->delete();
        $deleteRowWithID;

        return redirect()->route('list.player');
    }
}
