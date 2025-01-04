$(window).scroll(function() {
  if ($(this).scrollTop() > 0) {
    $('.hide--scroll').fadeOut();
    $('#navbar--section').addClass('on--top');
  } else {
    $('.hide--scroll').fadeIn();
      $('#navbar--section').removeClass('on--top');
  }
});



// -------------------------------
// -------------------------------



$(window).scroll(function() {
  if ($(this).scrollTop() > 250) {
    $('.remove--scroll').fadeOut();
  } else {
    $('.remove--scroll').fadeIn();
  }
});
