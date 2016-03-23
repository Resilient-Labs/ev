<?php
/**
 * Template Name: Home
 *
 * Description: A full width page template that will display 4 posts in a block without any sidebars
 *
 * @since 1.0.3
 */
if ( ! is_front_page() )
	get_header(); ?>

	
	<div class="container-1">
		<div class="text-container1">
			<h2 id="text1">WE FUND INNOVATIVE AND DISRUPTIVE FOOD COMPANIES</h2>
		</div>
		<a href="#goals"><div class="arrow1"></div></a>
	</div>


	<div id="goals" class="container-2">
		<h3 id="text2">OUR PROGRESS</h3>
		
		<div class="column-holder">
			<div class="column-1">
				
				<i id="customIcon" class="fa fa-share-alt"></i>
				<h4>Connect</h4>
				<p>Maecenas magna dui, dignissim quis felis sed, tincidunt molestie magna. Proin semper felis in dolor.</p>
			
			</div>
			
			<div class="column-2">
				<i id="customIcon" class="fa fa-binoculars"></i>
				<h4>Scouting</h4>
				<p>Maecenas magna dui, dignissim quis felis sed, tincidunt molestie magna. Proin semper felis in dolor.</p>
				

			</div>
			
			<div class="column-3">
				<i id="customIcon" class="fa fa-area-chart"></i>
				<h4>Scouting</h4>
				<p>Maecenas magna dui, dignissim quis felis sed, tincidunt molestie magna. Proin semper felis in dolor.</p>

			</div>
		</div>

		<div class="more">
			<a class="link1" href="">
				<h6>TELL ME MORE</h6>
				<div class="arrow2"></div>
			</a>
		</div>

	</div>

	<div class="container-3">
		<h2 id="mom">MEET OUR MEMBERS</h2>
		<p id="mom-p">Made up exclusively of angels with domain expertise in creating. Manufacturing distributing and seling food and beverage products</p>
		<h6 id="mom2">MEET OUR MEMBERS</h6>
	</div>

	<div class="container-4">
		<div class="column-4">
			<h5 id="footer-content">FOLLOW US</h5>
			<div class="leftm icons"><i id="icon-center" class="fa fa-twitter"></i></div>
			<div class="icons"><i id="icon-center" class="fa fa-linkedin"></i></div>
			<div class="icons"><i id="icon-center" class="fa fa-instagram"></i></div>
		</div>
		
		<div class="column-5">
			<h5 id="footer-content">GET OUR NEWSLETTER</h5>
			<div class="subscribe"><p id="subscribe">SUBSCRIBE<p></div>
		</div>
		
		<div class="column-6">






<script>
	$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>



<?php if ( ! is_front_page() ) get_footer(); ?>