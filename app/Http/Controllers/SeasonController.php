<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Season;
use App\Save;

class SeasonController extends Controller
{
    public function store(Request $request)
    {
        // Store
        $season                        = new Season();
        $season->color                 = $request->color;
        $season->name                  = $request->name;
        $season->save_id               = $request->save_id;
        $season->domestic_objective    = $request->domestic_objective;
        $season->continental_objective = $request->continental_objective;
        $season->brand_objective       = $request->brand_objective;
        $season->financial_objective   = $request->financial_objective;
        $season->youth_objective       = $request->youth_objective;
        $season->club_worth            = $request->club_worth;
        $season->transfer_budget       = $request->transfer_budget;
        $season->save();

        // Store TeamID to SavesID


        // Redirect
        return redirect()->route('show.seasons', [Auth::user()->username, $request->slug ]);
    }
}
