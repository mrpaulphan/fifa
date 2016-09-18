<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Team;
use App\Season;
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
        $id = array();
        foreach ($saves as $save) {
            array_push($id, $save->id);
        }
        // return teams that belong to current user
        return view('saves.index')->with('saves', $saves);
    }

    public function getSeasons(Request $request, $saveId)
    {
        // Get user id
        $userID = Auth::user()->id;
        $save = Save::where('user_id', $userID)->where('slug', $request->slug)->get();
        $save->slug = $request->slug;
        $save->id = $request->id;
        $season = Season::where('save_id', $save->id)->get();
        return view('seasons.index')->with('season', $season)->with('save', $save);
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
