<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Competition;

class CompetitionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request)
    {
        //        dd($request->row);
        // Mass Assign

        if ($request->id == null) {
            $season_id = $request->season_id;
            foreach ($request->row as $row) {
                $competition = new Competition();
                $competition->season_id = $season_id;
                $competition->name = $row['name'];
                $competition->type = $row['type'];
                $competition->result = $row['result'];
                $competition->played = $row['played'];
                $competition->won = $row['won'];
                $competition->tied = $row['tied'];
                $competition->lost = $row['lost'];
                $competition->save();
            }
        } else {
            foreach ($request->row as $row) {
                $competition = new Competition();
                $competition = Competition::where('id', $request->id)->update([
                'name' => $competition->name,
                'type' => $competition->type,
                'result' => $competition->result,
                'played' => $competition->played,
                'won' => $competition->won,
                'tied' => $competition->tied,
                'lost' => $competition->lost,
              ]);
            }
        }


        if ($request->isMethod('put')) {
            return response()->json([
                'id' => $competition->id == null ? null : $competition->id,
                'name' => $competition->name,
                'type' => $competition->type,
                'result' => $competition->result,
                'played' => $competition->played,
                'won' => $competition->won,
                'tied' => $competition->tied,
                'lost' => $competition->lost,

                ]);
        } else {
            return 'heyy';
        }
    }
}
