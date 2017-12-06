
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));




if(document.getElementById('app')){


const app = new Vue({
    el: '#app',
     data: {
       player1: null,
       player2: null,
       possession: "",
       theWinner: "",
       status: "starting",
       timeClock: 0,
     },
    methods: {
      getData() {
        console.log('deal');
        var that = this;
          axios.get('/api')
            .then(function (response) {
              that.player1 = response.data[0];
              that.player2 = response.data[1];
              that.possession = response.data[2];
              that.status = response.data[3];

              console.log(this.status);
            })
            .catch(function (error) {
              console.log(error);
        });
      },
      countDown() {
        if(this.status != "starting") {
            this.timeClock++;

            if (this.timeClock === 24) {

              clearInterval(countDowntimer);
              axios.post('/timeClock')
              .then(function (response) {
                console.log(response);
              })
              .catch(function (error) {
                console.log(error);
              });
            }
        }
      },
      ending() {
        if(this.player2 > this.player1) {
          alert('Player 2 Wins');
        }
        if(this.player2 < this.player1) {
          alert('Player 1 Wins');
        }
      },

    }


});

setInterval(function(){
  app.getData();
}, 4000);

var countDowntimer = setInterval(function(){
  app.countDown();
}, 1000);


}
