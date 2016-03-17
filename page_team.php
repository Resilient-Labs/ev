<?php
/**
 * Template Name: Team
 */

get_header(); ?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

<div id="gallery">
	<?php
	$photoIDs = get_post_meta($post->ID, 'Photo IDs', true);
	echo do_shortcode('[gallery link="none" ids="' . $photoIDs . '"]' ); ?>
</div>


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
			<h3>City Awake is created by this kickass collaborative team.</h3>
		</div>
		<div class="clr"></div>


	</article><!-- #post -->
<?php endwhile; ?>


		<?php /*
		=============
		Parallax Bottom
		=============
		*/ ?>

		<div id="parallax_bottom"></div>

	</div><!-- #content -->
</div><!-- #primary -->


<?php get_footer(); ?>
