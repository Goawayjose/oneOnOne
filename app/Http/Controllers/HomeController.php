<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $body = json_encode(["value"=>'end']);
      $client = new GuzzleHttp\Client(['headers' => ['X-AIO-Key' => 'a6ee99e13cab49259e633e178208cba2', 'Content-Type' => 'application/json']]);
      $client->request('Post', 'https://io.adafruit.com/api/v2/goawayjose/feeds/status/data/', ['body' => $body]);
      return view('end');
      
        return view('home');
    }
}
