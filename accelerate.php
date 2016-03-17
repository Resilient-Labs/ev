<?php
/**
 * Template Name: Accelerate
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

    <div class="max1000" style="padding:0;">
			<div class="col50">
				<img src="/wp-content/themes/cityawake/images/accelerate_unreasonable.png" />
				<div class="copy">
					<h5>Accelerator</h5>
					<p>A 5-day hyper-accelerator designed to help Boston-based ventures understand the
						fundraising process and become ready to take on investment. Our ultimate goal is to
						get more funding to Boston’s most ambitious impact startups.
						<a href="http://unreasonablelabs.org/home/boston/" target="_blank">Learn more about Unreasonable Lab Boston.</a>
					</p>
				</div>
			</div>
			<div class="col50">
				<img src="/wp-content/themes/cityawake/images/accelerate_ribbon.png" />
				<div class="copy">
					<h5>Competition</h5>
					<p>Explore community issues and identify others with similar passions seeking
						to solve those issues through a competition-based program and accompanying
						curriculum rooted in systems thinking, problem structuring and design thinking.
					</p>
				</div>
			</div>
		</div>
		<div class="max1000" style="padding:0;">
				<div class="col50" >
					<img src="/wp-content/themes/cityawake/images/accelerate_book.png" />
					<div class="copy">
						<h5>Classes</h5>
						<p>Accelerate your personal & professional development to improve your
							capacity to make social change. Our classes aim to educate aspiring changemakers
							on how to maximize impact in Boston through in person classes and workshops.
						</p>
					</div>
				</div>
				<div class="col50">
					<img src="/wp-content/themes/cityawake/images/accelerate_shield.png" />
					<div class="copy">
						<h5>Campus Fund</h5>
						<p>Campus Fund seeks to educate and provide exposure to real dollar impact investing
							for interested students. Through an intensive eight-week program, students learn
							how to select and provide catalytic funding to promising student start-ups that
							will change our society for the better.
						</p>
					</div>
				</div>



		</div>


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
