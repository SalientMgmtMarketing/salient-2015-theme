(function ($) {
  'use strict';
  
  // Init ScrollMagic
  var controller = new ScrollMagic.Controller();

  // get all slides
  var slides = ["#slide1", "#slide3", "#slide5"];

  // get all headers in slides that trigger animation
  var headers = ["#slide1 .wrap", "#slide3 .wrap", "#slide5 .wrap"];

  // get all break up sections
  var breakSections = ["#slide2", "#slide4", "#slide6"];

  // Enable ScrollMagic only for desktop, disable on touch and mobile devices
  //if (!Modernizr.touch) {

  // SCENE 1
  // create scenes for each of the headers
  headers.forEach(function (header, index) {

    // number for highlighting scenes
    var num = index+1;

    // make scene
    var headerScene = new ScrollMagic.Scene({
    triggerElement: header, // trigger CSS animation when header is in the middle of the viewport 
		        offset: -195 // offset triggers the animation 95 earlier then middle of the viewport, adjust to your liking
		    })
		    .setClassToggle('#slide'+num, 'is-active') // set class to active slide
		    //.addIndicators() // add indicators (requires plugin), use for debugging
		    .addTo(controller);
		});

	    // SCENE 2
	    // change color of the nav for dark content blocks
	    breakSections.forEach(function (breakSection, index) {
		    
		    // number for highlighting scenes
			var breakID = $(breakSection).attr('id');

		    // make scene
		    var breakScene = new ScrollMagic.Scene({
		        triggerElement: breakSection, // trigger CSS animation when header is in the middle of the viewport 
		        triggerHook: 0.75
		    })
		    .setClassToggle('#'+breakID, 'is-active') // set class to active slide
		    .addTo(controller);
		});

	    // SCENE 3
	    // change color of the nav back to dark
		slides.forEach(function (slide, index) {

			var slideScene = new ScrollMagic.Scene({
		        triggerElement: slide // trigger CSS animation when header is in the middle of the viewport
		    })
		    .on("enter", function (event) {
			    //$('nav').removeAttr('class');
			})
		    .addTo(controller);
	    });

	    // SCENE 4 - parallax effect on each of the slides with bcg
	    // move bcg container when slide gets into the view
		slides.forEach(function (slide, index) {

			var $bcg = $(slide).find('.bkg');

			var slideParallaxScene = new ScrollMagic.Scene({
		        triggerElement: slide, 
		        triggerHook: 1,
		        duration: "100%"
		    })
		    .setTween(TweenMax.from($bcg, 1, {y: '-40%', autoAlpha: 0.3, ease:Power0.easeNone}))
		    .addTo(controller);
	    });

	    // SCENE 5 - parallax effect on the intro slide
	    // move bcg container when intro gets out of the the view

	    var introTl = new TimelineMax();

	    introTl
	    	.to($('#intro .wrap'), 0.2, {autoAlpha: 0, ease:Power1.easeNone})
	    	.to($('#intro .bkg'), 1.4, {y: '20%', ease:Power1.easeOut}, '-=0.2')
	    	.to($('#intro'), 0.7, {autoAlpha: 1, ease:Power1.easeNone}, '-=1.4');

		var introScene = new ScrollMagic.Scene({
	        triggerElement: '#intro', 
	        triggerHook: 0,
	        duration: "100%"
	    })
	    .setTween(introTl)
	    .addTo(controller);

	//}

  	// Init ScrollMagic 
    var logoController = new ScrollMagic.Controller();
    var logoloop;
    var logoScene = new ScrollMagic.Scene({
        triggerElement: ('#clients-slider') 
    })
    .on("enter", function (event) {
      if (logoloop != 'started') {
        var logos = $(".logo-carousel div");
        var logoIndex = -1;

        function showNextLogo() {
          ++logoIndex;
          logos.eq(logoIndex % logos.length)
            .fadeIn(1000)
            .delay(2000)
            .fadeOut(1000, showNextLogo);
        }
        showNextLogo();
      }
      logoloop = 'started';
    })
    .addTo(logoController);
  
}(jQuery));