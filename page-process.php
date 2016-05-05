<?php
/**
 * Template Name: Process Page
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
   $args = array(
   'post-type' => 'post',
   'category_name' => 'process-intro'
   );
   $processitnro = new WP_Query( $args ); ?>

<?php if($processitnro->have_posts() ) : while ($processitnro->have_posts() ) : $processitnro->the_post(); ?>
 <div class="container-fluid white">
        <div class="wrapper">
            <div class="row-fluid">
                <div class="col-lg-12">
                    <h2 style="font-weight:900;margin-top:45px;">
                    <?php echo get_the_title(); ?>
                    </h2>
                    <br>
                    <p><?php echo get_the_content(); ?></p>
                </div>
            </div>
        </div>
    </div>


 <?php endwhile; endif; wp_reset_postdata(); ?>



   <?php
// CODE FOR PROCESS PAGE POPULATION STARTS
   $args = array(
   'post-type' => 'post',
   'category_name' => 'process'
   );
   $processposts = new WP_Query( $args ); ?>


<?php if($processposts->have_posts() ) : while ($processposts->have_posts() ) : $processposts->the_post(); ?>

<?php
    echo "<div class=\"row-fluid\">";
    // Conditional to set odd ordered divs to white, and even ordered divs to red
        if($num % 2 == 0) {
            echo "<section class=\"white\">";
        } else {
            echo "<section class=\"red\">";
        }
         $num++;
            echo "<div class=\"inner-container\">";
            echo "<i class=";
            $icontags = get_the_tags();
            // Gets all the tags for this post (the tag should be the font awesome icon
            // ex: fa fa-clock-o as the only added tag
            if ($icontags) {
                foreach($icontags as $tag) {
                    echo "\"$tag->name\" " ;
                }
            }
            echo "></i>";
                echo "<div>";
                    echo "<h2>";
                    // return the title of the post in this tag
                    echo  get_the_title();
                    echo "</h2>";
                    echo "<p>";
                    // return the content (the description) for this post in this p tag
                    echo get_the_content();
                    echo "</p>";
            echo "</div>";
        echo "</section>";
    echo "</div>";
// CODE FOR PROCESS PAGE POPULATION ENDS
    ?>
 <?php endwhile; endif; wp_reset_postdata(); ?>

    <div class="row-fluid">
        <section class="red">
            <div class="col-lg-2"></div>
            <div class="col-lg-8"><img src="http://s30.postimg.org/m0x731825/spoon_lwhite.png" style="padding-bottom:1.5rem;">
                <br>
                <br>
                <h2 class="bump">Meet our members</h2>
                <br>
                <p class="redtext bump">Made up exclusively of angels with domain expertise in creating,
                    <br>manufacturing distributing and selling food and beverage products</p>
                <br>
                <br>
                <div class="btn btnred up">Meet our members&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></div>
                <br>
                <br>
            </div>
            <div class="col-lg-2"></div>
    </div>
    <!-- row -->
</div>
<br>
<br>


<?php
get_footer();
