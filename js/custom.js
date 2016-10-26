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
  
  function checkCookie() {
    if ( Cookies.get('client-resources') ) {
      document.getElementById('hiddenContent').style.display = "block";
      document.getElementById('password-gate').style.display = "none";  
    }
  }
  checkCookie();
  
  var $form = document.protectedform, 
        $passwordField = $form.password, 
        $password = $passwordField.value;
    $passwordField.onfocus = function () {
      document.getElementById('formerror').innerHTML = "";
    };

    function checkPassword() {
      if ($passwordField.value != "Per4mance101") {
        document.getElementById('formerror').innerHTML = "The password you entered — " + document.protectedform.password.value + " — is incorrect.";
      }
      else {
        document.getElementById('hiddenContent').style.display = "block";
        document.getElementById('password-gate').style.display = "none";
        Cookies.set('client-resources', 'approved');
      }
    }
    $form.querySelectorAll('button').onclick = function (e) {
      e.preventDefault;
      checkPassword();
    }
    $passwordField.onkeydown = function (e) {
      if (e.keyCode == 13) {
        e.preventDefault;
        checkPassword();
      }
    }
    $form.onsubmit = function (e) {
      e.preventDefault;
      checkPassword();
      return false;
    }
  
})(jQuery);