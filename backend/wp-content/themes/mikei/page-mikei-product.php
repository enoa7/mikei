<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mikei
 */

get_header(); ?>

<article id="<?php strtolower(the_slug()); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_post_thumbnail('mainBanner_lg', array('class' => 'img-responsive fullwidth')); ?>
	</header><!-- .entry-header -->
	<div class="content-container clearfix">
		<div class="user-menu col-xs-12 col-sm-3">
			<?php echo get_childpages(); ?>
		</div>	
		<div class="user-content col-xs-12 col-sm-9">
			<?php get_products(); ?>
		</div>
	</div>
</article><!-- #post-## -->

<?php
// get_sidebar();
get_footer();

?>
