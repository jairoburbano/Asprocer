(function($) {
    // Tamaño de la pantalla
    var $window = $(window),
        windowSize	= $window.width(),
        windowHeight	= $window.height();
    function menu() {
        var header = $('.header'),
            scroll = $(window).scrollTop(),
            share = $('.barra--share'),
            interior = $('.menu--interior');
        if(windowSize < 1100) {
            if (scroll >= 80) {
                header.addClass('header--fixed');
            } else {
                header.removeClass("header--fixed");
            }
        }
        if (scroll >= 80) {
            share.addClass('share--fixed');
            interior.addClass('menu--fixed');
        } else {
            share.removeClass('share--fixed');
            interior.removeClass('menu--fixed');
        }
    }
    function menuBottom() {
        var icon = $('.header__icon'),
            menu = $('.header--bottom');
        icon.click(function() {
            menu.stop().slideToggle();

            $('body').toggleClass('menu--open');
            if($('body').hasClass('menu--open') && windowHeight > 400) {
                $('body, html').bind('touchmove', function(e){e.preventDefault()})
            } else {
                $('body, html').unbind('touchmove')
            }
        });
    }
    function alturaMenu() {
        var menu = $('.header--bottom');
        if($('body').hasClass('iphone') || $('body').hasClass('ipad')) {
            menu.css({'height':((window.innerHeight))+'px'})
        }
    }
    function buscador() {
        var icon = $('.header__buscador .send-group svg'),
            logo = $('.header__logo'),
            close = $('.buscador__close');
        icon.click(function() {
            if(windowSize < 1100 ) {
                logo.fadeOut(10, function() {
                    $('.header').addClass('buscador--open');
                });
            } else {
                $('.header__container').fadeOut();
                $('.header').addClass('buscador--open');
            }
            $('#buscar').focus();
        });
        close.click(function() {
            $('.header').removeClass('buscador--open');
            if(windowSize < 1100 ) {
                logo.delay(300).fadeIn(300);
            } else {
                $('.header__container').fadeIn();
            }
        });
    }
    function galleryHome() {
        var slide = $('.slide--home');
        if(slide.find('li').length < 2){
            $('.custom__icons').hide();
        }
        slide.flexslider({
            animation: "fade",
            controlsContainer: $(".custom__icons"),
            prevText: '<svg><use xlink:href="#shape-icon-prev" /></svg>',
            nextText: '<svg><use xlink:href="#shape-icon-next" /></svg>',
        });
    }
    function gallerySimple() {
        var slide = $('.gallery--simple');
        slide.each(function() {
            $(this).flexslider({
                animation: "slide",
                prevText: '<svg><use xlink:href="#shape-icon-prev" /></svg>',
                nextText: '<svg><use xlink:href="#shape-icon-next" /></svg>'
            });
        });
    }
    function gallery() {
        var slide = $('.js-slider__gallery'),
            texto = $('.gallery__text p'),
            fullscreen = $('.gallery__fullscreen');
        slide.each(function() {
            $(this).flexslider({
                animation: "slide",
                controlNav: false,
                controlsContainer: $(".custom__icons"),
                prevText: '<svg><use xlink:href="#shape-icon-prev" /></svg>',
                nextText: '<svg><use xlink:href="#shape-icon-next" /></svg>',
                start: function(slider) {
                    $('.total-slides').text(slider.count);
                    $('.current-slide').text(slider.currentSlide+1);
                    var title = $('.flex-viewport .slides').find('.flex-active-slide').children().attr('alt');
                    texto.empty();
                    texto.text(title);
                },
                after: function(slider) {
                    $('.current-slide').text(slider.currentSlide+1);
                    var title = $('.flex-viewport .slides').find('.flex-active-slide').children().attr('alt');
                    texto.empty();
                    texto.text(title);
                }
            });
        });

        fullscreen.click(function() {
            $('.gallery').toggleClass('fullscreen');
            $('.gallery').addClass('gallery--trans');
            setTimeout(function(){ 
                $('.gallery').removeClass('gallery--trans');
                slide.resize();
            }, 300);
        });
    }
    function asociados() {
        var divs = $(".items--box > .items__item");

        if(windowSize > 740 && windowSize < 1100) {
            for(var i = 0; i < divs.length; i+=2) {
                divs.slice(i, i+2).wrapAll("<div class='items__sep'></div>");
            }
        }
        if(windowSize > 1100) {
            for(var i = 0; i < divs.length; i+=3) {
                divs.slice(i, i+3).wrapAll("<div class='items__sep'></div>");
            }
        }
    }
    function accordeon() {
        var button = $('.areas__accordeon__button'),
            content = $('.areas__accordeon__content');
        button.click(function() {
            var $this = $(this);
            $this.parents('.areas__item').siblings().find('.areas__accordeon__content').slideUp();
            $this.parents('.areas__item').find('.areas__accordeon__content').stop().slideToggle(function() {
                $('html, body').animate({
                    scrollTop: $this.offset().top - 30
                }, 1000);
            });
            $this.toggleClass('active');
        });
    }
    //Alertas moviles 
    function getMobileOperatingSystem() {
        var userAgent = navigator.userAgent || navigator.vendor || window.opera;

        if (/android/i.test(userAgent)) {
            $('body').addClass('android');
        }

        // iOS detection from: http://stackoverflow.com/a/9039885/177710
        if (/iPhone|iPod/.test(userAgent) && !window.MSStream) {
            $('body').addClass('iphone');
        }
        if (/iPad/.test(userAgent) && !window.MSStream) {
            $('body').addClass('ipad');
        }
        if(/CriOS/i.test(navigator.userAgent) &&
           /iphone|ipod|ipad/i.test(navigator.userAgent)){
            $('body').addClass('chrome');
        }else{
        }
        return "unknown";
    }
    function alerta() {
        var close = $('.alert__close');
        close.click(function() {
            console.log('adasd');
            $(this).parent().fadeOut();
        });
    }
    function share() {
        var button = $('.share--mobile'),
            close = $('.share--close');
        button.click(function() {
            $('.share').addClass('share--open');
        });
        close.click(function() {
            $('.share').removeClass('share--open');
        });
    }
    function popupLinks(){
        var $trigger = $('.popup');
        $trigger.on('click', function(e) {
            e.preventDefault();
            var width  = 575,
                height = 400,
                left   = ($window.width()  - width)  / 2,
                top    = ($window.height() - height) / 2,

                opts   = 'status=1' +
                ',width='  + width  +
                ',height=' + height +
                ',top='    + top    +
                ',left='   + left;

            window.open(this.href,'compartir', opts);
        });
    }
    function fullImage() {
        var lightbox = $('.lightbox--full');
        $('.js-full').click(function() {
            var dataFull = $(this).attr('data-full');
            lightbox.fadeIn();
            lightbox.find('.lightbox__media').html('<img src="'+dataFull+'" title="Titulo">');
        });
        $('.lightbox__close').click(function() {
            lightbox.fadeOut();
        });
    }
    $(window).scroll(function() {
        menu();
        alturaMenu();
    });
    window.onload = function() {
        $('.slide--home').removeClass('inicio-slide');
        $('.loader__slide').fadeOut();
    };

    function openShare() {
        var trigger = $('.js-social-block'),
            nav     = $('.menu'),
            email   = $('.header__contact'),
            social  = $('.js-social-media');

        trigger.hoverIntent({
            over: startHover,
            out: endHover,
            timeout: 1000
        });

        function startHover(event) {
            nav.fadeOut();
            email.addClass('share-is-open');
            social.fadeIn();
        }

        function endHover(event) {
            nav.fadeIn();
            email.removeClass('share-is-open');
            social.fadeOut();
        }

        trigger.on('click', function(event) {
            event.preventDefault();
        });
    }

    openShare();
    menuBottom();
    buscador();
    alturaMenu();
    galleryHome();
    gallerySimple();
    gallery();
    asociados();
    accordeon();
    getMobileOperatingSystem();
    alerta();
    share();
    popupLinks();
    fullImage();
})(jQuery);
