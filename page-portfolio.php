<?php
/**
 * Template Name: Portfolio Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EdibleVentures
 */

get_header(); ?>

    <br>
    <br>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="wrapper">
                <p class="portfolio" href="" data-rel="all">All</p>
                <p class="portfolio" data-rel="current">Current</p>
                <p class="portfolio" data-rel="food">Food</p>
                <p class="portfolio" data-rel="beverage">Beverage</p>
                <div style="clear:both;"></div>
                <div id="portfolio">
                    <?php the_post();
                    // Get 'portfolio' posts
                    $portfolio_posts = get_posts( array(
                        'post_type' => 'evportfolio',
                        'posts_per_page' => -1, // Unlimited posts
                        'orderby' => 'title', // Order alphabetically by name
                    ) );
                    foreach ( $portfolio_posts as $post ):
                        $types = "";
                        $field = get_field_object('types');
                        $value = $field['value'];
                        $choices = $field['choices'];
                        $websiteLink = get_field('link');

                        foreach( $value as $v ):
                            $types .= " ";
                            $types .= $choices[$v];
                        endforeach;

                        if (has_post_thumbnail( $post->ID ) ):
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                            echo "<a href=\"" .$websiteLink. " \" target=\"_blank\">";
                            echo "<div class=\"tile" .$types. " all\">";
                            echo "<img class=\"portfolio-img\" src=\"$image[0]\">";
                            echo "</div>";
                            echo "</a>";
                        endif;
                        // Reset the types for each image
                        $types = "";
                    endforeach;
                    ?>
                    <!--                    LOOP div class = tile all for each then could be current beverage or food based on a category`-->
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
