<?php
/**
 * Template Name: Members Page
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

<?php
the_post();

// Get 'team' posts
$team_posts = get_posts( array(
    'post_type' => 'team',
    'posts_per_page' => -1, // Unlimited posts
    'orderby' => 'title', // Order alphabetically by name
) );

if ( $team_posts ):
    ?>

    <div class="container-fluid">
        <div class="wrapper">
            <div class="row-fluid">
                <div class="col-12">
                    <h2 style="font-weight:900;margin-top:45px;">Our Members</h2>
                    <br>
                    <p>Made up exclusively of angels with domain expertise in creating, manufacturing distributing and selling food and beverage products.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="wrapper wrapper--teame">
                <div class="team-grid">

                    <?php
                    foreach ( $team_posts as $post ):
                        setup_postdata($post);

                        // Resize and CDNize thumbnails using Automatic Photon service
                        $thumb_src = null;
                        if ( has_post_thumbnail($post->ID) ) {
                            $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'team-thumb' );
                            $thumb_src = $src[0];
                        }
                        ?>
                        <div class="team-grid__member hover">
                            <div class="member__info">
                                <div class="center-vert-content">
                                    <h3 class="member__name"><?php the_title(); ?></h3>  <!-- Name of employee -->
                                    <p class="member__title"><?php the_field('position'); ?></p>  <!-- Position -->
                                    <a class="member__link hvr-grow" href="/edible_ven/members/memberpage.html">Read More</a>
                                    <br>
                                    <br>
                                    <?php if ( $linkedin = get_field('linkedin') ): ?> <!-- If they have linkedin -->
                                        <a class="member__social hvr-pop" href="<?php echo $linkedin; ?>"> <!-- linkedin -->
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if ( $twitter = get_field('twitter') ): ?> <!-- If they have twitter -->
                                        <a class="member__social hvr-pop" href="<?php echo $twitter; ?>"> <!-- twitter -->
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php if ( $thumb_src ): ?> <!-- If they have an image -->
                                <img src="<?php echo $thumb_src; ?>" alt="<?php the_title(); ?>, <?php the_field('position'); ?>" class="img-circle">
                            <?php endif; ?>
                        </div>

                    <?php endforeach; ?>

                    <br>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="wrapper">
            <div class="row-fluid">
                <div class="col-12">
                    <p>If you are interested in membership,
                        <a class="contact" href="mailto:membership@edibleventuresgroup.com">contact us</a>.
                        If you would like to see the group in action, please request a guest pass
                        through an existing member of the group.
                    </p>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>
    <!--FOOTER-->
<?php
get_footer();

