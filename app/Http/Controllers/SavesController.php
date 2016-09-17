<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Save;

class SavesController extends Controller
{
    public function store(Request $request)
    {
        // Validate
        $this->validate($request, [
               'saveName' => 'required|max:255',
               'saveManager' => 'required|max:255',
         ]);

         // Convert name to url friendly slug
         $slug = str_slug($request->saveName, '-');

        // Store
        $save = new Save();
        $save->user_id = Auth::user()->id;
        $save->save_name = $request->saveName;
        $save->save_manager_name = $request->saveManager;
        $save->slug = $slug;
        $save->save();

        // Redirect
        $username = Auth::user()->username;
        return redirect()->route('show.saves', [$username]);
    }

    public function edit(Request $request)
    {

        // Validate
        $this->validate($request, [
               'saveName' => 'required|max:255',
               'saveManager' => 'required|max:255',
         ]);

         // Update
          $save = new Save();
        $save = Save::where('id', $request->id)->update([
            'save_name' => $request->saveName,
            'save_manager_name' => $request->saveManager,
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
