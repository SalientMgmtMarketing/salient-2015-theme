(function ($) {
  'use strict';

  var panelLink = $('.slides-nav a'),
    dataSlide = 0;

  // Load Slider 1
  $("[data-slide='slide-1']").click(function (e) {
    e.preventDefault();
    $(this).closest('section[id]').addClass('slide1');
    $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '0');
    $(this).closest('section[id]').children('div.slides-container').eq(0).attr('tabindex','-1');
    console.log($(this).closest('section[id]').children('div.slides-container'));
    dataSlide = 1;
  });

  // Load Slide 2
  $("[data-slide='slide-2']").click(function (e) {
    e.preventDefault();
    $(this).closest('section[id]').addClass('slide2');
    $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '0');
    $(this).closest('section[id]').children('div.slides-container').eq(1).attr('tabindex','-1');
    dataSlide = 2;
  });
  
  // Load Slide 3
  $("[data-slide='slide-3']").click(function (e) {
    e.preventDefault();
    $(this).closest('section[id]').addClass('slide3');
    $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '0');
    $(this).closest('section[id]').children('div.slides-container').eq(2).attr('tabindex','-1');
    dataSlide = 3;
  });
  
  // Load Slide 4
  $("[data-slide='slide-4']").click(function (e) {
    e.preventDefault();
    $(this).closest('section[id]').addClass('slide4');
    $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '0');
    $(this).closest('section[id]').children('div.slides-container').eq(3).attr('tabindex','-1');
    dataSlide = 4;
  });
  
  // Close Slides Button
  $("[data-slide='slide-close']").click(function (e) {
    e.preventDefault();
    $(this).closest('section[id]').removeClass('slide1');
    $(this).closest('section[id]').removeClass('slide2');
    $(this).closest('section[id]').removeClass('slide3');
    $(this).closest('section[id]').removeClass('slide4');
    $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '0');
    $(this).closest('section[id]').attr('tabindex','-1');
    dataSlide = 0;
  });
  
  // Next Slide Button
  $('[data-action="next-slide"]').click(function (e) {
    e.preventDefault();
    dataSlide = (dataSlide + 1);
    $(this).closest('section[id]').addClass('slide' + dataSlide);
    $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '0');    
    $(this).closest('section[id]').children('div.slides-container').eq(dataSlide - 1).attr('tabindex', '-1');
  });
  
  // Previous Slide Button
  $('[data-action="prev-slide"]').click(function (e) {
    e.preventDefault();
    $(this).closest('section[id]').removeClass('slide' + dataSlide);
    dataSlide = dataSlide - 1;
    $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '0');    
    $(this).closest('section[id]').children('div.slides-container').eq(dataSlide - 1).attr('tabindex', '-1');
  });

}(jQuery));