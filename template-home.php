<?php
/*
 * Template Name: Home Template
 */
?>

<?php get_header(); ?>
	<main id="main" class="page-main" role="main">

    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <section class="top-banner">
            <?php get_template_part( 'template-parts/content', 'top_banner' ); ?>
        </section>
        <section class="offer">
          <?php get_template_part( 'template-parts/content', 'offer' ); ?>
        </section>

        <section class="map-and-order">
          <?php get_template_part( 'template-parts/content', 'map_order' ); ?>
        </section>


      <?php endwhile; ?>
    <?php endif; ?>

	</main>

<?php get_footer(); ?>
