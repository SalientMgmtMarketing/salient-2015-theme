(function ($) {
  'use strict';
  
  $("[data-slide='slide-1']").click(function () {
    $(this).closest('section[id]').addClass('slide1');
  });
  
  $("[data-slide='slide-2']").click(function () {
    $(this).closest('section[id]').addClass('slide2');
  });
  $("[data-slide='slide-3']").click(function () {
    $(this).closest('section[id]').addClass('slide3');
  });
    $("[data-slide='slide-4']").click(function () {
    $(this).closest('section[id]').addClass('slide4');
  });
  $("[data-slide='slide-close']").click(function () {
    $(this).closest('section[id]').removeClass('slide1');
    $(this).closest('section[id]').removeClass('slide2');
    $(this).closest('section[id]').removeClass('slide3');
    $(this).closest('section[id]').removeClass('slide4');    
  });
  

}(jQuery));