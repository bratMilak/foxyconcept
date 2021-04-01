(function($){
    // please show me some nice preloader, thanks in advance
    $('#status').fadeOut(); // will first fade out the loading animation. And then
    $('#preloader').delay(550).fadeOut('slow'); // will fade out the white DIV that covers the website. OMG OMG so Foxy, much WOW
    $('body').delay(550).css({
        'overflow': 'visible'
    });

    // please open menu navigation, please please please
    $('#menu-btn').click(function(){
        console.log('ss');
        $(this).toggleClass('open');
        $(this).next().slideToggle();
    });

    // Porfolio stuff and other nice things to have on site
    if($('#portfolio').length){
        var $grid = $('#portfolio').isotope({
              // set itemSelector so .grid-sizer is not used in layout
              itemSelector: '.portfolio-item',
              percentPosition: true,
              
            })
            // layout Isotope after each image loads
            $grid.imagesLoaded().progress( function() {
            $grid.isotope('layout');
        });
        var $container = $('#portfolio');
    }
    
    // Please add me some line when intro block is scrolle, and make it black in css. So classy, much foxy
    if($('.page-header').length){
        var topEl =  $('.page-header');
        var elHeight = topEl.height();
        $(window).scroll(function() {
            if ($(this).scrollTop() > (elHeight + 75)){  
                $('#masthead').addClass('lined');
            }
            else {
                $('#masthead').removeClass('lined');
            } 
        });
    }
    // filter all crazy items when filter link is clicked click click click click
    $('#filters a').click(function(){
        var selector = $(this).attr('data-filter');
        $container.isotope({ filter: selector, animationEngine : "css" });
        $('#filters a.active').removeClass('active');
        $(this).addClass('active');
        return false;
 
    });

    // slike
    $('.image-container').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: $('.slider-prev'),
        nextArrow: $('.slider-next')
    });



})( jQuery );