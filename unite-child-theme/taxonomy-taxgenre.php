<?php
// Файл taxonomy-taxgenre.php:
get_header(); ?>

<div id="primary" class="content-area col-sm-12 col-md-8 <?php echo of_get_option( 'site_layout' ); ?>">
        <main id="main" class="site-main" role="main">
        <h1><?php single_term_title(); ?></h1>
        <?php
            $args = array( 'post_type' => 'film' );
            $query = new WP_Query( $args );
            while( $query->have_posts() ) {
                $query->the_post();
                get_template_part( 'content', 'taxgenre' );
            } wp_reset_postdata();
        ?>
    </main>
</div>

<?php get_footer(); ?>