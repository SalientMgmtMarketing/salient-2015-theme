jQuery(document).ready(function () {
    jQuery("a.fancybox").fancybox({
        maxWidth: '80%',
        maxHeight: '80%',
        padding: 0,
        openEffect: 'elastic',
        closeEffect: 'elastic',
    });
    jQuery("a.lightbox").fancybox({
        maxWidth: '80%',
        maxHeight: '80%',
        padding: 0,
        openEffect: 'elastic',
        closeEffect: 'elastic',
    });
    jQuery('.main-gallery').flickity({
        // options
        imagesLoaded: true,
        pageDots: false
    });
});