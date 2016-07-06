<?php
/**
 * The template for displaying Contact Us page.
 * @package mikei
 */


get_header(); ?>

	<div id="primary" class="content-area aboutus">
		<main id="main" class="site-main" role="main">
			<div class="gmap">

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1982.8811360864254!2d106.79040765812255!3d-6.294940998861003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1ddd5a40f21%3A0x8f1b93bd174d2445!2sJl.+Taman+Cilandak+3+Blok+E+No.6%2C+Cilandak+Bar.%2C+Cilandak%2C+Kota+Jakarta+Selatan%2C+Daerah+Khusus+Ibukota+Jakarta!5e0!3m2!1sen!2sid!4v1467624601565" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

			</div>
			<div class="contact-form">
				<h1><?php the_title(); ?></h1>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile;endif; ?>
			</div>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();

?>