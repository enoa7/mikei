<?php
/**
 * The template for displaying About Us page.
 * @package mikei
 */


get_header(); ?>

	<div id="primary" class="content-area aboutus">
		<main id="main" class="site-main" role="main">
			<div class="banner main-banner">
				<?php the_post_thumbnail('mainBanner_lg', array('class' => 'img-responsive fullwidth')); ?>
			</div>
			<div class="content-container clearfix">
				<div class="user-menu col-xs-12 col-sm-3">
					<?php
						$aboutus = new ArticlePost('post-thumb', '3');
						$aboutus->getData();
					?>
				</div>	
				<div class="user-content col-xs-12 col-sm-9">
					<?php
						$aboutus = new ArticlePost('post', '3');
						$aboutus->getData();
					?>
				</div>
			</div>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();

?>