    $(window).scroll(function () {
      var h = $('header').height();
      if ($(window).scrollTop() > h) {
        $('nav').addClass('fixed');
      } else {
        $('nav').removeClass('fixed');
      }
    });
  