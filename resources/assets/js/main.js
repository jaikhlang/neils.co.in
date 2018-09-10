require('./bootstrap');
window.Vue = require('vue');

//Vue.component('example', require('./components/Example.vue'));

/*
var app = new Vue({
  el: '#app',
  data: {
    auto_password: true,
    password_options: 'keep'
  }
});
*/

$(document).ready(function() {
  $('.carousel.carousel-slider').carousel({
     fullWidth: true,
     indicators: true,
     duration:200
   }, setTimeout(autoplay, 4500));

   function autoplay() {
     $('.carousel').carousel('next');
     setTimeout(autoplay, 4500);
   }
});
