<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">
		<div class="row">
			<div class="col-md-3">
				<div class="learn-more">
					<?php dynamic_sidebar( 'learn-more' ); ?>
				</div>
			</div>

			<div class="col-md-3">
				<div class="legal">
					<?php dynamic_sidebar( 'legal' ); ?>
				</div>
			</div>

			<div class="col-md-3">
				<div class="locations">
					<?php dynamic_sidebar( 'location' ); ?>
				</div>
			</div>

			<div class="col-md-3">
				<?php dynamic_sidebar( 'follow-us' ); ?>
			</div>

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

<div class="footer-bottom-area">
	<div class="<?php echo esc_attr( $container ); ?>">
		<div class="row">
			<div class="col-md-3">
				<div class="footer-b-menu">
					<ul class="footer-social">
						<li><a href="">Terms of Use</a></li>
						<li><a href="">Privacy Policy</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<div class="copyright">
					<p>Copyright © 2019 Study Squre, California, USA.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="support-mail">
					<a href="mailto:support@studysqure.net">support@studysqure.net</a>
				</div>
			</div>
			<div class="col-md-3">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/site-logo.png" alt="" />
			</div>
		</div>
	</div>
</div>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
