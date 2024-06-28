$(document).ready(function () {
    $(".burger").on("click", function () {
        $(".burger__icon").toggleClass("open");
        $(".header__menu").toggleClass("is-open");
    });
    $(".menu__link").on("click", function () {
        $(".burger__icon").toggleClass("open");
        $(".header__menu").toggleClass("is-open");
    });

    $('a[href^="#"]').click(function () {
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top - 60;
        jQuery("html:not(:animated), body:not(:animated)").animate(
            {scrollTop: destination},
            800
        );
        return false;
    });
    $('.slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false
    });
});
