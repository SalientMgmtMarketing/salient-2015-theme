if (typeof( document.protectedform ) !== 'undefined') {
  var $form = document.protectedform;
}

if (typeof(document.protectedform) !== 'undefined') {
  var $passwordField = document.protectedform.password;
}


function checkCookie() {
  // If the Cookie of client-resources exists, show the #hiddenContent and hide the password form
  if ( Cookies.get('client-resources') ) {
    document.getElementById('hiddenContent').style.display = 'block';
    document.getElementById('password-gate').style.display = 'none';
  }
}

// Checks the password to see if the password is correct
function checkPassword() {
  if (($passwordField.value !== 'salientuxt') && ($passwordField.value !== 'Per4mance101')) {

    // Displays the message if the password is incorrect "the password you enter - (the password that was typed) - is incorrect
    document.getElementById('formerror').innerHTML = 'The password you entered — ' + document.protectedform.password.value + ' — is incorrect.';
  }
  // If the password is correct, show the content
  else {
    document.getElementById('hiddenContent').style.display = 'block';
    document.getElementById('password-gate').style.display = 'none';
    Cookies.set('client-resources', 'approved');
  }
}

(function($) {
  // Uses jQuery to smooth scroll any anchored link
  $('a[href*="#"]:not([href="#"]):not([href^="#modal"]):not([href="#page-modal-cta-box"]):not([class*="salient-tab-label"]):not([href="#upgrade"])').click(function() {
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

  jQuery(document).ready(function(){
    // Adds Flickity Slider to any .main-gallery
    jQuery('.main-gallery').flickity({
      // options
      imagesLoaded: true,
      pageDots: false
    });
    jQuery('.db-gallery .carousel').flickity({
      // options
      imagesLoaded: true,
      pageDots: false,
      groupCells: true,
      wrapAround: true
    });

    jQuery('.testimonials .slides').flickity({
      autoPlay: 10000,
      wrapAround: true
    });

    jQuery('.sidebar-cta a').fancybox(
      {
        maxWidth : 900,
      });
    jQuery('a.page-modal-link').fancybox(
      {
        maxWidth : 900,
      });
    jQuery('.salient-toc-wrapper a.button').fancybox(
      {
        maxWidth : 900,
      });
    // Checks to see if the page has a link with the class of privatelink AND has a Cookie with name of Converted and a value of true
    if ( ( document.querySelector('a.privatelink') !== null ) && ( Cookies.get('converted') == 'true') ) {

      jQuery('a.privatelink').each( function() {
        var privLink = jQuery(this).attr('data-privlink');
        var convertCta = jQuery(this).attr('data-convertedcta');
        jQuery(this).attr('href', privLink);
        jQuery(this).attr('target','_blank');
        jQuery(this).text(convertCta);
      });
    }

    if ( ( document.querySelector('a.privatelink') !== null ) && ((window.location.search.indexOf('utm_medium=email') > -1) ) || (window.location.search.indexOf('utm_medium=form') > -1)) {
      jQuery('a.privatelink').each( function() {
        var privLink = jQuery(this).attr('data-privlink');
        var convertCta = jQuery(this).attr('data-convertedcta');
        jQuery(this).attr('href', privLink);
        jQuery(this).attr('target','_blank');
        jQuery(this).text(convertCta);
      });
    }
  });
  // On Form Submission from ActiveCampaign, a Cookie with the name of Converted is set to a value of true
  jQuery('._form').submit( function () {
    Cookies.set('converted','true');
  });


  // If the page has a form with the name of protected form, run checkCookie
  if ( document.protectedform !== undefined ) {

    checkCookie();



    // When focusing on the form field of protectedform, reset the content inside the form error
    $passwordField.onfocus = function () {
      document.getElementById('formerror').innerHTML = '';
    };


    // If the submit button is clicked, check the password
    $form.querySelectorAll('button').onclick = function (e) {
      e.preventDefault();
      checkPassword();
    };
    // If the enter key is pressed, check the password
    $passwordField.onkeydown = function (e) {
      if (e.keyCode == 13) {
        e.preventDefault();
        checkPassword();
      }
    };
    // Check the password on form submission
    $form.onsubmit = function (e) {
      e.preventDefault();
      checkPassword();
      return false;
    };
  }

})(jQuery);
