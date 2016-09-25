<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Save;
use App\Season;

class SavesController extends Controller
{
    // Create slug from save name
    public function generateSlug($slug)
    {
        $slug = str_slug($slug, '-');

        return $slug;
    }
    public function store(Request $request)
    {
        // Validate
        $this->validate($request, [
                'saveName' => 'required|unique:saves,name,NULL,id,user_id,'.Auth::user()->id.'|max:255',
               'saveManager' => 'required|max:255',
         ]);
        $slug = $this->generateSlug($request->saveName);
        $startingSeason = $request->startingSeason;

        // Store
        $save = new Save();
        $save->user_id = Auth::user()->id;
        $save->name = $request->saveName;
        $save->manager = $request->saveManager;
        $save->slug = $slug;
        $save->save();

        // Create default Season
        $season = new Season();
        $season->save_id = $save->id;
        $season->season = $startingSeason;
        $season->color                 = 'default';
        $season->name                  = '--';
        $season->domestic_objective    = '--';
        $season->continental_objective = '--';
        $season->brand_objective       = '--';
        $season->financial_objective   = '--';
        $season->youth_objective       = '--';
        $season->club_worth            = 0;
        $season->transfer_budget       = 0;
        $season->save();

        // Redirect
        $username = Auth::user()->username;

        return redirect()->route('show.saves', [$username]);
    }

    public function edit(Request $request)
    {

        // Validate
        $this->validate($request, [
               'name' => 'required|max:255',
               'manager' => 'required|max:255',
         ]);

         // Update data
        $save = new Save();
        $save = Save::where('id', $request->id)->update([
            'name' => $request->name,
            'manager' => $request->manager,
          ]);

          // Redirect
          $username = Auth::user()->username;

        return redirect()->route('show.saves', [$username]);
    }

    public function delete(Request $request)
    {
        Save::where('id', $request->id)->delete();

        // Redirect
        $username = Auth::user()->username;

        return redirect()->route('show.saves', [$username]);
    }
}
