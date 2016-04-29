(function($) {

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
    
})(jQuery);