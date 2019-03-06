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

// 募集要項 アコーディオン
jQuery(function(){
   jQuery('.accordion').click(function(){
       jQuery(this).toggleClass('is-open');
   })
});
