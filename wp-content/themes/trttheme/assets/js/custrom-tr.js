var $ = jQuery;

var $status = $('.pagingInfo');
var $slickElement = $('.slider_products');

var chieurong = $(window).width();
if (chieurong < 991) {
  $slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
    if(!slick.$dots){
      return;
    }
      
    var i = (currentSlide ? currentSlide : 0) + 1;
    $status.text('0' + i + '/' + '0' +(slick.$dots[0].children.length));
  });
}

var chieurong1 = $(window).width();
if (chieurong1 > 991) {
  $slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
    if(!slick.$dots){
      return;
    }
      
    var i = (currentSlide ? currentSlide : 2) + 1;
    $status.text('0' + i + '/' + '0' +(slick.$dots[0].children.length));
  });
}


$slickElement.slick({
  infinite: false,
  slidesToShow: 3,
  autoplay: false,
  slidesToScroll: 3,
  dots: true,
  prevArrow: "<button class='prev slick-prev'><img class='left-arrow ' src='./assets/img/next3.png' alt=''></button>",
  nextArrow: "<button class='next slick-next'><img class='right-arrow ' src='./assets/img/next4.png' alt=''></button>",
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 570,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

/**/

$(document).ready(function() {
  var $slider = $('.slider_products');
  var $progressBar = $('.progress');
  var $progressBarLabel = $( '.slider__label' );
  
  $slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {   
    var calc = ( ( (nextSlide) / (slick.slideCount-1) ) * 100 ) ;
    console.log(currentSlide);
    $progressBar
    .css('background-size', (calc + 30) + '% 100%')
    .attr('aria-valuenow', calc );
    
    $progressBarLabel.text( calc + '% completed' );
  });
});

$(document).ready(function() {
	new WOW().init();

  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.icon_backtotop').fadeIn();
    } else {
      $('.icon_backtotop').fadeOut();
    }
  });

  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
      $('.section_header').addClass('bg_color');
    } else {
      $('.section_header').removeClass('bg_color');
    }
  });
  $('.icon_backtotop').click(function() {
    $('html, body').animate({ scrollTop: 0 }, 800);
    return false;
  });
  
  $('.video .play_img').click(function(){
    $('.element_video').toggleClass('active');
  })
  $('.element_video .close_video span').click(function(){
    $('.element_video').toggleClass('active');
  })

  $('.section_slider_banner').slick({
    dots: false,
    slidesToShow: 1,
    autoplay: true,
    prevArrow: "<button class='prev slick-prev'><img class='left-arrow ' src='./assets/img/next12.png' alt=''></button>",
    nextArrow: "<button class='next slick-next'><img class='right-arrow ' src='./assets/img/next13.png' alt=''></button>",
  });

  $('.element_slider_img').slick({
    dots: false,
    slidesToShow: 1,
    autoplay: true,
    prevArrow: "<button class='prev slick-prev'><img class='left-arrow ' src='./assets/img/next1.png' alt=''></button>",
    nextArrow: "<button class='next slick-next'><img class='right-arrow ' src='./assets/img/next2.png' alt=''></button>",
  });

  $('.slider_news').slick({
    dots: false,
    slidesToShow: 3,
    autoplay: true,
    prevArrow: "<button class='prev slick-prev'><img class='left-arrow ' src='./assets/img/next3.png' alt=''></button>",
    nextArrow: "<button class='next slick-next'><img class='right-arrow ' src='./assets/img/next4.png' alt=''></button>",
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.slider_for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    asNavFor: '.slider_nav',
    prevArrow: "<button class='prev slick-prev'><img class='left-arrow ' src='./assets/img/next3.png' alt=''></button>",
    nextArrow: "<button class='next slick-next'><img class='right-arrow ' src='./assets/img/next4.png' alt=''></button>",
  });
  $('.slider_nav').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.slider_for',
    dots: false,
    centerMode: true,
    focusOnSelect: true
  });

  $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    $('.slider_nav').slick('setPosition');
  });
  $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    $('.slider_for').slick('setPosition');
  });
  $('.slider_partner').slick({
    dots: false,
    slidesToShow: 5,
    autoplay: true,
    prevArrow: "<button class='prev slick-prev'><img class='left-arrow ' src='./assets/img/next5.png' alt=''></button>",
    nextArrow: "<button class='next slick-next'><img class='right-arrow ' src='./assets/img/next6.png' alt=''></button>",
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3
        }
      }
    ]
  });

  $('.play_btn').click(function() {
    $('.slider_video_thuvien .slider_for .box_video > img').css('display','none');
    $('.play_btn').css('display','none');
  })

  $('.icon_sumenu').click(function() {
    $(this).toggleClass('active');
    $('.main_menu').toggleClass('active');
    $('.element_main_menu').toggleClass('active');
  })

  $('.main_menu li.show_submenu').click(function(event) {
    if ($('.main_menu').hasClass('menu_tab')) {
      $('.main_menu li.show_submenu').not($(this)).removeClass('active');/**/
    }
    $(this).toggleClass('active');
  });

  $('.close_mobi').click(function(){
    $('.main_menu').toggleClass('active');
    $('.icon_sumenu').toggleClass('active');
    $('.element_main_menu').removeClass('active');
  })

  $('.slider_giaithuong').slick({
    dots: false,
    slidesToShow: 4,
    autoplay: false,
    prevArrow: "<button class='prev slick-prev'><img class='left-arrow ' src='./assets/img/next5.png' alt=''></button>",
    nextArrow: "<button class='next slick-next'><img class='right-arrow ' src='./assets/img/next6.png' alt=''></button>",
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 570,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.slider_for_pro').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider_nav_pro',
    prevArrow: "<button class='prev slick-prev'><img class='left-arrow ' src='./assets/img/next3.png' alt=''></button>",
    nextArrow: "<button class='next slick-next'><img class='right-arrow ' src='./assets/img/next4.png' alt=''></button>",
  });
  $('.slider_nav_pro').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.slider_for_pro',
    dots: false,
    centerMode: true,
    focusOnSelect: true,
    arrows: true,
    prevArrow: "<button class='prev slick-prev'><img class='left-arrow ' src='./assets/img/next8.png' alt=''></button>",
    nextArrow: "<button class='next slick-next'><img class='right-arrow ' src='./assets/img/next9.png' alt=''></button>",
  });

  $('.slider_list_news').slick({
    dots: false,
    slidesToShow: 1,
    autoplay: true,
  });
  $('.slider_video_page').slick({
    dots: false,
    slidesToShow: 1,
    autoplay: false,
    prevArrow: "<button class='prev slick-prev'><img class='left-arrow ' src='./assets/img/next3.png' alt=''></button>",
    nextArrow: "<button class='next slick-next'><img class='right-arrow ' src='./assets/img/next4.png' alt=''></button>",
  });
  $('.list_news_slier').slick({
    dots: false,
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: false,
    arrows: false,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 570,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  }); 

  $('.element_vieclam_box .item').click(function(event) {
    if ($('.element_vieclam_box').hasClass('element_vieclam_box_click')) {
      $('.element_vieclam_box .item').not($(this)).removeClass('active');/**/
    }
    $(this).toggleClass('active');
  });
  $('.section_footer .row .footer_item').click(function(event) {
    if ($('.section_footer .row').hasClass('footer_mobi')) {
      $('.section_footer .row .footer_item').not($(this)).removeClass('active');/**/
    }
    $(this).toggleClass('active');
  });

    
});

$.Tween.propHooks.number = {
  get: function(tween) {
    var num = tween.elem.innerHTML.replace(/^[^\d-]+/, "");
    return parseFloat(num) || 0;
  },

  set: function(tween) {
    var opts = tween.options;
    tween.elem.innerHTML =
      (opts.prefix || "") +
      tween.now.toFixed(opts.fixed || 0) +
      (opts.postfix || "");
  }
};

$("#num-1").animate(
  { number: 20 },
  {
    duration: 2000,
    postfix: ""
  }
);

$("#num-2")
.delay(0)
.animate(
  { number: 100 },
  {
    duration: 1500,
    postfix: "+"
  }
);

$("#num-3")
.delay(0)
  .animate(
  { number: 100 },
  {
      duration: 2000,
      postfix: "+"
  }
);
