<?php
/**
 * @package unite
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="col-lg-12">

		<h2><?php the_title(); ?></h2>
		<div class="my-content_post"><?php the_content(); ?></div>



			<div class="col-lg-6 col-sm-12">

				<?php
				$taxes = get_the_taxonomies();
				if( $taxes )
					echo '<ul class="tax-list"><li>'. implode("</li>\n\t<li>", $taxes ) ."</li>\n</ul>"; ?>

			</div>

			<div class="col-lg-6 col-sm-12">

				<?php the_meta(); ?>

			</div>

	</div><!-- /col-lg-12 -->


</article><!-- #post-## -->

