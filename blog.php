<?php
/**
 * Template Name: Blog
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="site-content content" role="main">
			<?php
			// Get latest post
			$latest_post = new WP_Query( array( 'posts_per_page' => 1, 'category_name' => 'Blog Post' ) );

			if ( $latest_post->have_posts() ) while ( $latest_post->have_posts() ) : $latest_post->the_post();
	?>

	<article class="home-blog-main delta bg-blue" style="padding: 0 0 4em 0;">

			<h1 class="home-blog-title landmark mega">
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</h1>

			<p class="flush--bottom">
					<?php echo get_the_excerpt(); ?>
					<?php /* echo the_content(); */ ?>

			</p>

	</article>

	<?php endwhile; ?>




	<?php /*
	=========================
	second roll of blog posts
	=========================
	*/ ?>

	<ul id="brief">
			<?php
			// Get latest post
			$latest_post = new WP_Query( array( 'offset' => 1, 'category_name' => 'Blog Post' ) );

			if ( $latest_post->have_posts() ) while ( $latest_post->have_posts() ) : $latest_post->the_post();
	?>

	<li>
		<a href="<?php the_permalink(); ?>">
			<h5><?php the_title(); ?>
			</h5>
		</a>
			<br />
			<?php echo get_the_excerpt(); ?>
	</li>

	<?php endwhile; ?>


	</ul>



<?php /*
=========================
third roll of blog posts
=========================
*/ ?>

<ul id="blogposts">
		<?php
		// Get latest post
		$latest_post = new WP_Query( array( 'offset' => 3, 'category_name' => 'Blog Post' ) );

		if ( $latest_post->have_posts() ) while ( $latest_post->have_posts() ) : $latest_post->the_post();
?>

<li class="home-blog-main delta bg-blue">
	<a href="<?php the_permalink(); ?>">
		<?php the_title(); ?>
	</a>
</li>

<?php endwhile; ?>


</ul>



		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>
