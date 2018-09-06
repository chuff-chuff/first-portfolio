$(function () {

  //スクロール時にナビゲーションを固定する
  var topMenu = $('.topmenu');
  offset = topMenu.offset();

  $(window).scroll(function () {
    if ($(window).scrollTop() > offset.top) {
      $('.topmenu').addClass('fixed');
    } else {
      $('.topmenu').removeClass('fixed');
    }

    //スクロールでTOPボタンを表示
    if ($(this).scrollTop() > 640) {
      $('#page_top').fadeIn(0);
    } else {
      $('#page_top').fadeOut(0);
    }
  });

  //TOPボタン
  $('#page_top').on('click', function () {
    $('html, body').animate({
      scrollTop: 0
    }, false, 'swing');
    return false;
  });

  //ファーストビューのボタン押下で次のコンテンツに移動
  $('.start').on('click', function () {
    $('html, body').animate({
      scrollTop: $('.welcome').offset().top
    }, 'slow');
    return false;
  });

  //コーチの画像にホバーでSNSボタンを表示
  
//  $('.photo').hover(function () {
//    $(this).css({
//      'opacity': '.7'
//    });
//    $(this).parent().siblings('div').css({
//      'opacity': '1',
//      'transform': 'translateY(-16px)'
//    });
//  }, function () {
//    $(this).css({
//      'opacity': '1'
//    });
//    $(this).parent().siblings('div').css({
//      'opacity': '0',
//      'transform': 'translateY(0)'
//    });
//  });
//
//  $('.sns').hover(function () {
//    $(this).css({
//      'opacity': '1',
//      'transform': 'translateY(-16px)'
//    });
//    $(this).parent().find('.photo').css({
//      'opacity': '.7'
//    });
//  }, function () {
//    $(this).css({
//      'opacity': '0',
//      'transform': 'translateY(0)'
//    });
//    $(this).parent().find('.photo').css({
//      'opacity': '1'
//    });
//  });
//
//  $('.photo').hover(function () {
//    $(this).css({
//      'opacity': '.7'
//    });
//    $(this).parent().siblings('div').css({
//      'opacity': '1',
//      'transform': 'translateY(-16px)'
//    });
//  }, function () {
//    $(this).css({
//      'opacity': '1'
//    });
//    $(this).parent().siblings('div').css({
//      'opacity': '0',
//      'transform': 'translateY(0)'
//    });
//  });
//
//  $('.sns').hover(function () {
//    $(this).css({
//      'opacity': '1',
//      'transform': 'translateY(-16px)'
//    });
//    $(this).parent().find('.photo').css({
//      'opacity': '.7'
//    });
//  }, function () {
//    $(this).css({
//      'opacity': '0',
//      'transform': 'translateY(0)'
//    });
//    $(this).parent().find('.photo').css({
//      'opacity': '1'
//    });
//  });

  //  $('.photo').hover(function () {
  //    $(this).addClass('photo_hover');
  //    $(this).parent().siblings('div').addClass('sns_hover');
  //  }, function () {
  //    $(this).removeClass('photo_hover');
  //    $(this).parent().siblings('div').removeClass('sns_hover');
  //  });
  //  
  //  $('.sns').hover(function () {
  //    $(this).addClass('sns_hover');
  //    $(this).parent().find('.photo').addClass('photo_hover');
  //  }, function () {
  //    $(this).removeClass('sns_hover');
  //    $(this).parent().find('.photo').removeClass('photo_hover');
  //  });

  //ハンバーガーメニュー
  $('#ham').on('click', function () {
    $('#ham span').toggleClass('open');
    $('nav').slideToggle(200);
    return false;
  })
})

//.css('transition','.4s')
//.css('transition','0s')