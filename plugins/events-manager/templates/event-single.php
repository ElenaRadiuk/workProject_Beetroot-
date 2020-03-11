<?php
/*
 * Remember that this file is only used if you have chosen to override event pages with formats in your event settings!
 * You can also override the single event page completely in any case (e.g. at a level where you can control sidebars etc.), as described here - http://codex.wordpress.org/Post_Types#Template_Files
 * Your file would be named single-event.php
 */
/*
 * This page displays a single event, called during the the_content filter if this is an event page.
 * You can override the default display settings pages by copying this file to yourthemefolder/1plugins/events-manager/templates/ and modifying it however you need.
 * You can display events however you wish, there are a few variables made available to you:
 *
 * $args - the args passed onto EM_Events::output()
 */
global $EM_Event;
/* @var $EM_Event EM_Event */

echo 'nndfsndfjnfjkandfjandfjndsj njn111111111111111';
echo '<div>';
echo $EM_Event->output_single();
echo '</div>';
?>
<div class="benefit-list">
  <?php
  $posts = get_field('prod');

  if( $posts ): ?>
    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
      <?php setup_postdata($post); ?>
      <div class="benefit-item">
        fksdjfsjdflksj fjksdkjfskdjf kjksjf8789789787897874501022

<!--        --><?php //echo do_action( 'woocommerce_single_product_summary' ); ?>
        <?php var_dump( $post); ?>
<!--        --><?php //echo do_shortcode('[product id="\$post\"]'); ?>

<!--        --><?php //the_post_thumbnail(); ?>
        <h3><?php the_title(); ?></h3>
<!--        <p>--><?php //the_content(); ?><!--</p>-->
      </div>
    <?php endforeach; ?>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
  <?php endif; ?>
</div>
