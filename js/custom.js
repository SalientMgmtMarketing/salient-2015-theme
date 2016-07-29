(function($) {

  $(function() {
    // Uses jQuery to smooth scroll any anchored link
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
    
    // Adds Flickity Slider to any .main-gallery
    $('.main-gallery').flickity({
      // options
      imagesLoaded: true,
      pageDots: false
    });
  });
  
})(jQuery);