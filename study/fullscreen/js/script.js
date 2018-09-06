$(function () {
  $('h1').fadeIn(500);
});

//全ての読み込みが完了したら実行
$(window).on('load', function () {
  $('#loader-bg').delay(3300).slideUp(500);
});