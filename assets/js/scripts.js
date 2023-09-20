/**
 * Scripts
 */
$(document).ready(function () {
    parallax();

    //slider home
    if($('.slider-sl').length > 0) {
        if($(window).width() >= 768) {
            var sliderHome = tns({
                container: '.slider-sl',
                mouseDrag: true,
                nav: false,
                controlsContainer: '.slider-control-homeslide',
                items: 1,
                mode : 'gallery',
                speed : 1200,
            });
        } else {
            var sliderHome = tns({
                container: '.slider-sl',
                mouseDrag: true,
                loop: false,
                controlsContainer: '.slider-control-homeslide',
                items: 1.1,
                gutter: 10,
                mode: "carousel",
                navPosition : 'bottom'
            });
        }

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
            loop: false,
            controlsContainer: '.slider-control-stories',
            navPosition : 'bottom',
            responsive: {
                350: {
                    items : 1,
                    nav: true,

                },
                500: {
                    items : 4,
                    nav: false,
                    gutter: 40,
                }
            }
        });
    }

    //slider home video
    if($('.video-sl').length > 0) {
        var sliderVideo = tns({
            container: '.video-sl',
            loop: false,
            controlsContainer: '.slider-control-video',
            navPosition : 'bottom',
            responsive: {
                350: {
                    items : 1,
                    nav: true,
                },
                500: {
                    items : 2,
                    gutter: 40,
                    nav: false,
                }
            }
        });
    }

    //post de podcast
    if($('.pod-outros-sl').length > 0) {
        var sliderPodOutros = tns({
            container: '.pod-outros-sl',
            items : 4,
            nav: false,
            loop: false,
            controlsContainer: '.slider-control-pod',
            gutter: 40
        });
    }

    //entrevista mobile
    if($('.entrevista__posts').length > 0 && $(window).width() <= 768) {
        var sliderEntrevista = tns({
            container: '.entrevista__posts',
            items : 1,
            nav: true,
            navPosition: 'bottom',
            loop: false,
            controlsContainer: '.slider-control-entrevista',
            gutter: 10,
            autoHeight: true
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

    $('.sl').on('click', function (){
        $(this).find('img').toggleClass('plus');
    })

    //icone de explicacao colocar azul
    $('strong:contains("<+>")').css('color', '#1E69FA');


    let panels = gsap.utils.toArray(".panel");
    let tops = panels.map(panel => ScrollTrigger.create({trigger: panel, start: "top top"}));

    panels.forEach((panel, i) => {
        ScrollTrigger.create({
            trigger: panel,
            start: () => panel.offsetHeight < window.innerHeight ? "top top" : "bottom bottom", // if it's shorter than the viewport, we prefer to pin it at the top
            pin: true,
            pinSpacing: false,
            onLeave: () => {
            },
        });
    });

    //margem parallax e efeito
    $(window).resize(function() {
        parallax();
    });

    const image = document.getElementsByClassName('img-parallax');
    new simpleParallax(image, {
        delay: .6,
        transition: 'cubic-bezier(0,0,0,1)'
    });



});

function parallax() {
    //parallax
    if($('.parallax').length > 0) {
        $('.parallax').each(function (index) {
            var imgH = $(this).find('img').height();

            $(this).next().css('margin-top', imgH + 60);


        })
    }
}


var lastScrollTop = 0;
var altura = $(window).height();

$(window).scroll(function () {
    var scrollY = $(window).scrollTop();

    //sobe
    if(scrollY < lastScrollTop) {
        if($('.menu-footer-home').length > 0 && $('.menu-footer-home').hasClass('less') && scrollY < 500) { console.log('1');
            $('.menu-footer-home').removeClass('less');
        }

        if(scrollY <= altura) {
            if ($('.menu-home').hasClass('active')) {
                $('.menu-home').removeClass('active');
            }

            if (!$('.menu-especial').hasClass('esconde')) {
                $('.menu-especial').addClass('esconde');
            }
        }

        if(isVisible($(".marco-footer"),-700) && $('.menu-footer-home').hasClass('hiden')) {
            $('.menu-footer-home').removeClass('hiden');
        }


        if(scrollY > altura) {
            if (!$('.menu-home').hasClass('active')) {
                $('.menu-home').addClass('active');
            }
        }

        if($('.menu-home').length == 0 && scrollY > altura) {
            if($('.menu-default').hasClass('esconde')) {
                $('.menu-default').removeClass('esconde');
            }
        }

    }

    //desce
    if(scrollY > lastScrollTop) {
        //menu footer na home
        if($('.menu-footer-home').length > 0 && isVisible($(".menu-footer-home"), 40) && scrollY > 500 && !$('.menu-footer-home').hasClass('less')) {
            $('.menu-footer-home').addClass('less');

            if($(window).width() <= 768) {
                setInterval(footerHome, 3000);
            }
        }

        if(isVisible($(".marco-footer"),-700) && !$('.menu-footer-home').hasClass('hiden')) {
            $('.menu-footer-home').addClass('hiden');
        }

        if(scrollY >= altura - 150) {
            if(!$('.menu-home').hasClass('active')) {
                $('.menu-home').addClass('active');
            }
        }

        if(scrollY >= altura * 2 && $('.menu-home').length > 0) {
            if($('.menu-home').hasClass('active')) {
                $('.menu-home').removeClass('active');
            }
        }

        if(scrollY >= altura && $('.menu-home').length == 0) {
            if(!$('.menu-default').hasClass('esconde')) {
                $('.menu-default').addClass('esconde');
            }
        }
    }

    lastScrollTop = scrollY;
});

var count = 0;
function footerHome() {
    if(count === 3) {
        count = 0;
    }

    $('.m-fade').removeClass('activehome');
    $('.m-fade').eq(count).addClass('activehome');

    count++;
}

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

        var source = "https://img.youtube.com/vi/"+ youtube[i].dataset.embed +"/maxresdefault.jpg";

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

