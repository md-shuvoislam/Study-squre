<?php
    /**
     * Template Name: contact
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
                    <h1>Contact</h1>
                    <h2>us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                    <ul class="contact-social">
                        <li><a href="" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="" target="_blank" rel="noopener noreferrer"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="" target="_blank" rel="noopener noreferrer"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="" target="_blank" rel="noopener noreferrer"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="" target="_blank" rel="noopener noreferrer"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="team-join-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="section-title">
                    <h3>what will be the</h3>
                    <h2>next step?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                </div>
                <div class="row singel-list-contact">
                    <div class="col-md-2 contact-number">
                        <p>1</p>
                    </div>
                    <div class="col-md-10 contact-item-text">
                        <h3>Lorem ipsum dolor sit</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                    </div>
                </div>
                <div class="row singel-list-contact">
                    <div class="col-md-2 contact-number">
                        <p>2</p>
                    </div>
                    <div class="col-md-10 contact-item-text">
                        <h3>Lorem ipsum dolor sit</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                    </div>
                </div>
                <div class="row singel-list-contact">
                    <div class="col-md-2 contact-number">
                        <p>3</p>
                    </div>
                    <div class="col-md-10 contact-item-text">
                        <h3>Lorem ipsum dolor sit</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-form">
                    <?php echo do_shortcode('[contact-form-7 id="40" title="Contact form 1"]'); ?>
                </div>
            </div>
        </div>
        
    </div>
</div>
<?php get_footer(); ?>