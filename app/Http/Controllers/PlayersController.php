<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Player;

class PlayersController extends Controller
{
    public function show($id) {
        
        $player = Player::with('team')->find($id);
        info($player);
        return view('players.show', compact('player'));

    }
}
