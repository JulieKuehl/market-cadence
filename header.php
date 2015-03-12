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
	<div class="page-header-image" style="background: url(<?php echo $src[0]; ?> ) !important;">

		<!-- NAVIGATION BAR -->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu.png" title="Menu icon" />
		<!--				<span class="icon-bar"></span>-->
		<!--				<span class="icon-bar"></span>-->
		<!--				<span class="icon-bar"></span>-->
					</button>
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" title="Market Cadence" class="site-logo" rel="home" /></a>
				</div>

				<button class="btn btn-default" id="menu-button" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu.png" title="Menu icon" />
				</button>
				<div class="collapse" id="collapseExample">
					<div class="well">

						<div id="navbar" class="navbar-right navbar-collapse collapse">

							<?php
								$args = array(
									'menu'          => 'header-menu',
									'menu_class'    => 'nav navbar-nav',
									'container'     => 'false',
								);
								wp_nav_menu( $args );
							?>

						</div><!--/.navbar-collapse -->

					</div><!-- .well -->
				</div><!-- .collapse -->
			</div><!-- .container -->
		</nav>

<div id="content">
	<a name="skip"></a>
</div><!-- #content -->
