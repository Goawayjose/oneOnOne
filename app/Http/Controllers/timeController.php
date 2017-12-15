<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class timeController extends Controller
{
  public function index()
  {
  $body = json_encode(["value"=>'timeClockViolation']);
  $client = new Client(['headers' => ['X-AIO-Key' => 'a6ee99e13cab49259e633e178208cba2', 'Content-Type' => 'application/json']]);
  $client->request('Post', 'https://io.adafruit.com/api/v2/goawayjose/feeds/status/data/', ['body' => $body]);
  }
}
