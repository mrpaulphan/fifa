<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Season;
use App\Save;

class SeasonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        
    }
    // Get Save ID
    public function getSaveId($slug)
    {
        $save = new Save();
        $save = Save::where('slug', $slug)->get();

        return $save[0]->id;
    }

    public function store(Request $request)
    {


        $season = new Season();
        $season->save_id = $request->save_id;
        $season->season = $requet->season;
        $season->name = $request->name;
        $season->color = $request->color ;
        $season->manager_popularity = $request->manager_popularity;
        $season->continental_objective = $request->continental_objective;
        $season->domestic_objective = $request->domestic_objective;
        $season->brand_objective = $request->brand_objective;
        $season->financial_objective = $request->financial_objective;
        $season->youth_objective = $request->youth_objective;
        $season->club_worth = $request->club_worth;
        $season->transfer_budget = $request->transfer_budget;
        $season->earnings = $request->earnings;
        $season->expenses = $request->expenses;
        $season->save();

        // Store
        if ($request->isMethod('post')) {
            return response()->json([
                    'id' => $season->id,
                    'save_id' => $request->save_id,
                    'season' => $request->season,
                    'name' => $request->name,
                    'color' => $request->color,
                    'manager_popularity' => $request->manager_popularity,
                    'continental_objective' => $request->continental_objective,
                    'domestic_objective' => $request->domestic_objective,
                    'brand_objective' => $request->brand_objective,
                    'financial_objective' => $request->financial_objective,
                    'youth_objective' => $request->youth_objective,
                    'club_worth' => $request->club_worth,
                    'transfer_budget' => $request->transfer_budget,
                    'earnings' => $request->earnings,
                    'expenses' => $request->expenses,
                ]);
        } else {
            return redirect()->route('show.seasons', [Auth::user()->username, $request->slug]);
        }
    }
    public function update(Request $request)
    {
        $saveId = $request->save_id;
         // Update data
        $season = new Season();
        $season = Season::where('save_id', $saveId)->update([
            'save_id' => $request->save_id,
            'season' => $request->season,
            'name' => $request->name,
            'color' => $request->color,
            'manager_popularity' => $request->manager_popularity,
            'continental_objective' => $request->continental_objective,
            'domestic_objective' => $request->domestic_objective,
            'brand_objective' => $request->brand_objective,
            'financial_objective' => $request->financial_objective,
            'youth_objective' => $request->youth_objective,
            'club_worth' => $request->club_worth,
            'transfer_budget' => $request->transfer_budget,
            'earnings' => $request->earnings,
            'expenses' => $request->expenses,
            'activated' => true,
          ]);

          // Redirect
          $username = Auth::user()->username;
        $slug = $request->slug;
        if ($request->isMethod('put')) {
            return response()->json([
                'save_id' => $request->save_id,
                'season' => $request->season,
                'name' => $request->name,
                'color' => $request->color,
                'manager_popularity' => $request->manager_popularity,
                'continental_objective' => $request->continental_objective,
                'domestic_objective' => $request->domestic_objective,
                'brand_objective' => $request->brand_objective,
                'financial_objective' => $request->financial_objective,
                'youth_objective' => $request->youth_objective,
                'club_worth' => $request->club_worth,
                'transfer_budget' => $request->transfer_budget,
                'earnings' => $request->earnings,
                'expenses' => $request->expenses,
                  ]);
        } else {
            return redirect()->route('show.seasons', [$username, $slug]);
        }
    }
}
