$(document).ready(function () {

    /* Block navigation*/

    $(".for_scroll").on("click", function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 900);
    });

    /*  Popup appears*/

    $(function () {
        $('[data-toggle="popover"]').popover()
    });

    /*  Modal window appears*/

    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus()
    });

    /*   Variants - graph stripes animation*/

    var identifier,
        top = 0,
        navTopPoint = top + parseInt($(".section-conditions").offset().top + 50),
        successPoint = top + parseInt($(".section-success").offset().top);

    $(window).bind('scroll', function () {
        var scrolled = $(window).scrollTop();
        if ((scrolled >= navTopPoint) && (scrolled <= successPoint)) {

            $('.graph-image').each(function (index) {
                $(this).fadeIn();
            });
        }
        else {
            $('.graph-image').each(function (index) {
                $(this).fadeOut();
            });
        }
    });
});
