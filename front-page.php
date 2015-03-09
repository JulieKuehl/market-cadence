<?php get_header(); ?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
	<div class="container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_post_thumbnail( 'full' ); ?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div><!-- .container -->
</div><!-- .jumbotron -->

<div class="clearfix"></div>

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