<?php
/**
 * The Template for displaying all single posts.
 *
 * @package unite
 */
get_header(); ?>

	<div id="primary" class="content-area col-sm-12 col-md-8 <?php echo of_get_option( 'site_layout' ); ?>">
		<main id="main" class="site-main" role="main">

		<?php
            while( have_posts() ) : the_post();
                get_template_part( 'content', 'film' );
            endwhile;
        ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>