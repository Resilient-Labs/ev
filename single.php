<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<div class="site-content content" role="main">




		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<article class="home-blog-main delta bg-blue" style="padding: 0 0 4em 0;">

		<h1 class="home-blog-title landmark mega">
				<?php the_title(); ?>

		</h1>

		<p class="flush--bottom">
				<?php echo the_content(); ?>
		</p>

</article>

<?php endwhile; ?>




<?php /*
=========================
second roll of blog posts
=========================
*/ ?>

<ul id="blogposts">
	<?php
	// Get latest post
	$latest_post = new WP_Query( array( 'category_name' => 'Blog Post', 'post__not_in' => array($post->ID) ) );

	if ( $latest_post->have_posts() ) while ( $latest_post->have_posts() ) : $latest_post->the_post();
?>

<li class="home-blog-main delta bg-blue" id="li<?php echo $post->ID; ?>">
<a href="<?php the_permalink(); ?>">
	<?php the_title(); ?>
</a>
</li>

<?php endwhile; ?>


</ul>









	</div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>
