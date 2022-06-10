<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\PlayerRole;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PlayerController extends Controller
{
    public function createPlayer(Request $request)
    {
        $new_player = new Player();
        $new_player->player_name = $request->input('player_name');
        $new_player->player_type = $request->input('player_type');
        $new_player->player_faction = $request->input('player_faction');
        $new_player->save();

        $new_player_role = new PlayerRole();
        $new_player_role->player_class = $request->input('player_class');
        $new_player_role->health = 120;
        $new_player_role->weapon = "sword";
        $new_player_role->player()->associate($new_player);
        $new_player_role->save();
        // check whether player it is created or not!
        if ($new_player) {
            if ($request->input('player_faction') === 'coallition') {
                // create computer player
                $new_computer_player = new Player();
                $new_computer_player->player_type = "computer";
                $new_computer_player->player_faction = 'colonie';
                $new_computer_player->save();
            } else {
                // create computer player
                $new_computer_player = new Player();
                $new_computer_player->player_type = "computer";
                $new_computer_player->player_faction = 'coallition';
                $new_computer_player->save();
            }
        }

        return view('/game')->with('success', 'player saved successfully!');
    }
}
