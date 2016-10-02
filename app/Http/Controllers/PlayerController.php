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
    /**
     * Stores the player.
     *
     * @param Request $request [description]
     *
     * @return [type] [description]
     */
    public function store(Request $request)
    {
        $season_id = $request->season_id;
        foreach ($request->row as $row) {
            $players = new Player();
            $players->season_id = $season_id;
            $players->position = $row['position'];
            $players->name = $row['name'];
            $players->age = $row['age'];
            $players->overall = $row['overall'];
            $players->save();
        }

        echo $request;

        return response()->json([
                'id' => $players->id == null ? null : $players->id,
                'position' => $players->position,
                'name' => $players->name,
                'age' => $players->age,
                'overall' => $players->played,

                ]);
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
