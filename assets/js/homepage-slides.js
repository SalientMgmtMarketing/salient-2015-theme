(function ($) {
  'use strict';

  var dataSlide = 0;

  // Load Slider 1
  $("[data-slide='slide-1']").click(function (e) {
    e.preventDefault();
    $(this).closest('section[id]').addClass('slide1');
    $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '-1');
    $(this).closest('section[id]').children('div.slides-container').eq(0).attr('tabindex','0');
    dataSlide = 1;
    $('html,body').animate({scrollTop: $(this).closest('section[id]').children('div.slides-container').eq(dataSlide - 1).offset().top}, 800);
  });
  
  $("[data-slide='slide-1']").keydown(function (e) {

    if (e.keyCode == 32 || e.keyCode == 13) {
      e.preventDefault();
      $(this).closest('section[id]').addClass('slide1');
      $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '-1');
      $(this).closest('section[id]').children('div.slides-container').eq(0).attr('tabindex','0');
      dataSlide = 1;
    }
  });

  // Load Slide 2
  $("[data-slide='slide-2']").click(function (e) {
    e.preventDefault();
    $(this).closest('section[id]').addClass('slide2');
    $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '-1');
    $(this).closest('section[id]').children('div.slides-container').eq(1).attr('tabindex','0');
    dataSlide = 2;
    $('html,body').animate({scrollTop: $(this).closest('section[id]').children('div.slides-container').eq(dataSlide - 1).offset().top}, 800);
  });
  
  $("[data-slide='slide-2']").keydown(function (e) {
    if (e.keyCode == 32 || e.keyCode == 13) {
      e.preventDefault();
      $(this).closest('section[id]').addClass('slide2');
      $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '-1');
      $(this).closest('section[id]').children('div.slides-container').eq(1).attr('tabindex','0');
      dataSlide = 2;
      $('html,body').animate({scrollTop: $(this).closest('section[id]').children('div.slides-container').eq(dataSlide - 1).offset().top}, 800);
    }
  });
  
  // Load Slide 3
  $("[data-slide='slide-3']").click(function (e) {
    e.preventDefault();
    $(this).closest('section[id]').addClass('slide3');
    $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '-1');
    $(this).closest('section[id]').children('div.slides-container').eq(2).attr('tabindex','0');
    dataSlide = 3;
    $('html,body').animate({scrollTop: $(this).closest('section[id]').children('div.slides-container').eq(dataSlide - 1).offset().top}, 800);
  });
  
  $("[data-slide='slide-3']").keydown(function (e) {
    if (e.keyCode == 32 || e.keyCode == 13) {
      e.preventDefault();
      $(this).closest('section[id]').addClass('slide3');
      $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '-1');
      $(this).closest('section[id]').children('div.slides-container').eq(2).attr('tabindex','0');
      dataSlide = 3;
      $('html,body').animate({scrollTop: $(this).closest('section[id]').children('div.slides-container').eq(dataSlide - 1).offset().top}, 800);
    }
  });
  
  // Load Slide 4
  $("[data-slide='slide-4']").click(function (e) {
    e.preventDefault();
    $(this).closest('section[id]').addClass('slide4');
    $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '-1');
    $(this).closest('section[id]').children('div.slides-container').eq(3).attr('tabindex','0');
    dataSlide = 4;
    $('html,body').animate({scrollTop: $(this).closest('section[id]').children('div.slides-container').eq(dataSlide - 1).offset().top}, 800);
  });
  
  $("[data-slide='slide-4']").keydown(function (e) {
    if (e.keyCode == 32 || e.keyCode == 13) {
      e.preventDefault();
      $(this).closest('section[id]').addClass('slide4');
      $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '-1');
      $(this).closest('section[id]').children('div.slides-container').eq(3).attr('tabindex','0');
      dataSlide = 4;
      $('html,body').animate({scrollTop: $(this).closest('section[id]').children('div.slides-container').eq(dataSlide - 1).offset().top}, 800);
    }
  });
  
  // Close Slides Button
  $("[data-slide='slide-close']").click(function (e) {
    e.preventDefault();
    $(this).closest('section[id]').removeClass('slide1');
    $(this).closest('section[id]').removeClass('slide2');
    $(this).closest('section[id]').removeClass('slide3');
    $(this).closest('section[id]').removeClass('slide4');
    $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '-1');
    $(this).closest('section[id]').attr('tabindex','-1');
    dataSlide = 0;
    $('html,body').animate({scrollTop: $(this).closest('section[id]').eq(dataSlide - 1).offset().top}, 800);
  });
  
  $("[data-slide='slide-close']").keydown(function (e) {
    if (e.keyCode == 32 || e.keyCode == 13) {
      e.preventDefault();
      $(this).closest('section[id]').removeClass('slide1');
      $(this).closest('section[id]').removeClass('slide2');
      $(this).closest('section[id]').removeClass('slide3');
      $(this).closest('section[id]').removeClass('slide4');
      $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '-1');
      $(this).closest('section[id]').attr('tabindex','-1');
      dataSlide = 0;
      $('html,body').animate({scrollTop: $(this).closest('section[id]').eq(dataSlide - 1).offset().top}, 800);
    }
  });
  
  $(document).keydown(function (e) {
    if (e.keyCode == 27) {
      $('section[id]').removeClass('slide1');
      $('section[id]').removeClass('slide2');
      $('section[id]').removeClass('slide3');
      $('section[id]').removeClass('slide4');
      $('section[id]').children('div.slides-container').attr('tabindex', '-1');
      $('section[id]').attr('tabindex','-1');
      dataSlide = 0;
      $('html,body').animate({scrollTop: $(this).closest('section[id]').offset().top}, 800);
    }
  });
  
  // Next Slide Button
  $('[data-action="next-slide"]').click(function (e) {
    e.preventDefault();
    dataSlide = (dataSlide + 1);
    $(this).closest('section[id]').addClass('slide' + dataSlide);
    $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '-1');    
    $(this).closest('section[id]').children('div.slides-container').eq(dataSlide - 1).attr('tabindex', '0');
    $('html,body').animate({scrollTop: $(this).closest('section[id]').children('div.slides-container').eq(dataSlide - 1).offset().top}, 800);
  });
  
  $("[data-action='next-slide']").keydown(function (e) {
    if (e.keyCode == 32 || e.keyCode == 13) {
      e.preventDefault();
      dataSlide = (dataSlide + 1);
      $(this).closest('section[id]').addClass('slide' + dataSlide);
      $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '-1');
      $(this).closest('section[id]').children('div.slides-container').eq(dataSlide - 1).attr('tabindex', '-1');
      $('html,body').animate({scrollTop: $(this).closest('section[id]').children('div.slides-container').eq(dataSlide - 1).offset().top}, 800);
    }
  });
  
  // Previous Slide Button
  $('[data-action="prev-slide"]').click(function (e) {
    e.preventDefault();
    $(this).closest('section[id]').removeClass('slide' + dataSlide);
    dataSlide = dataSlide - 1;
    $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '-1');    
    $(this).closest('section[id]').children('div.slides-container').eq(dataSlide - 1).attr('tabindex', '0');
    $('html,body').animate({scrollTop: $(this).closest('section[id]').children('div.slides-container').eq(dataSlide - 1).offset().top}, 800);
  });
  
  $('[data-action="prev-slide"]').keydown(function (e) {
    if (e.keyCode == 32 || e.keyCode == 13) {
      e.preventDefault();
      $(this).closest('section[id]').removeClass('slide' + dataSlide);
      dataSlide = dataSlide - 1;
      $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '-1');    
      $(this).closest('section[id]').children('div.slides-container').eq(dataSlide - 1).attr('tabindex', '0');
      $('html,body').animate({scrollTop: $(this).closest('section[id]').children('div.slides-container').eq(dataSlide - 1).offset().top}, 800);
    }
  });

}(jQuery));