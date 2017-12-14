@extends('layouts.app')
@section('content')

<div>
<div class="container" >
  <div v-if="status === 'starting'">

      <div class="row">

        <div class="col-12 text-center">
          <img src="img/default.jpg" alt="">
          <h1>Player 1's ball</h1>
          <h3>Step on the Check box to start the game</h3>
          @{{status}}
        </div>


      </div>
      </div>





      <div v-else>
        <div class="row shotClockRow">
         <div class="col-12 text-center">
            <p>Shot Clock</p>
            <h1 class="shotClock">@{{ timeClock }}</h1>
          </div>
        </div>
        <div class="row players">
          <div class="col-6 p-4 text-center">
            <img src="img/default.jpg" class="playerImg_Game" alt="">

            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" enable-background="new 0 0 100 100" xml:space="preserve" style="display: none;">
  <defs>
    <symbol id="basketball" viewBox="0 0 100 100">
      <title>Basketball</title>
      <path d="M28.1,36.6c4.6,1.9,12.2,1.6,20.9,1.1c8.9-0.4,19-0.9,28.9,0.9c6.3,1.2,11.9,3.1,16.8,6c-1.5-12.2-7.9-23.7-18.6-31.3   c-4.9-0.2-9.9,0.3-14.8,1.4C47.8,17.9,36.2,25.6,28.1,36.6z"/>
      <path d="M70.3,9.8C57.5,3.4,42.8,3.6,30.5,9.5c-3,6-8.4,19.6-5.3,24.9c8.6-11.7,20.9-19.8,35.2-23.1C63.7,10.5,67,10,70.3,9.8z"/>
      <path d="M16.5,51.3c0.6-1.7,1.2-3.4,2-5.1c-3.8-3.4-7.5-7-11-10.8c-2.1,6.1-2.8,12.5-2.3,18.7C9.6,51.1,13.4,50.2,16.5,51.3z"/>
      <path d="M9,31.6c3.5,3.9,7.2,7.6,11.1,11.1c0.8-1.6,1.7-3.1,2.6-4.6c0.1-0.2,0.3-0.4,0.4-0.6c-2.9-3.3-3.1-9.2-0.6-17.6   c0.8-2.7,1.8-5.3,2.7-7.4c-5.2,3.4-9.8,8-13.3,13.7C10.8,27.9,9.8,29.7,9,31.6z"/>
      <path d="M15.4,54.7c-2.6-1-6.1,0.7-9.7,3.4c1.2,6.6,3.9,13,8,18.5C13,69.3,13.5,61.8,15.4,54.7z"/>
      <path d="M39.8,57.6C54.3,66.7,70,73,86.5,76.4c0.6-0.8,1.1-1.6,1.7-2.5c4.8-7.7,7-16.3,6.8-24.8c-13.8-9.3-31.3-8.4-45.8-7.7   c-9.5,0.5-17.8,0.9-23.2-1.7c-0.1,0.1-0.2,0.3-0.3,0.4c-1,1.7-2,3.4-2.9,5.1C28.2,49.7,33.8,53.9,39.8,57.6z"/>
      <path d="M26.2,88.2c3.3,2,6.7,3.6,10.2,4.7c-3.5-6.2-6.3-12.6-8.8-18.5c-3.1-7.2-5.8-13.5-9-17.2c-1.9,8-2,16.4-0.3,24.7   C20.6,84.2,23.2,86.3,26.2,88.2z"/>
      <path d="M30.9,73c2.9,6.8,6.1,14.4,10.5,21.2c15.6,3,32-2.3,42.6-14.6C67.7,76,52.2,69.6,37.9,60.7C32,57,26.5,53,21.3,48.6   c-0.6,1.5-1.2,3-1.7,4.6C24.1,57.1,27.3,64.5,30.9,73z"/>
    </symbol>
  </defs>
</svg>

<svg v-if="possession === 'player1'" class="icon-basketball">
  <use xlink:href="#basketball"></use>
</svg>

            <h3 class="badge badge-primary">player 1</h3>
            <h1> @{{ player1 }}

            </h1>



          </div>

          <div class="col-6 p-4 text-center">
            <img src="img/default.jpg" class="playerImg_Game" alt="">
            <svg v-if="possession === 'player2'" class="icon-basketball">
              <use xlink:href="#basketball"></use>
            </svg>
            <h3 class="badge badge-success">player 2</h3>

            <h1>  @{{ player2 }}<h1>
        </div>
      </div>
      <footer>
        <div class="row">
          <div class="col-12 text-center">
            <a href="/end">
              <button type="button" name="button" class="btn btn-danger">End Game</button>
            </a>
          </div>

        </div>
      </footer>
    </div>
  </div>

</div>

@endsection
