<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShotController extends Controller
{

  public function index()
  {


     //$data2 = file_get_contents('https://io.adafruit.com/api/v2/goawayjose/feeds/score2/data');
     $data1 = json_decode(file_get_contents('https://io.adafruit.com/api/v2/goawayjose/feeds/score1/data'));
     $data2 = json_decode(file_get_contents('https://io.adafruit.com/api/v2/goawayjose/feeds/score2/data'));
     $data3 = json_decode(file_get_contents('https://io.adafruit.com/api/v2/goawayjose/feeds/player/data'));
     $data4 = json_decode(file_get_contents('https://io.adafruit.com/api/v2/goawayjose/feeds/status/data'));


    return [$data1[0]->value, $data2[0]->value, $data3[0]->value, $data4[0]->value];

  }


}
