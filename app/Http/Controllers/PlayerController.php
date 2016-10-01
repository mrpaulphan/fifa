<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Player;

class PlayerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getIndex()
    {
        return view('team.create');
    }

    public function show()
    {
        $userID = Auth::user()->id;
        $players = Player::all();
        $players = Player::where('user_id', $userID);

        return view('team.index')->with('players', $players);
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $players = new Player();

        foreach ($request as $request) {
            echo $request->name;
        }
        die();
        foreach ($request as $request) {
            $players->save([
                'name' => $request->name,
                'position' => $request->position,
                'age' => $request->age,
                'season_id ' => $request->season_id,
                'overall' => $request->overall ]);
        }
        die();


        // Redirect
        return redirect()->route('list.player');
    }

    public function edit(Request $request, $id)
    {
    }

    public function destroy(Request $request)
    {
        $deleteRowWithID = Player::where('id', $request->id)->delete();
        $deleteRowWithID;

        return redirect()->route('list.player');
    }
}
