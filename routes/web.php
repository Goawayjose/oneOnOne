<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('api', 'ShotController@index');
Route::post('time-clock', 'timeController@index');
Route::post('startGame', 'gameController@start');




Route::get('game', function () {

  $body = json_encode(["value"=>'starting']);
  $client = new GuzzleHttp\Client(['headers' => ['X-AIO-Key' => 'a6ee99e13cab49259e633e178208cba2', 'Content-Type' => 'application/json']]);
  $client->request('Post', 'https://io.adafruit.com/api/v2/goawayjose/feeds/status/data/', ['body' => $body]);
  return view('game');

});

Route::get('end', function () {

  $body = json_encode(["value"=>'end']);
  $client = new GuzzleHttp\Client(['headers' => ['X-AIO-Key' => 'a6ee99e13cab49259e633e178208cba2', 'Content-Type' => 'application/json']]);
  $client->request('Post', 'https://io.adafruit.com/api/v2/goawayjose/feeds/status/data/', ['body' => $body]);
  return view('end');

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('profile','AccountController@edit');

Route::put('profile','AccountController@update');
