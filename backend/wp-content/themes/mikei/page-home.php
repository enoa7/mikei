<?php
/**
 * The template for displaying Home page.
 * @package mikei
 */


get_header(); ?>

	<div id="primary" class="content-area frontpage aboutus">
		<main id="main" class="site-main" role="main">
			<div class="banner main-banner">
				<?php  mainGallery(); ?>
			</div>
			<div class="clearfix">
				<section class="list col-xs-12 col-sm-8 no-spacepad-side content-container ">
					<?php get_article(); ?>
				</section>
				<aside class="extra col-xs-12 col-sm-3">
					<img class="img-responsive" src="<?php echo site_urL() . '/wp-content/uploads/2016/07/facebook-icon-home.jpg'?>">
				</aside>
			</div>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();

?>