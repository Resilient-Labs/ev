<?php
/**
 * The template for displaying article headers
 *
 * @since 1.0.6
 */
$bavotasan_theme_options = bavotasan_theme_options();
global $paged;
?>

	<?php
	if ( is_single() ) :
		the_title( '<h1 class="entry-title">', '</h1>' );
	else :
		the_title( sprintf( '<h2 class="entry-title taggedlink"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
	endif;
	?>

	<?php if ( ! is_page_template( 'page-templates/template-post-block.php') ) { ?>
	<div class="entry-meta">
		<?php
		$display_author = $bavotasan_theme_options['display_author'];
		if ( $display_author )
			printf( __( 'by %s', 'arcade-basic' ),
				'<span class="vcard author"><span class="fn"><a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" title="' . esc_attr( sprintf( __( 'Posts by %s', 'arcade-basic' ), get_the_author() ) ) . '" rel="author">' . get_the_author() . '</a></span></span>'
			);

		$display_date = $bavotasan_theme_options['display_date'];
		if( $display_date ) {
			if( $display_author )
				echo '&nbsp;' . __( 'on', 'arcade-basic' ) . '&nbsp;';

		    echo '<a href="' . get_permalink() . '" class="time"><time class="date published updated" datetime="' . get_the_date( 'Y-m-d' ) . '">' . get_the_date() . '</time></a>';
	    }

		$display_categories = $bavotasan_theme_options['display_categories'];
		if( $display_categories ) {
			if( $display_author || $display_date )
				echo '&nbsp;' . __( 'in', 'arcade-basic' ) . '&nbsp;';

		    the_category( ', ' );
	    }

		$display_comments = $bavotasan_theme_options['display_comment_count'];
		if( $display_comments && comments_open() ) {
			if ( $display_author || $display_date || $display_categories )
				echo '&nbsp;&bull;&nbsp;';

			comments_popup_link( __( '0 Comments', 'arcade-basic' ), __( '1 Comment', 'arcade-basic' ), __( '% Comments', 'arcade-basic' ) );
		}
		?>
	</div>
	<?php } ?>