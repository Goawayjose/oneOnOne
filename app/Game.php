<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
  protected $fillable = [
    'id',
    'player1',
    'player2',
    'player1score',
    'player2score'
  ];
}
