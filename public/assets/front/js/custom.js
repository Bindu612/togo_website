//    scroll top
var btn = $('#topbtn');

$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function (e) {
  e.preventDefault();
  $('html, body').animate({ scrollTop: 0 }, '300');
});

//stellarnav
jQuery(document).ready(function ($) {
  jQuery('.stellarnav').stellarNav({
    theme: 'dark',
    breakpoint: 960,
    position: 'right',
  });
});

// aos init
AOS.init({
  once: true,
});

// scroll color change
$(window).scroll(function () {
  if ($(this).scrollTop() > 50) {
    /*height in pixels when the navbar becomes non scroll*/ $(
      '.scroll-navbar'
    ).addClass('scroll');
  } else {
    $('.scroll-navbar').removeClass('scroll');
  }
});
