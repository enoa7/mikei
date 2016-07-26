<?php

/**
 * Masthead for mobile
 */

?>

<header id="masthead" class="site-header" role="banner">
	<div class="site-masthead-container">
		<div class="site-barmenu"><i class="trigger fa fa-bars fa-2x">&nbsp;</i></div>
	</div>
	<nav id="site-navigation" class="main-navigation" role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
	</nav>
</header><!-- #masthead -->