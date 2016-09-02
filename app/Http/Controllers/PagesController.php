<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function getIndex() {
      return view('landing');
    }

    public function getTeam() {
      return view('team.index');
    }

    public function getTransfers() {
      return view('transfers.index');
    }
}
