//jQuery(document).ready(function($) {
    // dentro de esta función $() funcionará como un álias de jQuery()
$(function() {
    var selectedClass = "";
    $("p").click(function(){
        selectedClass = $(this).attr("data-rel");
        $("#portfolio").fadeTo(100, 0.1);
        $("#portfolio div").not("."+selectedClass).fadeOut();
        setTimeout(function() {
            $("."+selectedClass).fadeIn();
            $("#portfolio").fadeTo(500, 1);
        }, 500);

    });
});

//});
