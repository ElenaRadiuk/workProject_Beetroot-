
<div class="offer__wrapper">

  <div class="offer_arrow">
    <img src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="youtube"/>
  </div>

  <?php $i = 1; ?>
  <?php if( have_rows("offer") ): ?>
    <?php while( have_rows('offer') ): the_row(); ?>

      <?php if( get_sub_field('offer_title')) { ?>
        <div class="offer_item">

          <?php $image_offer = get_sub_field('offer_img');
            $image_offer = $image_offer['url'];?>
            <div class="offer_item__img bg-<?php echo $i++; ?>">
              <img src="<?php echo $image_offer;?>" width="24" alt="offer for birthday">
            </div>

            <h3 class="offer_item__title"><?php the_sub_field('offer_title'); ?></h3>

            <div class="offer_item__text"><?php the_sub_field('offer_text'); ?></div>

            <div class="offer_item__link">
              <a href="<?php the_sub_field('offer_button_link'); ?>" class="btn-offer">
                <?php the_sub_field('offer_button_text'); ?>
              </a>
            </div>
        </div>
      <?php } ?>


    <?php endwhile; ?>
  <?php endif; ?>
</div>
