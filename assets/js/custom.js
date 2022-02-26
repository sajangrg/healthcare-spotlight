// $('#infinte-slick').slick({
//     dots: false,
//     infinite: true,
//     speed: 300,
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     arrows: true,
//     adaptiveHeight: false,
//     prevArrow: $('.prev-slide'),
//     nextArrow: $('.next-slide'),
//     responsive: [{
//             breakpoint: 1467,
//             settings: {
//                 slidesToShow: 1,
//                 slidesToScroll: 1,
//                 infinite: true
//             }
//         }, {
//             breakpoint: 1023,
//             settings: {
//                 slidesToShow: 1,
//                 slidesToScroll: 1,
//                 infinite: true
//             }
//         }
//         // You can unslick at a given breakpoint now by adding:
//         // settings: "unslick"
//         // instead of a settings object
//     ]
// });

(function($) {
    $(window).on("load", function() {

        /* Page Scroll to id fn call */
        $("#mc2_nav a,a[href='#top'],a[rel='m_PageScroll2id']").mPageScroll2id({
            highlightSelector: "#mc2_nav a",
            offset: 50
        });
    });
})(jQuery);

$(function() {
    $('.service-info').matchHeight();
    // $('.club-feature').matchHeight();
    // $('.club-feature .row').matchHeight();
});
$('.navbar-collapse a').click(function() {
    $(".navbar-collapse").collapse('hide');
});