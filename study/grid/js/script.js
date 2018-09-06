$(function () {
  $('.btn').on('click touchstart', function () {
    $('nav').toggleClass('drawer');
    $('.top').toggleClass('open');
    $('.middle').toggleClass('open');
    $('.bottom').toggleClass('open');
    return false;
  });
});