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
				<section class="list col-xs-12 col-sm-8 content-container ">
					<?php get_article(); ?>
				</section>
				<aside class="extra col-xs-12 col-sm-3"></aside>
			</div>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();

?>