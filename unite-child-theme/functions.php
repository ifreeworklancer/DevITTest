<?php 
/**
 * Implement the Custom Header feature.
 */

require get_template_directory () . '/../unite-child-theme/custom-types.php';


function last_five_post( $atts ) {
	$custom_query = new WP_Query(array('post_type'=>'film','posts_per_page'=>5));
		$result = '';
		if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post();
				
				$result .= '<div class="last_block">'. '<h2>'. '<a href="'. get_permalink().  '" '. 'class="title_last-block">'. get_the_title(). '</a>'. '</h2>';
				$result .= get_the_excerpt(). '<br>'. '<br>'. '</div>';
				
				endwhile; endif;

				return $result;
}

add_shortcode( 'last_five', 'last_five_post' );
