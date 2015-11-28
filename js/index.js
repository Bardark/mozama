$(function() {
    $('a.page-scroll').bind('click', function(event) {  /*utiliza la clase page-scroll desde ek menu, jquery y jquery.easing.min.js*/
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
