/**
 * Scripts
 */
$(document).ready(function () {
    //slider home
    if($('.slider-sl').length > 0) {
        var sliderHome = tns({
            container: '.slider-sl',
            mode : 'gallery',
            speed : 1200,
            mouseDrag: true,
            nav: false,
            controlsContainer: '.slider-control-homeslide',
        });
    }

    //slider home horizontal
    if($('.horz-sl').length > 0) {
        var sliderHomeHorz = tns({
            container: '.horz-sl',
            mode : 'gallery',
            speed : 1200,
            mouseDrag: true,
            nav: false,
            controlsContainer: '.slider-control-horiz',
        });
    }

    //slider home stories
    if($('.stories__slide').length > 0) {
        var sliderStories = tns({
            container: '.stories__slide',
            items : 4,
            nav: false,
            loop: false,
            controlsContainer: '.slider-control-stories',
            gutter: 40
        });
    }

    //slider home video
    if($('.video-sl').length > 0) {
        var sliderVideo = tns({
            container: '.video-sl',
            items : 2,
            nav: false,
            loop: false,
            controlsContainer: '.slider-control-video',
            gutter: 40
        });
    }

    //galeria posts
    const galeriaMarco = () => {
        const productCatsSlider = document.querySelectorAll('.marco-galeria'); // container above slider
        productCatsSlider.forEach(sliderWrapper => {
            const slider = sliderWrapper.querySelector('.galeria-sl'); // container with slider
            const controlsContainerD = sliderWrapper.querySelector('.slider-control-galeria');


            const sliderGaleria = tns({
                container: slider,
                mode : 'gallery',
                loop: false,
                mouseDrag: true,
                nav: false,
                controlsContainer: controlsContainerD,
            });


        });
    };

    if($('.marco-galeria').length > 0) {
        galeriaMarco();
    }


    //menu hamburguer
    $('.hamb').on('click', function () {
        $('.menu-hide').addClass('open');
    });

    $('.close-menu').on('click', function () {
        $('.menu-hide').removeClass('open');
    });

    //abre formatos
    $( ".open-formato" ).on('click',function() {
        $('.abre-formato').slideToggle();
        $(this).toggleClass('open');
    });
});


var lastScrollTop = 0;
var altura = $(window).height();

$(window).scroll(function () {
    var scrollY = $(window).scrollTop();

    //sobe
    if(scrollY < lastScrollTop) {
        if($('.menu-footer-home').length > 0 && $('.menu-footer-home').hasClass('less') && scrollY < 500) {
            $('.menu-footer-home').removeClass('less');
        }

        if(scrollY <= altura) {
           // $('.menu-home').removeClass('active');
        }

        if(!isVisible($(".marco-footer"),-700)) {
            //$('.menu-footer').removeClass('hiden');
        }
    }

    //desce
    if(scrollY > lastScrollTop) {
        //menu footer na home
        if($('.menu-footer-home').length > 0 && isVisible($(".menu-footer-home"), 40) && scrollY > 500) {
            $('.menu-footer-home').addClass('less');
        }

        //menu-footer nas outras paginas
        if(scrollY >= altura && $('.menu-footer-default').length > 0) {
            $('.menu-footer-default').removeClass('hiden');
        }

        if(scrollY >= altura - 150) {
           // $('.menu-home').addClass('active');
        }

        if(isVisible($(".marco-footer"),-700)) {
            //$('.menu-footer').addClass('hiden');
        }
    }

    lastScrollTop = scrollY;
});

function isVisible($el, $mg) {
    var winTop = $(window).scrollTop();
    var winBottom = winTop + $(window).height();
    var elTop = $el.offset().top;
    var elBottom = elTop + $el.height() + $mg;
    return ((elBottom<= winBottom) && (elTop >= winTop));
}

( function() {

    var youtube = document.querySelectorAll( ".youtube" );

    for (var i = 0; i < youtube.length; i++) {

        var source = "https://img.youtube.com/vi/"+ youtube[i].dataset.embed +"/sddefault.jpg";

        var image = new Image();
        image.src = source;
        image.addEventListener( "load", function() {
            youtube[ i ].appendChild( image );
        }( i ) );

        youtube[i].addEventListener( "click", function() {

            var iframe = document.createElement( "iframe" );

            iframe.setAttribute( "frameborder", "0" );
            iframe.setAttribute( "allowfullscreen", "" );
            iframe.setAttribute( "src", "https://www.youtube.com/embed/"+ this.dataset.embed +"?rel=0&showinfo=0&autoplay=1" );

            this.innerHTML = "";
            this.appendChild( iframe );
        } );
    };

} )();

