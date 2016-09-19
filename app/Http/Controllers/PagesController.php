<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Team;
use App\Season;
use App\Save;
use App\User;

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
    //    $season = Season::where('user_id', $userID)->get();

        // Get saves that belong to user
        $saves = User::find(1)->saves;
        $seasons = Save::find(1)
            ->seasons()
            ->orderBy('season', 'desc')
            ->get();


        //    $season = $saves->find(1)->seasons()->orderBy('season', 'desc')->get();


        // return teams that belong to current user
        return view('saves.index')
            ->with('saves', $saves);
    }

    public function getSeasons(Request $request)
    {
        // Get user id
        $userID = Auth::user()->id;

        $save = Save::where('user_id', $userID)
            ->where('slug', $request->slug)
            ->first();

        $season = Season::where('save_id', $save->id)
            ->get();

        return view('seasons.index')
            ->with('season', $season)
            ->with('save', $save->first());
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
