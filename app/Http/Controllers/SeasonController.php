<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Season;
use App\Save;

class SeasonController extends Controller
{
    // Get Save ID
    public function getSaveId($slug) {
        $save = new Save();
        $save = Save::where('slug', $slug)->get();
        return $save[0]->id;
    }

    public function store(Request $request)
    {
        $save_id= $this->getSaveId($request->slug);

        // Store
        if ($request->isMethod('post')){

            $season                        = new Season();
            $season->save_id               = $save_id;
            $season->color                 = $request->color;
            $season->name                  = $request->name;
            $season->domestic_objective    = $request->domestic_objective;
            $season->continental_objective = $request->continental_objective;
            $season->brand_objective       = $request->brand_objective;
            $season->financial_objective   = $request->financial_objective;
            $season->youth_objective       = $request->youth_objective;
            $season->club_worth            = $request->club_worth;
            $season->transfer_budget       = $request->transfer_budget;
            $season->save();

            return response()->json([
                    'name' =>  $request->color,
                    'color' => $request->name,
                    'domestic_objective' => $request->domestic_objective,
                    'continental_objective' => $request->continental_objective,
                    'brand_objective' => $request->brand_objective,
                    'financial_objective' => $request->financial_objective,
                    'youth_objective' => $request->youth_objective,
                    'club_worth' => $request->club_worth,
                    'transfer_budget' => $request->transfer_budget
                ]);
            }


        // Store TeamID to SavesID


        // Redirect
        return redirect()->route('show.seasons', [Auth::user()->username, $request->slug ]);
    }
}
