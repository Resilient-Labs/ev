<?php
/**
 * Template Name: Festival Events
 */

get_header(); ?>
	<link href="/wp-content/themes/cityawake/style_cityawake.css" rel="stylesheet" />
	<script src="https://code.jquery.com/jquery-3.0.0-alpha1.js"></script>
	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<?php
/*
===============
BEGIN SLIDESHOW
===============
*/
?>
<!-- it works the same with all jquery version from 1.x to 2.x -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<!-- use jssor.slider.mini.js (40KB) instead for release -->
<!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
<!-- <script type="text/javascript" src="/wp-content/themes/cityawake/js/slider/jssor.js"></script>
<script type="text/javascript" src="/wp-content/themes/cityawake/js/slider/jssor.slider.js"></script>
<script type="text/javascript" src="/wp-content/themes/cityawake/js/slider/jssor.customization.js"></script> -->
<!-- <link href="/wp-content/themes/cityawake/css/jssor-slider.css" rel="stylesheet" /> -->
<!-- Jssor Slider Begin -->
<!-- To move inline styles to css file/block, please specify a class name for each element. -->

<!-- <div id="slider1_container" style="position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; background-image: url('/wp-content/themes/cityawake/images/headers/cityscape_dark.jpg')">
        <!-- Slides Container -->
<!-- <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px;
            height: 500px; overflow: hidden;">
            <div>
              <a href="#" title="City Awake Festival" >
                <img u="image" src="/wp-content/themes/cityawake/images/Festival2015Logo_withdate.png" />
                
            </a>
            
            </div>

        </div>

    </div> -->
    <!-- Jssor Slider End -->

<div class="hero-section">
    <img src="/wp-content/themes/cityawake/city-awake-white.png">
    <div id="eventbutton">
        <script class="ai1ec-widget-placeholder" data-widget="ai1ec_superwidget">
        (function(){var d=document,s=d.createElement('script'),
            i='ai1ec-script';if(d.getElementById(i))return;s.async=1;
            s.id=i;s.src='http://live-timely-f1db05d716.time.ly/?ai1ec_js_widget';
            d.getElementsByTagName('head')[0].appendChild(s);})();
        </script>
    </div>
    <div class="event-instuctions">
        <p>Please click below to submit your full event details for the 2015 Festival.The complete Festival calendar will be live on Wednesday, October 21st.</p>
    </div>
</div>

<?php
/*
===============
END SLIDESHOW
===============
*/
?>


	<script type="text/javascript">
	$('body').addClass('festival').addClass('new-event');
    $('div.ai1ec-btn-group ai1ec-contribution-buttons').addClass('festivalbutton');

//     function close($target){
//         $target.toggleClass('hiding');
//         window.setTimeout(function(){
//             $target.toggleClass('visible');
//             $target.toggleClass('expanding');
//             $target.toggleClass('hiding');
//         }, 800);
//     };
//     function open(){
//         // close($('.answer'));
//         $('.answer').each(function(){
//             if ($(this).hasClass('visible')) {
//                 close($(this));
//             };
//          });
        
//         $faq.toggleClass('expanding');
//         window.setTimeout(function(){
//             $faq.toggleClass('visible');
//         }, 800);
//     };

// 	$('.faq').click(function(){
//         $faq = $(this).children('.answer');
//         if($faq.hasClass('visible')){
//             close($faq);
//         }else{
//             //alert($faq.attr('class'));
//             open();
//         }
// 	});
//     //STUFF FOR MODALS 
//     $('.open-modal').click(function(){
//         $this = $(this);
//         $('#overlay').addClass('visible');
//         $('html').addClass('noScroll');
//         $modalLocation = "/wp-content/themes/cityawake/modals.html #" + $this.data("modal");
//         $('#modal').load($modalLocation);
//     });
//     $('#overlay').click(function(){
//         $(this).removeClass('visible');
//         $('html').removeClass('noScroll');
//     });
//     $('a').click(function(){
//     $('html, body').animate({
//         scrollTop: ($( $.attr(this, 'href') ).offset().top - $('#site-navigation').height())
//     }, 500);
//     return false;
// });
	</script>

<?php get_footer(); ?>
