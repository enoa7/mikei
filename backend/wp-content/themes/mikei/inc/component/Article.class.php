<?php


class ArticlePost {

	public function __construct($template, $category) {

		$this->_template = $template;
		$this->_category = $category;

	}

	public function displayConst() {
		 echo $this->_template;
		 echo $this->_category;
	}

	public function getData() {

		$temp = $this->_template;
		$cat = $this->_category;

		$args = array (
			'cat' => $cat,
		);

		// The Query
		$query = new WP_Query( $args );

		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				get_template_part('template-parts/content', $temp);
			}
		} else {
			// no posts found
		}

		// Restore original Post Data
		wp_reset_postdata();

	}

}

?>
