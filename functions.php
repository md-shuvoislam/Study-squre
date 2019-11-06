<?php 
	 add_action( 'wp_enqueue_scripts', 'study_squre_enqueue_styles' );
		 function study_squre_enqueue_styles() {
	 		  wp_enqueue_style( 'parent-style', get_stylesheet_directory_uri() . '/style.css' ); 
	 		  wp_enqueue_style( 'futura-bold', get_stylesheet_directory_uri() . '/css/futura-bold.css' ); 
	 		  wp_enqueue_style( 'magnific-css', get_stylesheet_directory_uri() . '/css/magnific-popup.css' ); 
	 		  wp_enqueue_style( 'website-fonts', ('https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,600i,700,700i,800,800i,900,900i|Quicksand:400,500,600,700&display=swap') );

	 		  wp_enqueue_script( 'jquery');

	 		  wp_enqueue_script( 'active', get_stylesheet_directory_uri() . '/js/active.js', array('jquery'), '1.0.0', true );
	 		  wp_enqueue_script( 'magnific-js', get_stylesheet_directory_uri() . '/js/jquery.magnific-popup.js', array('jquery'), '1.0.0', true );

 	}

add_action( 'widgets_init', 'understrap_widgets_init' );

if ( ! function_exists( 'understrap_widgets_init' ) ) {
	/**
	 * Initializes themes widgets.
	 */
	function understrap_widgets_init() {
		register_sidebar(
			array(
				'name'          => __( 'Learn More', 'understrap' ),
				'id'            => 'learn-more',
				'description'   => __( 'Learn More sidebar widget area', 'understrap' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'name'          => __( 'Legal', 'understrap' ),
				'id'            => 'legal',
				'description'   => __( 'Legal sidebar widget area', 'understrap' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'name'          => __( 'Locations', 'understrap' ),
				'id'            => 'location',
				'description'   => __( 'Locations sidebar widget area', 'understrap' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'name'          => __( 'Follow Us', 'understrap' ),
				'id'            => 'follow-us',
				'description'   => __( 'Follow Us sidebar widget area', 'understrap' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		
		
		

	}
} // endif function_exists( 'understrap_widgets_init' ).

/**
 * TGM Activation
 */
require dirname( __FILE__ ) . '/inc/tgm/tgm-init.php';