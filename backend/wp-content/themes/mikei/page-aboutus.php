<?php
/**
 * The template for displaying front page.
 * @package mikei
 */


get_header(); ?>

	<div id="primary" class="content-area frontpage">
		<main id="main" class="site-main" role="main">
			<div class="banner main-banner">
				<?php the_post_thumbnail('mainBanner_lg', array('class' => 'img-responsive fullwidth')); ?>
			</div>
			<div class="user-content">
				
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();

?>