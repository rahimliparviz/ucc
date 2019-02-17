$(document).ready(function () {
    $('a.page-scroll').on('click', function (e) {
        var anchor = $(this);
        $("body").css("overflow-y", "scroll");
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top
        }, 1500);

        e.preventDefault();
    });


    var $owl = $('#gallery_sld');

    $owl.children().each(function (index) {
        $(this).attr('data-position', index); // NB: .attr() instead of .data()
    });

    $owl.owlCarousel({
        center: true,
        loop: true,
        items: 2,
        margin: 30,
        responsive: {
            0: {
                items: 2,
                margin: 10,
            },
            767: {
                margin: 10,
                items: 2,
            },
        }
    });

    $(document).on('click', '.owl-item>div', function () {
        $owl.trigger('to.owl.carousel', $(this).data('position'));
    });

    $(".lang_ img").click(function (event) {
        event.stopPropagation();
        $(this).siblings().slideToggle(500);
    });
    $("body").click(function () {
        $(".lang_ ul").slideUp(500);
    })
})