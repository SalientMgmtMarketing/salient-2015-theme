(function ($) {
  'use strict';

  var dataSlide = 0;
  var sectionHeight = $('section[id]').innerHeight;
  var subSlideHeight = $(this).closest('section[id]').children('div.slides-container').innerHeight();
  var activeSlideHeight = $('section.is-active').eq(0).children('div').eq(0).height();
  var activeSlide = $(this).closest('section[id]');
  var activeSlideIndex = $('section.is-active').index();
  var $slidenum;
  var $originalHeight = "300";
  var closestSection;

  function slideHeight($slidenum) {
    var slideHeightVar = $('#slide' + $slidenum).height();
    $('#slide' + $slidenum).height(slideHeightVar);
  }


  $(document).ready( function () {
    $('section[id]').height(sectionHeight);
  });

  function getOriginalHeight() {
    var $originalHeight = $(this).closest('section[id]').height;
  }
  function getClosestSection() {
    closestSection = $(this).closest('section[id]');
  }
  function returnToOriginalHeight() {
    closestSection = $(this).closest('section[id]');
    if($(window).width() < 930) {
      $(closestSection).height($originalHeight);
    } else {
      $(closestSection).height('');
    }
    console.log(closestSection);
  }

  // Load Slider 1
  $("[data-slide='slide-1']").click(function (e) {
    e.preventDefault();
    $(this).closest('section[id]').addClass('slide1');
    getOriginalHeight;
    var subSlideHeight = $(this).closest('section[id]').find('div.sub-slide').innerHeight();
    $(this).closest('section[id]').height(subSlideHeight);
    $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '-1');
    $(this).closest('section[id]').children('div.slides-container').eq(0).attr('tabindex','0');

    dataSlide = 1;
    $('html,body').animate({scrollTop: $(this).closest('section[id]').children('div.slides-container').eq(dataSlide - 1).offset().top}, 800);
  });

  $("[data-slide='slide-1']").keydown(function (e) {

    if (e.keyCode == 32 || e.keyCode == 13) {
      e.preventDefault();
      getOriginalHeight;
      $(this).closest('section[id]').addClass('slide1');
      var subSlideHeight = $(this).closest('section[id]').children('div').innerHeight();
      $(this).closest('section[id]').height(subSlideHeight);
      $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '-1');
      $(this).closest('section[id]').children('div.slides-container').eq(0).attr('tabindex','0');
      $($(this).closest('section[id]')).css("height", subSlideHeight + 'px');
      dataSlide = 1;

    }
  });

  // Load Slide 2
  $("[data-slide='slide-2']").click(function (e) {
    e.preventDefault();
    getOriginalHeight;
    $(this).closest('section[id]').addClass('slide2');
    $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '-1');
    $(this).closest('section[id]').children('div.slides-container').eq(1).attr('tabindex','0');
    dataSlide = 2;
    $('html,body').animate({scrollTop: $(this).closest('section[id]').children('div.slides-container').eq(dataSlide - 1).offset().top}, 800);
  });

  $("[data-slide='slide-2']").keydown(function (e) {
    if (e.keyCode == 32 || e.keyCode == 13) {
      e.preventDefault();
      getOriginalHeight;
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
    getOriginalHeight;
    $(this).closest('section[id]').addClass('slide3');
    $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '-1');
    $(this).closest('section[id]').children('div.slides-container').eq(2).attr('tabindex','0');
    dataSlide = 3;
    $('html,body').animate({scrollTop: $(this).closest('section[id]').children('div.slides-container').eq(dataSlide - 1).offset().top}, 800);
  });

  $("[data-slide='slide-3']").keydown(function (e) {
    if (e.keyCode == 32 || e.keyCode == 13) {
      e.preventDefault();
      getOriginalHeight;
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
    getOriginalHeight;
    $(this).closest('section[id]').addClass('slide4');
    $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '-1');
    $(this).closest('section[id]').children('div.slides-container').eq(3).attr('tabindex','0');
    dataSlide = 4;
    $('html,body').animate({scrollTop: $(this).closest('section[id]').children('div.slides-container').eq(dataSlide - 1).offset().top}, 800);
  });

  $("[data-slide='slide-4']").keydown(function (e) {
    if (e.keyCode == 32 || e.keyCode == 13) {
      e.preventDefault();
      getOriginalHeight;
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
    closestSection = $(this).closest('section[id]');
    if($(window).width() < 930) {
      $(closestSection).height($originalHeight);
    } else {
      $(closestSection).height('');
    }
    $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '-1');
    $(this).closest('section[id]').attr('tabindex','-1');
    dataSlide = 0;
  });

  $("[data-slide='slide-close']").keydown(function (e) {
    if (e.keyCode == 32 || e.keyCode == 13) {
      e.preventDefault();
      getClosestSection();
      $(this).closest('section[id]').removeClass('slide1');
      $(this).closest('section[id]').removeClass('slide2');
      $(this).closest('section[id]').removeClass('slide3');
      $(this).closest('section[id]').removeClass('slide4');
      closestSection = $(this).closest('section[id]');
      if($(window).width() < 930) {
        $(closestSection).height($originalHeight);
      } else {
        $(closestSection).height('');
      }
      $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '-1');
      $(this).closest('section[id]').attr('tabindex','-1');
      dataSlide = 0;
    }
  });

  $(document).keydown(function (e) {
    if (e.keyCode == 27 && ( document.querySelector('div.slides-container') !== null )) {
      $('section[id]').removeClass('slide1');
      $('section[id]').removeClass('slide2');
      $('section[id]').removeClass('slide3');
      $('section[id]').removeClass('slide4');
      if($(window).width() < 930) {
      $('section[id]').height($originalHeight);
      } else {
        $('section[id]').height('');
      }
      $('section[id]').children('div.slides-container').attr('tabindex', '-1');
      $('section[id]').attr('tabindex','-1');
      dataSlide = 0;
      $('html,body').animate({scrollTop: $('.is-active').closest('section[id]').offset.top}, 800);
    }
  });

  // Next Slide Button
  $('[data-action="next-slide"]').click(function (e) {
    e.preventDefault();
    dataSlide = (dataSlide + 1);
    getOriginalHeight;
    $(this).closest('section[id]').addClass('slide' + dataSlide);
    $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '-1');
    $(this).closest('section[id]').children('div.slides-container').eq(dataSlide - 1).attr('tabindex', '0');
    $('html,body').animate({scrollTop: $(this).closest('section[id]').children('div.slides-container').eq(dataSlide - 1).offset().top}, 800);
      console.log(subSlideHeight);
    console.log($originalHeight);
  });

  $("[data-action='next-slide']").keydown(function (e) {
    if (e.keyCode == 32 || e.keyCode == 13) {
      e.preventDefault();
      dataSlide = (dataSlide + 1);
      getOriginalHeight;
      $(this).closest('section[id]').addClass('slide' + dataSlide);
      $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '-1');
      $(this).closest('section[id]').children('div.slides-container').eq(dataSlide - 1).attr('tabindex', '-1');
      $('html,body').animate({scrollTop: $(this).closest('section[id]').children('div.slides-container').eq(dataSlide - 1).offset().top}, 800);
    }
  });

  // Previous Slide Button
  $('[data-action="prev-slide"]').click(function(e) {
    e.preventDefault();
    $(this).closest('section[id]').removeClass('slide' + dataSlide);
    closestSection = $(this).closest('section[id]');
    if($(window).width() < 930) {
      $(closestSection).height($originalHeight);
    } else {
      $(closestSection).height('');
    }
    dataSlide = dataSlide - 1;
    $(this).closest('section[id]').children('div.slides-container').attr('tabindex','-1');
    $(this).closest('section[id]').children('div.slides-container').eq(dataSlide - 1).attr('tabindex', '0');
    $('html,body').animate({scrollTop: $(this).closest('section[id]').children('div.slides-container').eq(dataSlide - 1).offset().top}, 800);
  });

  $('[data-action="prev-slide"]').keydown(function(e) {
    if (e.keyCode == 32 || e.keyCode == 13) {
      e.preventDefault();
      $(this).closest('section[id]').removeClass('slide' + dataSlide);
      closestSection = $(this).closest('section[id]');
      if($(window).width() < 930) {
        $(closestSection).height($originalHeight);
      } else {
        $(closestSection).height('');
      }
      dataSlide = dataSlide - 1;
      $(this).closest('section[id]').children('div.slides-container').attr('tabindex', '-1');
      $(this).closest('section[id]').children('div.slides-container').eq(dataSlide - 1).attr('tabindex', '0');
      $('html,body').animate({scrollTop: $(this).closest('section[id]').children('div.slides-container').eq(dataSlide - 1).offset().top}, 800);
    }
  });


}(jQuery));
