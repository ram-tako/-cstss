

jQuery(document).ready(function ($) {
    // wow animation
    function wowAnimation() {
        wow = new WOW({
            boxClass: 'wow',      // default
            animateClass: 'animated', // default
            offset: 0,          // default
            mobile: true,       // default
            live: true        // default
        })
        wow.init();
    }
    //Dropdown Menu
    function dropdownMenu() {
        if ($(window).width() >= 992) {
            $('.navbar .menu-item-has-children, .navbar .dropdown').hover(function () {
                $(this).find('.sub-menu, .dropdown-menu').first().stop(true, true).delay(250).slideDown();

            }, function () {
                $(this).find('.sub-menu, .dropdown-menu').first().stop(true, true).delay(100).slideUp();

            });
        }
        $('.navbar .dropdown > a').click(function () {
            location.href = this.href;
        });
    }
    // 
    function handleNavbarToggler() {
        $('body').on('click', '.navbar-toggler', function () {
            $(this).toggleClass('on');
            $('.navbar-collapse').toggleClass('shown');
            $('.navbar-collapse').slideToggle();
            $('.navbar').toggleClass('open');
        });
    }
    //
    function dropToggler() {
        $('.menu-item-has-children, .dropdown').prepend('<span class="drop-toggler"><i class="fa fa-chevron-down"></i></span>');
        $('body').on('click', '.drop-toggler', function () {
            $(this).parents('.menu-item-has-children, .dropdown').find('.sub-menu, .dropdown-menu').slideToggle();
            $(this).toggleClass('open');
        });
    }
    //
    function matchHeights() {
        var options = {
            byRow: false,
            byRow: true,
            property: 'height',
            target: null,
            remove: false
        };
        $('.product__info, .support__info').matchHeight(options);
        $('.section-news .news__info').matchHeight(options);
    }
    //
    function mainSlider() {
        $('.hero__slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            arrows: false,
            dots: false,
            fade: true,
            speed: 2500,
            cssEase: 'ease-in-out'

        });
        // 
        $('.project-slider').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 5000,
            arrows: true,
            dots: false,
            responsive: [
                {
                  breakpoint: 1200,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 992,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                  }
                },
                {
                    breakpoint: 768,
                    settings: {
                      slidesToShow: 2,
                      slidesToScroll: 1
                    }
                  },
                {
                  breakpoint: 415,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }

              ]
            
        });

        // brand slider

        $('.testimonial-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 5000,
            arrows: false,
            dots: true
            
        });

        $('.client-slider').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 5000,
            arrows: true,
            dots: false,
            responsive: [
                {
                  breakpoint: 1200,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 992,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                  }
                },
                {
                    breakpoint: 768,
                    settings: {
                      slidesToShow: 2,
                      slidesToScroll: 1
                    }
                  },
                {
                  breakpoint: 415,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                  }
                }

              ]
            
        });

    }
    // img tags converted to svg

    function imgToSvg() {
        $("img.svg").each(function () {
            //console.log('gdg');
            var $img = $(this);
            var imgID = $img.attr("id");
            var imgClass = $img.attr("class");
            var imgURL = $img.attr("src");
            $.get(
                imgURL,
                function (data) {
                    // Get the SVG tag, ignore the rest
                    var $svg = $(data).find("svg");
                    // Add replaced image's ID to the new SVG
                    if (typeof imgID !== "undefined") {
                        $svg = $svg.attr("id", imgID);
                    }
                    // Add replaced image's classes to the new SVG
                    if (typeof imgClass !== "undefined") {
                        $svg = $svg.attr("class", imgClass + " replaced-svg");
                    }
                    // Remove any invalid XML tags as per http://validator.w3.org
                    $svg = $svg.removeAttr("xmlns:a");
                    // Replace image with new SVG
                    $img.replaceWith($svg);
                },
                "xml"
            );
        });
    }

    function countNumber() {
         // Animate numbers
    jQuery('.count-box').appear(function() {
        var target = $(this).find('span.count-text');
        var toAnimate = $(this).find('span.count-text').attr('data-value');
        target.each(function(i, elm) {
            anime({
                targets: elm,
                innerHTML: [0, $(elm).data('value')],
                easing: 'easeInOutCirc',
                duration: 3000,
                round: 10 // Will round the animated value to 1 decimal
            });
        });

        function commaSeparateNumber(val) {
            while (/(\d+)(\d{3})/.test(val.toString())) {
                val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
            }
            return val;
        }
    });
    }

    function resize_left() {
        var get_left_offset = $('.container').offset().left + 15;
        $('.containerRt').css('padding-left', get_left_offset);
    }
    resize_left();
    $(window).resize(resize_left);


    // call functions
    wowAnimation();
    dropdownMenu();
    imgToSvg();
    handleNavbarToggler();
    dropToggler();
    matchHeights();
    mainSlider();
    countNumber();

    $(window).on('resize', function() {
        dropdownMenu();
        dropToggler();
    });


});






