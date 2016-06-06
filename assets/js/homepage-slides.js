(function ($) {
  'use strict';

  var panelLink = $('.slides-nav a'),
    slidesContainer = $(this).closest('div.slides-container');

  $("[data-slide='slide-1']").click(function (e) {
    e.preventDefault();
    $(this).closest('section[id]').addClass('slide1');
  });

  $("[data-slide='slide-2']").click(function (e) {
    e.preventDefault();
    $(this).closest('section[id]').addClass('slide2');
  });
  $("[data-slide='slide-3']").click(function (e) {
    e.preventDefault();
    $(this).closest('section[id]').addClass('slide3');
  });
  $("[data-slide='slide-4']").click(function (e) {
    e.preventDefault();
    $(this).closest('section[id]').addClass('slide4');
  });
  $("[data-slide='slide-close']").click(function (e) {
    e.preventDefault();
    $(this).closest('section[id]').removeClass('slide1');
    $(this).closest('section[id]').removeClass('slide2');
    $(this).closest('section[id]').removeClass('slide3');
    $(this).closest('section[id]').removeClass('slide4');
  });
  /*
  $(panelLink).click(function () {
    var dataPanel = $(event.target).attr('data-panel');
    $(this).closest(slidesContainer).addClass(dataPanel);
    
    
    
    console.log(dataPanel);
  });
  $('a[data-panel*="duggar"]').click(function () {
    var dataPanel = $(event.target).attr('data-panel');
    console.log("other");
  });

  jQuery(panelLink).click(function () { 
    jQuery(this).closest('div.slides-container').addClass(jQuery(this).attr('data-panel'))
  });
  
  jQuery(panelLink).click(function () {
    var clickedLink = this;
    jQuery(clickedLink).closest('div.slides-container').addClass(jQuery(clickedLink).index('.slides-nav ul li a'));
  });
    */

}(jQuery));