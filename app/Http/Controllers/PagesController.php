<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Team;
use App\Save;

class PagesController extends Controller
{
    public function getIndex()
    {
        if (Auth::check()) {
            $username = Auth::user()->username;

            return redirect()->route('show.saves', [$username]);
        } else {
            return view('landing');
        }
    }

    public function getPlayers()
    {
        return view('team.index');
    }
    public function getStyleGuide()
    {
        return view('styleguide.index');
    }

    public function getSaves()
    {
        $userID = Auth::user()->id;
        $saves = Save::where('user_id', $userID)->get();
        $team = Team::where('user_id', $userID)->get();
        $id = array();
        foreach ($saves as $save) {
            array_push($id, $save->id);
        }
        // return teams that belong to current user
        return view('saves.index')->with('saves', $saves)->with('id', $id)->with('team', $team);
    }

    public function getSeasons(Request $request)
    {
        $userID = Auth::user()->id;
        $team = Team::where('user_id', $userID)->get();
        $save = Save::where('user_id', $userID)->where('slug', $request->slug)->get();
        // Get first object
        $save = $save[0];
        return view('seasons.index')->with('team', $team)->with('slug', $request->slug)->with('save', $save);
    }


    public function getTransfers()
    {
        return view('transfers.index');
    }
    public function getYouth()
    {
        return view('youth.index');
    }
    public function getCareers()
    {
        return view('careers.index');
    }
    public function getTeamSelect()
    {
        return view('teamselect.index');
    }
}
