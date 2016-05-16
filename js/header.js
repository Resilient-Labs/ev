//jQuery(document).ready(function($) {
var $ = jQuery.noConflict();
var stickyNav = function(){
    var scrollTop = $(window).scrollTop();
    // if the document contains an Id with the name home, run the sticky nav function
    if (document.getElementById("home")) {
        //
        $('.navbar').addClass('fixedPos');

        var stickyNavTop = $('.topimg').offset().top;
        if (scrollTop > stickyNavTop) {
            $('.navbar').addClass('stickyNav');
            $('.navbar').addClass('red');
        } else {
            $('.navbar').removeClass('stickyNav');
            $('.navbar').removeClass('red');
        }
    }
};

stickyNav();
//var toggleNav = function() {
//    $('.responsive-navbar').addClass('hide-nav');
//}
//document.getElementsByClassName("responsive-nav").addEventListener("click", toggleNav);

$(window).scroll(function() {
    stickyNav();
});

var fixFooter = function() {
    if (document.getElementById("contact")) {
        console.log("contact");
        /** code for fixing footer if body is not big enough to fill viewport goes here **/
    }
}

fixFooter();


$("#toggle-menu").click(function() {
    $(".responsive-navbar").toggleClass("hide-nav");
    }
);
//});
