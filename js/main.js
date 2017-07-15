$(document).ready(function(){
  // run WOW framework
  new WOW().init();

  // style intervals
  $('.carousel').carousel({
    interval:3000
  });

  $('#Carousel').carousel({
      interval: 5000
  });

  // scroll detect
  window.addEventListener("scroll", function() {

    if (window.scrollY > 10) {
      $('.navbar').css({ 'opacity': 0.9 });
    }

    else {
      $('.navbar').css({ 'opacity': 1 });
    }

  },false);

});
