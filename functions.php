<?php

function theme_styles() {
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js() {

	global $wp_scripts;

	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false );

	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array( 'jquery', 'bootstrap_js' ), '', true );

}
add_action( 'wp_enqueue_scripts', 'theme_js' );

// add_filter( 'show_admin_bar', '__return_false' ); // removes WordPress admin bar for logged in users

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

function register_theme_menus() {

	register_nav_menus(
		array(
			'header=menu'   => __( 'Header Menu' )
		)
	);
}
add_action( 'init', 'register_theme_menus' );

function create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name'  => __( $name ),
		'id'    => $id,
		'description'   => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	));
}

create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );

function market_cadence_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Social Icons Box', 'market-cadence' ),
		'id'            => 'social-icons-box',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget social-icons-box %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Home Page Headline', 'market-cadence' ),
		'id'            => 'home-headline',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Home Page Column 1', 'market-cadence' ),
		'id'            => 'home-col-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Home Page Column 2', 'market-cadence' ),
		'id'            => 'home-col-2',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Home Page Column 3', 'market-cadence' ),
		'id'            => 'home-col-3',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Home Page Column 4', 'market-cadence' ),
		'id'            => 'home-col-4',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Home Page Column 5', 'market-cadence' ),
		'id'            => 'home-col-5',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Home Page CTA Box', 'market-cadence' ),
		'id'            => 'home-cta-box',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget cta-box %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Fat Footer Column 1', 'market-cadence' ),
		'id'            => 'fat-footer-col-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget fat-footer-col %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="fat-footer-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Fat Footer Column 2', 'market-cadence' ),
		'id'            => 'fat-footer-col-2',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget fat-footer-col %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="fat-footer-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Fat Footer Column 3', 'market-cadence' ),
		'id'            => 'fat-footer-col-3',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget fat-footer-col %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="fat-footer-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Fat Footer Column 4', 'market-cadence' ),
		'id'            => 'fat-footer-col-4',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget fat-footer-col %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="fat-footer-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Fat Footer Column 5', 'market-cadence' ),
		'id'            => 'fat-footer-col-5',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget fat-footer-col %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="fat-footer-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'market_cadence_widgets_init' );

?>