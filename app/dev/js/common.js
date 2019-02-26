(function () {

    'use strict';

})();

// smooth scroll
var smoothscroll = function smoothscroll(position, speed) {
    jQuery('body,html').animate({
        scrollTop: position
    }, speed, 'easeOutExpo');
};
jQuery('a[href^="#"]').on('click', function() {
    var s = 1000; // ミリ秒
    var href = jQuery(this).attr('href');
    var target = jQuery(href == "#" || href == "" ? 'html' : href);
    var p = target.offset().top;
    smoothscroll(p, s);
    return false;
});

jQuery(function(){
   jQuery('.menuIcon').click(function(){
     jQuery(this).toggleClass('active');
     jQuery('.grobalNav').toggleClass('active');
     jQuery('.container').toggleClass('activeBlur');
     jQuery('.header-logo').toggleClass('activeBlur');
     jQuery('footer').toggleClass('activeBlur');
   })
});

jQuery(function(){
   jQuery('.btn1').click(function(){
       if (jQuery('.btn1').hasClass("serviceOn")) {
      //activeだったら
    } else if (!jQuery('.btn1').hasClass("serviceOn")) {
      //activeじゃなかったら
      jQuery('.btn1').addClass("serviceOn");
      jQuery('.btn2').removeClass("serviceOn");
      jQuery('.btn3').removeClass("serviceOn");
      jQuery('.content1').addClass("isServiceActive");
      jQuery('.content2').removeClass("isServiceActive");
      jQuery('.content3').removeClass("isServiceActive");
    }
   })
});

jQuery(function(){
   jQuery('.btn2').click(function(){
       if (jQuery('.btn2').hasClass("serviceOn")) {
      //activeだったら
  } else if (!jQuery('.btn2').hasClass("serviceOn")) {
      //activeじゃなかったら
      jQuery('.btn2').addClass("serviceOn");
      jQuery('.btn1').removeClass("serviceOn");
      jQuery('.btn3').removeClass("serviceOn");
      jQuery('.content2').addClass("isServiceActive");
      jQuery('.content1').removeClass("isServiceActive");
      jQuery('.content3').removeClass("isServiceActive");
    }
   })
});

jQuery(function(){
   jQuery('.btn3').click(function(){
       if (jQuery('.btn3').hasClass("serviceOn")) {
      //activeだったら
  } else if (!jQuery('.btn3').hasClass("serviceOn")) {
      //activeじゃなかったら
      jQuery('.btn3').addClass("serviceOn");
      jQuery('.btn1').removeClass("serviceOn");
      jQuery('.btn2').removeClass("serviceOn");
      jQuery('.content3').addClass("isServiceActive");
      jQuery('.content1').removeClass("isServiceActive");
      jQuery('.content2').removeClass("isServiceActive");
    }
   })
});

jQuery(function(){
  jQuery(".type").t({
  // ここにオプションを指定する
    speed : 30,
    speed_vary : false,
    caret : false
  });
});
