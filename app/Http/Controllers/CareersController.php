<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Career;
use App\User;

class CareersController extends Controller
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
     * Displays the list of careers
     * for current user
     * @param  Request $request
     * @return Save Listing View
     */
    public function index(Request $request)
    {
        $id= Auth::user()->id;
        $careers = User::findOrFail($id)->getCareers;
        return view('careers.index')
            ->with('careers', $careers);
    }

    /**
     * Store Career
     * @param  Request $request
     * @return
     */
    public function store(Request $request)
    {
        // Validate
        $this->validate($request, [
                'name' => 'required|unique:careers,name,NULL,id,user_id,'.Auth::user()->id.'|max:255',
                'manager' => 'required|max:255',
         ]);

         // Genearte slug
        $slug = $this->generateSlug($request->name);

        // Store Career
        $career          = new Career();
        $career->user_id = Auth::user()->id;
        $career->name    = $request->name;
        $career->manager = $request->manager;
        $career->slug    = $slug;
        $career->save();

        return redirect()->route('get.careers');
    }


    /**
     * Updates the career
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function update(Request $request)
    {
        // Validate
        $this->validate($request, [
                'name' => 'required|max:255',
                'manager' => 'required|max:255',
         ]);

         // Update data
        Career::where('id', $request->id)->update([
            'name' => $request->name,
            'manager' => $request->manager,
          ]);


          return redirect()->route('get.careers');
    }

    public function delete(Request $request)
    {
        Career::where('id', $request->id)->delete();

        return redirect()->route('get.careers');
    }
}
