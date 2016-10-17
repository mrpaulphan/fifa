<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Save;
use App\Season;
use App\User;

class SavesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // Create slug from save name
    public function generateSlug($slug)
    {
        $slug = str_slug($slug, '-');

        return $slug;
    }

    /**
     * Displays the list of saves
     * for the signed in user
     * @param  Request $request
     * @return Save Listing View
     */
    public function index(Request $request)
    {
        $id= Auth::user()->id;
        $saves = User::findOrFail($id)->getSaves;
        return view('saves.index')
            ->with('saves', $saves);
    }

    /**
     * Store Save
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function store(Request $request)
    {
        // Validate
        $this->validate($request, [
                'name' => 'required|unique:saves,name,NULL,id,user_id,'.Auth::user()->id.'|max:255',
                'manager' => 'required|max:255',
         ]);
         // Genearte slug
        $slug = $this->generateSlug($request->name);

        // Store
        $save = new Save();
        $save->user_id = Auth::user()->id;
        $save->name = $request->name;
        $save->manager = $request->manager;
        $save->slug = $slug;
        $save->save();

        $season = new Season();
        $season->save_id = $save->id;

        $season->save();

        // Redirect
        $username = Auth::user()->username;

        return redirect()->route('get.saves', [$username]);
    }

    public function edit(Request $request)
    {

        // Validate
        $this->validate($request, [
                'name' => 'required|unique:saves,name,NULL,id,user_id,'.Auth::user()->id.'|max:255',
                'manager' => 'required|max:255',
         ]);

         // Update data
        $save = Save::where('id', $request->id)->update([
            'name' => $request->name,
            'manager' => $request->manager,
          ]);

          $username = Auth::user()->username;

          return redirect()->route('get.saves', [$username]);
    }

    public function delete(Request $request)
    {
        Save::where('id', $request->id)->delete();

        // Redirect
        $username = Auth::user()->username;

        return redirect()->route('get.saves', [$username]);
    }
}
