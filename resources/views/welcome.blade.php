@extends('layouts.app')


  @section('content')

  @guest
  <div class="jumbotron">
      <h1>PROVE YOURSELF <br> ON THE <br> COURT</h1>
  </div>

  @else

    <div class="row createGame">
      <div class="col-12">
        <img src="/uploads/images/{{ Auth::user()->name }}" alt="" style="height:125px; width: 125px; position:relative;">
        <h1>Start Game</h1>
        {{ Auth::user()->name }}

      </div>
      <div class="col-6">

        <div class="addPlayer">
          <button type="button" name="button">
            <i class="fa fa-user" aria-hidden="true"></i>
            <i class="fa fa-plus" aria-hidden="true"></i>
          </button>
          <div class="playerAdded">
            <img src="" alt="">
          </div>
          <h4>Player 1</h4>
        </div>

      </div>
      <div class="col-6">
        <div class="addPlayer">
          <button class="btnPlayer1" type="button" name="button">
            <i class="fa fa-user" aria-hidden="true"></i>
            <i class="fa fa-plus" aria-hidden="true"></i>
          </button>
          <div class="playerAdded">
            <img src="" alt="">
          </div>
          <h4>Player 2</h4>
        </div>
      </div>
    </div>

    <a href="/game" class="btn btn-primary">start</a>


  @endguest


  @endsection
