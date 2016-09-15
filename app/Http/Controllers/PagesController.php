<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{



      public function getIndex() {
          if (Auth::check())
          {
              return redirect()->route('show.seasons');

          } else {
              return view('landing');

          }

      }



    public function getPlayers() {
      return view('team.index');
    }

    public function getTransfers()
    {
        return view('transfers.index');
    }
    public function getYouth()
    {
        return view('youth.index');
    }
    public function getCareers()
    {
        return view('careers.index');
    }
    public function getTeamSelect()
    {
        return view('teamselect.index');
    }
}
