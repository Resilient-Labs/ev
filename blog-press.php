<?php
/**
 * Template Name: Press
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php
			// Get latest post
			$latest_post = new WP_Query( array( 'posts_per_page' => 1, 'category_name' => 'press' ) );

			if ( $latest_post->have_posts() ) while ( $latest_post->have_posts() ) : $latest_post->the_post();
	?>

	<article class="home-blog-main delta bg-blue">

			<h3 class="home-blog-title landmark mega">
					<?php the_title(); ?>
			</h3>

			<p class="flush--bottom">
					<?php echo get_the_excerpt(); ?>

					<a href="<?php the_permalink(); ?>">
							<strong>READ MORE</strong>
							<i class="icon icon-right-arrow-big"></i>
					</a>
			</p>

	</article>

	<?php endwhile; ?>


		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
