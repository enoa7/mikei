<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mikei
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<hr>
		<div class="site-info clearfix">
			<div class="pull-left no-spacepad-side">
				<?php dynamic_sidebar( 'footer' ); ?>	
			</div>
			<div class="pull-right no-spacepad-side">
				<i class="fa fa-copyright"></i>
				<span>Copyright Mikei 2016</span>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
