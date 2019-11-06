<?php
/**
 * Template Name: Home
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
			<div class="col-md-3">
				<div class="left-text">
					<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
					<p>labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
					a
				</div>
			</div>
			<div class="col-md-6">
				<div class="center-text">
					<h1>adventure</h1>
					<h2>was the best way to</h2>
					<strong>learn</strong>
					<a class="site-btn btn" href="">enquire<i class="fa fa-chevron-right"></i></a>
					<div class="scroll-icon"><a href="#hoem"><i class="fa fa-angle-double-down"></i></a></div>
				</div>
			</div>
			<div class="col-md-3">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner-child-image.png" alt="" />
			</div>
		</div>
	</div>
</div>

<div class="visitor-area" id="hoem">
	<div class="container">
	    <div class="row">
	        <div class="col-md-6">
	        	<div class="welcome-text">
	        		<div class="section-title">
	        			<h2>Welcome</h2>
	        		</div>
	        		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	        		<a class="site-btn btn" href="">Know more</a>
	        	</div>
	            <h3 class="progressbar-title">HTML</h3>
	            <div class="progress">
	                <div class="progress-bar" style="width: 65%; background: #ed687c;">
	                    <span class="progress-icon fa fa-check" style="border-color:#ed687c; color:#ed687c;">sss</span>
	                    <div class="progress-value">65%</div>
	                </div>
	            </div>
	 
	            <h3 class="progressbar-title">CSS3</h3>
	            <div class="progress">
	                <div class="progress-bar" style="width: 50%; background: #92c26a;">
	                    <span class="progress-icon fa fa-check" style="border-color:#92c26a; color:#92c26a;"></span>
	                    <div class="progress-value">50%</div>
	                </div>
	            </div>
	        </div>
	        <div class="col-md-6">
	        	<div class="knob">
	        		<p>Visitors</p>
	        		<strong>89</strong>
	        		<p>percent</p>
	        	</div>
	        </div>
	    </div>
	</div>
</div>



<div class="testimonial-area">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="video-one">
					<a class="popup-youtube-left" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Home Image/video-left.png" alt="" /></a>
				</div>
				<div class="video-two">
					<a class="popup-youtube-right" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Home Image/video-right.png" alt="" /></a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="section-title">
					<p>video</p>
	        		<h2>testimonials</h2>
	        	</div>
	        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
	        	<a class="site-btn btn" href="">See more</a>
			</div>
		</div>
	</div>
</div>


<div class="countries-area">
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<div class="section-title">
					<p>Major</p>
	        		<h2>Countries</h2>
	        	</div>
	        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
			</div>
		</div>
		<div class="row text-center contries">
			<div class="col-md-4">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Home Image/australia.png" alt="" />
				<a class="site-btn btn" href="">australia</a>
			</div>
			<div class="col-md-4">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Home Image/newzeland.png" alt="" />
				<a class="site-btn btn" href="">newzeland</a>
			</div>
			<div class="col-md-4">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Home Image/canada.png" alt="" />
				<a class="site-btn btn" href="">canada</a>
			</div>
		</div>
	</div>
</div>





<?php get_footer(); ?>
