<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Team;
use App\Season;
use App\User;
use App\Save;

class PagesController extends Controller
{
    public function getIndex(Request $request)
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

        $id= Auth::user()->id;
        $saves = User::findOrFail($id)->getSaves;
        // return teams that belong to current user
        return view('saves.index')
            ->with('saves', $saves);
    }

    public function getSeasons(Request $request)
    {
        $saveId = Season::first()->belongsToSave->id;
        $seasons = Season::where('save_id', $saveId)->orderBy('season', 'desc')->first();

        return view('seasons.index')
            ->with('seasons', $seasons);
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

    public function confirmEmail()
    {
        return view('auth.register-confirm-account');
    }

    public function confirmToken(Request $request)
    {
        echo 'hey';
        echo $request;

        echo Auth::user()->token;
        return view('auth.register-check-email');
    }

}
