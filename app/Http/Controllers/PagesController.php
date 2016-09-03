<?php

namespace App\Http\Controllers;
use App\Team;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

class PagesController extends Controller
{



      public function getIndex() {
        return view('landing');
      }



    public function getPlayers() {
      return view('team.index');
    }

    public function getTransfers() {
      return view('transfers.index');
    }
    public function getYouth() {
      return view('youth.index');
    }
    public function getCareers() {
      return view('careers.index');
    }
}
