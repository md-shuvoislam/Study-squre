<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="page-banner-hero" style="background-image: url();">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="left-text">
                    <h1>Immigration</h1>
                    <h2>News</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">
			<div class="col-md-12 text-center">
				<div class="section-title">
                    <h3>Featured</h3>
                    <h2>News</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
			</div>
		</div>

		<div class="row">

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>


					<?php while ( have_posts() ) : the_post(); ?>
						<div class="col-md-4">
							<?php

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'loop-templates/content', get_post_format() );
							?>
						</div>
					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>
		</div><!-- .row -->

		<!-- The pagination component -->
		<?php understrap_pagination(); ?>

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php get_footer(); ?>
