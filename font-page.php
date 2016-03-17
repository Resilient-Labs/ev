<?php
/**
 * Template Name: Front Page
 */

get_header(); ?>

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
<script type="text/javascript" src="/wp-content/themes/cityawake/js/slider/jssor.js"></script>
<script type="text/javascript" src="/wp-content/themes/cityawake/js/slider/jssor.slider.js"></script>
<script type="text/javascript" src="/wp-content/themes/cityawake/js/slider/jssor.customization.js"></script>
<link href="/wp-content/themes/cityawake/css/jssor-slider.css" rel="stylesheet" />
<!-- Jssor Slider Begin -->
<!-- To move inline styles to css file/block, please specify a class name for each element. -->

<div id="slider1_container" style="position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; background-image: url('/wp-content/themes/cityawake/images/headers/cityscape.jpg')">
        <!-- Slides Container -->
<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px;
            height: 500px; overflow: hidden;">
            <div>
              <a href="/festival" title="City Awake Festival">
                <img u="image" src="/wp-content/themes/cityawake/images/slider1.svg" />
              </a>
            </div>
						<div>
							<a href="https://docs.google.com/forms/d/1yhUiJgADGNZMlvL0vgY5fxDVIhu0eaAEPqxrwg0-3ow/viewform" target="_blank">
                <img u="image" src="/wp-content/themes/cityawake/images/slider3.svg" />
							</a>
            </div>

        </div>

    </div>
    <!-- Jssor Slider End -->

<?php
/*
===============
END SLIDESHOW
===============
*/
?>


<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

		<?php /* The loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" class="black">
				<header class="entry-header">
					<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
					<div class="entry-thumbnail">
						<?php the_post_thumbnail(); ?>
					</div>
					<?php endif; ?>

				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
				</div><!-- .entry-content -->
				<div class="entry-title">
					<h3>
						Making Boston the hub for social innovation.</h3>
				</div>
				<div class="clr"></div>


			</article><!-- #post -->
		<?php endwhile; ?>




		<?php /*
		=============
		TEAM
		=============
		*/ ?>
		<article>
			<div class="entry-content-alternate">
				<p>
					<span class="highlight">The Team.</span><br />To build a Hub, you have to act as one.
					City Awake is a collection of volunteers from a cross-section of industries
					and experiences who share the common belief that there is no sight more dismal
					than an idea stuck in the mud. We work together to forge partnerships, uproot
					obstacles and scale ideas to drive progress in Boston. <a href="/team">Meet the team.</a>

				</p>
			</div>
		</article>


		<article id="partners">
			<ul id="partner_logos">
				<li>
					<a href="http://tugg.org" target="_blank" title="TUGG">
						<img src="/wp-content/themes/cityawake/images/partners/tugg.jpg" />
					</a>
				</li>
				<li>
					<a href="http://www.massnonprofitnet.org/" target="_blank" title="Massachusetts Nonprofit Network">
						<img src="/wp-content/themes/cityawake/images/partners/mnn.jpg" />
					</a>
				</li>
				<li>
					<a href="http://www.tbf.org/" target="_blank" title="The Boston Foundation">
						<img src="/wp-content/themes/cityawake/images/partners/tbf.jpg" />
					</a>
				</li>
				<li>
					<a href="http://impacthub.net" target="_blank" title="Impact Hub">
						<img src="/wp-content/themes/cityawake/images/partners/ih.png" />
					</a>
				</li>
				<li>
					<a href="http://ashoka.org" target="_blank" title="Ashoka">
						<img src="/wp-content/themes/cityawake/images/partners/ashoka.png" />
					</a>
				</li>
				<li>
					<a href="http://www.bcbs.com/" target="_blank" title="Blue Cross Blue Shield">
						<img src="/wp-content/themes/cityawake/images/partners/bluecrossblueshield.png" />
					</a>
				</li>
				<li>
					<a href="http://www.unitedway.org/" target="_blank" title="United Way">
						<img src="/wp-content/themes/cityawake/images/partners/unitedway.jpg" />
					</a>
				</li>
			</ul>
			<a href="https://docs.google.com/forms/d/1yhUiJgADGNZMlvL0vgY5fxDVIhu0eaAEPqxrwg0-3ow/viewform" target="_blank">
				Join the coalition
			</a>
		</article>
		<div class="clear"></div>



		<?php /*
		=============
		PRESS
		=============
		*/ ?>

<div id="press">
	<div class="max1000">
		<?php
        // Get latest post
        $latest_post = new WP_Query( array( 'posts_per_page' => 3, 'category_name' => 'press' ) );

        if ( $latest_post->have_posts() ) while ( $latest_post->have_posts() ) : $latest_post->the_post();
    ?>

    <article class="home-blog-main delta bg-blue">

			<a href="<?php echo "http://" . get_post_meta($post->ID, 'URL', true); ?>" target="_blank">
				<p class="home-blog-title landmark mega highlight">
            <?php the_title(); ?>
        </p>
			</a>
        <p class="flush--bottom">
            <?php echo the_content(); ?>
        </p>

    </article>

    <?php endwhile; ?>
	</div>
</div><!-- /press -->

		<?php /*
		=============
		Parallax Bottom
		=============
		*/ ?>

		<div id="parallax_bottom"></div>

	</div><!-- #content -->
</div><!-- #primary -->



<?php get_sidebar(); ?>
<?php get_footer(); ?>
