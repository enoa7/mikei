<?php

/**
 * Masthead for desktop
 */



?>

<header id="masthead" class="site-header" role="banner">
	<div class="site-store-locator">
		Store Locator
	</div>
	<div class="fixed-header js_fixedcontent">
		<div class="site-branding">
			<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
		</div>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav>
	</div>
</header><!-- #masthead -->