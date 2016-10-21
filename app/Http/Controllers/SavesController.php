<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Saves;
class SavesController extends Controller
{
    /**
     * Show form to create a save. If already have a Save
     * go to the most current save.
     * @return [type] [description]
     */
    public function create() {

        return view('saves.create');
    }
}
