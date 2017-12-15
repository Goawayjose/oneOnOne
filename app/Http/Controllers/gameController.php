<?php

namespace App\Http\Controllers;
use App\User;
use App\Game;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class gameController extends Controller
{
  public function start() {
    $game = new Game;
    $game->player1 = 6;
    $game->save();
  }


}
