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
			<div class="content-container clearfix">
			</div>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();

?>