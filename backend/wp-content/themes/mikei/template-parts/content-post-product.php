<?php
/**
 * Template part for displaying lists of product posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mikei
 */

?>

<div class="item-list">
	<h3 class="item-title"><?php the_title(); ?></h3>
	<section class="item-img col-xs-12 col-sm-5">
		<?php the_post_thumbnail('product', array('class' => 'img-responsive')); ?>
	</section>
	<section class="item-content col-xs-12 col-sm-7">
		<h3>Product Feature</h3>
		<?php the_content(); ?>
		
	</section>
</div>