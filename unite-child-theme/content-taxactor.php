<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package unite
 */
?>
<div class="item">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div><?php the_excerpt(); ?></div>
</div>