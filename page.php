<?php get_header(); ?>

	</div><!-- .page-header-image -->

<div id="primary-content" class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="row">
		<div class="col-md-9 col-md-push-3">

<!--				<div class="page-header">-->
<!--					<h1>--><?php //the_title(); ?><!--</h1>-->
<!--				</div><!-- .page-header -->

				<?php the_content(); ?>

			<?php endwhile; else: ?>
				<div class="page-header">
					<h1>Oh no!</h1>
				</div><!-- .page-header -->

				<p>No content is appearing for this page!</p>

			<?php endif; ?>
		</div><!-- .col-md-9 -->
		<div id="sidebar-menu" class="col-md-3 col-md-pull-9 sidebar">
			<div class=widget">
				<h3 class="widget-title"><?php the_title(); ?></h3>
			</div>
		</div>

		<?php get_sidebar(); ?>

	</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>