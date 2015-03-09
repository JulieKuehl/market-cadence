<?php get_header(); ?>

<div id="primary-content" class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_post_thumbnail( 'full' ); ?>

	<div class="row">
		<div class="col-md-9 col-md-push-3">

<!--			--><?php //if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="page-header">
<!--					--><?php //the_post_thumbnail( 'full' ); ?>
					<h1><?php the_title(); ?></h1>
				</div><!-- .page-header -->

				<?php the_content(); ?>

			<?php endwhile; else: ?>
				<div class="page-header">
					<h1>Oh no!</h1>
				</div><!-- .page-header -->

				<p>No content is appearing for this page!</p>

			<?php endif; ?>
		</div><!-- .col-md-9 -->

		<?php get_sidebar(); ?>

	</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>