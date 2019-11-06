<?php
    /**
     * Template Name: career
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
            <div class="col-md-6">
                <div class="left-text">
                    <h1>career</h1>
                    <h2>with us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
                </div>
            </div>
            <div class="col-md-6">
            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Career/Image-02.png" alt="" />
            </div>
        </div>
    </div>
</div>
<div class="team-join-area">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h3>Want to</h3>
                <h2>join our Team?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            </div>
        </div>
        <div class="row singel-list-team">
            <div class="col-md-8">
                <div class="row how-franchis-lists">
                    <div class="col-md-2 number">
                        <p>1</p>
                    </div>
                    <div class="col-md-10 how-item-text">
                        <h3>Immigration Counsellor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <a class="site-btn btn" href="">view details</a>
            </div>
        </div>
        <div class="row singel-list-team">
            <div class="col-md-8">
                <div class="row how-franchis-lists">
                    <div class="col-md-2 number">
                        <p>2</p>
                    </div>
                    <div class="col-md-10 how-item-text">
                        <h3>Study Visa Filing Executive</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <a class="site-btn btn" href="">view details</a>
            </div>
        </div>
        <div class="row singel-list-team">
            <div class="col-md-8">
                <div class="row how-franchis-lists">
                    <div class="col-md-2 number">
                        <p>3</p>
                    </div>
                    <div class="col-md-10 how-item-text">
                        <h3>MIS Executive</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <a class="site-btn btn" href="">view details</a>
            </div>
        </div>
        
    </div>
</div>
<?php get_footer(); ?>