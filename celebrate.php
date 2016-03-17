<?php
/**
 * Template Name: Celebrate
 */

get_header(); ?>

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
					<h3><?php the_title(); ?></h3>
				</div>
				<div class="clr"></div>


			</article><!-- #post -->
		<?php endwhile; ?>





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
