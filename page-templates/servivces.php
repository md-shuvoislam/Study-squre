<?php
    /**
     * Template Name: services
     *
     * Template for displaying a page just with the header and footer area and a "naked" content area in between.
     * Good for landingpages and other types of pages where you want to add a lot of custom markup.
     *
     * @package understrap
     */
    
    // Exit if accessed directly.
    defined( 'ABSPATH' ) || exit;
    
    get_header(); ?>
<div class="page-banner-hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="left-text">
                    <h1>Our</h1>
                    <h2>Services</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="student-visa">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="section-title">
                    <h2>Student <strong>visa</strong></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>
                    <a class="site-btn btn" href="">contact</a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Services/Image-03.png" alt="" />
            </div>
        </div>
    </div>
</div>

<div class="tourist-visa">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Services/Image-05.png" alt="" />
            </div>
            <div class="col-md-6">
                <div class="section-title">
                    <h2>tourist <strong>visa</strong></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>
                    <a class="site-btn btn" href="">contact</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="spouse-visa">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="section-title">
                    <h2>spouse <strong>visa</strong></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>
                    <a class="site-btn btn" href="">contact</a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Services/Image-03.png" alt="" />
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>