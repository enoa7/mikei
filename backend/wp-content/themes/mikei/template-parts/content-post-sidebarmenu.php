<?php 
/**
 * Content Post Sidebar Menu
 * This is a template to display the sidebar menu on each page (child menu of a page)
 */

?>

<div class="section-content content-post-childmenu" data-content="<?php strtolower(the_slug()) ?>">
	<a class="section-title"><?php the_title(); ?></a>
</div>