@extends('layouts.app')

@section('content')
    <?php

    /*foreach ($data2 as $feedItem) {
      $count2 = (int) $feedItem->value;
    }

    foreach ($data1 as $feedItem) {
      $count1 = (int) $feedItem->value;
    }
*/
    //
    // function off() {
    //   $body = json_encode(["value"=>'24SecondViolation']);
    //   $client = new GuzzleHttp\Client(['headers' => ['X-AIO-Key' => 'a6ee99e13cab49259e633e178208cba2', 'Content-Type' => 'application/json']]);
    //   $client->request('Post', 'https://io.adafruit.com/api/v2/goawayjose/feeds/status/data/', ['body' => $body]);
    // }
    //
    // if (isset($_POST['action'])) {
    //     switch ($_POST['action']) {
    //         case 'insert':
    //             insert();
    //             break;
    //         case 'select':
    //             select();
    //             break;
    //     }
    // }
    //
    // function select() {
    //     echo "The select function is called.";
    //     exit;
    // }
    //
    // function insert() {
    //     echo "The insert function is called.";
    //     exit;
    // }



    ?>


<div id="app">

<div class="card p-4">
  @{{ player1 }}
</div>

<div class="card p-4">
  @{{ player2 }}
</div>





</div>



<!--

    <div class="container ">

      <div class="row">
        <div class="col-4">

          <h3 class="text-center">Player 1</h3>
          <h1 class="text-center"><?php echo $count1; ?></h1>
          <button type="button" name="button" class="clickButton"> start</button>
        </div>
        <div class="col-4">
          <p class="text-center">Shot Clock</p>
          <h2 class="text-center" id="shotClock">24</h2>
        </div>
        <div class="col-4">

          <h3 class="text-center" >Player 2</h3>
          <h1 class="text-center"><?php echo $count2; ?></h1>
        </div>
      </div>
    </div> -->


    <script
      src="https://code.jquery.com/jquery-3.2.1.min.js"
      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous"></script>

    <script type="text/javascript">
      // counter = 5;
      // status = "off";
      //
      // function start() {
      //   countDown = setInterval(function () {
      //     counter--;
      //     console.log(counter);
      //     if( counter === 0) {
      //       clearInterval(countDown);
      //       counter = 25;
      //       console.log("Shot Clock Violation");
      //     }
      //   }, 1000);
      // }
      //
      //
      // $('.clickButton').click(function(){
      //         var clickBtnValue = $(this).val();
      //
      //         data =  {'action': clickBtnValue};
      //         $.post(data, function (response) {
      //             // Response div goes here.
      //             alert("action performed successfully");
      //         });
      //     });

    </script>
@endsection
