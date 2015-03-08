<div class="cta-box">
	<div class="container">
		<?php dynamic_sidebar( 'home-cta-box' ); ?>
	</div><!-- .container -->
</div><!-- .cta-box -->

<div class="fat-footer">
	<div class="container">
		<div class="row"><!-- Fat footer row -->
			<div class="home-col fat-footer-col">
				<?php if ( dynamic_sidebar( 'fat-footer-col-1' ) ); ?>
			</div><!-- .home-col -->
			<div class="home-col fat-footer-col">
				<?php if ( dynamic_sidebar( 'fat-footer-col-2' ) ); ?>
			</div><!-- .home-col -->
			<div class="home-col fat-footer-col">
				<?php if ( dynamic_sidebar( 'fat-footer-col-3' ) ); ?>
			</div><!-- .home-col -->
			<div class="home-col fat-footer-col">
				<?php if ( dynamic_sidebar( 'fat-footer-col-4' ) ); ?>
			</div><!-- .home-col -->
			<div class="home-col fat-footer-col">
				<?php if ( dynamic_sidebar( 'fat-footer-col-5' ) ); ?>
			</div><!-- .home-col -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .fat-footer -->

<div class="container">
	<footer>
		<p>Copyright <?php echo date( 'Y' ); ?>, <?php bloginfo( 'name' ); ?></p>
	</footer>
</div> <!-- .container -->

<?php wp_footer(); ?>

</body>
</html>
