//jQuery(document).ready(function($) {
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
//});
