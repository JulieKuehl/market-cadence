<?php //get_header(); ?>

<!-- begin copy of header.php -->

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="<?php bloginfo( 'template_directory' ); ?>/images/favicon.ico">

		<title>
			<?php wp_title( '|', true, 'right' ); ?>
			<?php bloginfo( 'name' ); ?>
		</title>

		<?php wp_head(); ?>

	</head>

<body <?php body_class(); ?> >

<a href="#skip" class="offscreen">Skip Content</a>

<!-- HEADER IMAGE -->
<?php global $post; ?>
<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false ); ?>
<div class="page-header-image" style="background: #bdd4de url(<?php echo $src[0]; ?> ) no-repeat center center !important;">

	<!-- ADD JUMBOTRON FOR DISPLAY ON FRONT PAGE -->
	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron">
		<div class="container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div><!-- .container -->
	</div><!-- .jumbotron -->


	<!--- NAV BAR --->
	<nav class="navbar navbar-inverse navbar-fixed-top" id="floating-navbar" role="navigation">
		<div class="container">
			<div class="color-bar">
				<div class="navbar-header">

					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" title="Market Cadence" class="site-logo" rel="home" /></a>
				</div><!-- .navbar-header -->

				<div class="navbar-group">

					<div class="social-icons-box">
						<?php if ( dynamic_sidebar( 'social-icons-box' ) ); ?>
					</div><!-- .social-icons-box -->

					<button class="btn btn-default" id="menu-button" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
						<span class="sr-only">Toggle navigation</span>
						<div class="menu-bar-button">
							MENU <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu.png" title="Menu icon" />
						</div><!-- .menu-bar-button -->
					</button>

				</div><!-- .navbar-group -->

			</div><!-- .color-bar -->

		</div><!-- .container -->

		<div class="container" id="well-menu">
			<div class="collapse" id="collapseExample">
				<div class="well">

					<div id="dropped-navbar" class="navbar-collapse collapse">

						<?php
						$args = array(
							'menu'          => 'header-menu',
							'menu_class'    => 'nav navbar-nav',
							'container'     => 'false',
						);
						wp_nav_menu( $args );
						?>

					</div><!-- .navbar-collapse #dropped-navbar -->

				</div><!-- .well -->
			</div><!-- .collapse -->
		</div><!-- .navbar-group -->
</div><!-- .container #well-menu -->
</nav>

</div><!-- .page-header-image -->


<div id="content">
	<a name="skip"></a>
</div><!-- #content -->

<!-- end copy of header.php -->


</div><!-- .front-page-header-image -->

</div><!-- .page-header-image -->

<div class="container">
	<div class="col-md-12 home-headline">
		<?php if ( dynamic_sidebar( 'home-headline' ) ); ?>
	</div><!-- .home-headline -->
	<div class="row"><!-- Row of columns -->
		<div class="home-col">
			<?php if ( dynamic_sidebar( 'home-col-1' ) ); ?>
		</div><!-- .home-col /1-->
		<div class="home-col">
			<?php if ( dynamic_sidebar( 'home-col-2' ) ); ?>
		</div><!-- .home-col /2 -->
		<div class="home-col">
			<?php if ( dynamic_sidebar( 'home-col-3' ) ); ?>
		</div><!-- .home-col /3 -->
		<div class="home-col">
			<?php if ( dynamic_sidebar( 'home-col-4' ) ); ?>
		</div><!-- .home-col /4 -->
		<div class="home-col">
			<?php if ( dynamic_sidebar( 'home-col-5' ) ); ?>
		</div><!-- .home-col /5 -->
	</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>