$(document).ready(function () {
    $(".slider").slick({
        dots: true,
        infinite: true,
        speed: 1000,
        draggable: false,
        // autoplay: true,
        // autoplaySpeed: 2000,
    });
    $('.brand_list').slick({

        infinite: true,
        speed: 1000,
        slidesToShow: 2,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-circle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-circle-right"></i></button>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                }
            }

        ]
    });
    // Hot
    $('#hots_list').slick({
        infinite: true,
        speed: 1000,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-circle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-circle-right"></i></button>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    // arrows: false,
                }
            },
            {
                breakpoint: 1023,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: true,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: true,
                }
            }

        ]
    });
});

