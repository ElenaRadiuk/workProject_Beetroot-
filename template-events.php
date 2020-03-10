<?php
/*
 * Template Name: Events
 */
?>

<?php get_header(); ?>
	<main id="main" class="page-main" role="main">

    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

        sdasdas


      <?php endwhile; ?>
    <?php endif; ?>

	</main>

<?php get_footer(); ?>
