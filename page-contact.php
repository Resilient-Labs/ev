<?php
/**
 * Template Name: Contact Page
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
            <div class="container-fluid" id="contact">
                <div class="wrapper">
                    <div class="row-fluid">
                        <div class="col-12">
                            <h1>If you have questions, send us a message!</h1>
                            <form class="cf">
                                <div class="half left cf">
                                    <input type="text" id="input-name" placeholder="Name">
                                    <input type="email" id="input-email" placeholder="Email address">
                                    <input type="text" id="input-subject" placeholder="Subject">
                                </div>
                                <div class="half right cf">
                                    <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
                                </div>
                                <input type="submit" value="Submit" id="input-submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="wrapper">
                        <div class="col-12">
                            <p>
                            <p>If you meet our requirements and investment focus
                                and are interested in presenting to Edible Ventures, please
                                <a href="mailto:pitch@edibleventuresgroup.com">email us</a>
                                an investment oriented pitch deck. Preference is given to plans that
                                are submitted through a member or trusted third party of Edible Ventures.</p>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>

<?php
get_footer();
