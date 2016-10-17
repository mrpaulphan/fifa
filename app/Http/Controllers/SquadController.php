<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Season;

class SquadController extends Controller
{
    public function index(Request $request) {
        



        return view('squad.index');


    }
}
