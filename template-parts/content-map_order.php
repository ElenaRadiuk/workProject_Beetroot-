
<div class="map-order__wrapper">

  <div class="map-and-address_wrapper">
    <div class="map-and-address">
      <div class="map_wrapper">
        <?php if( get_field('c_map')) { ?>
          <div><?php the_field('c_map'); ?></div>
        <?php } ?>
      </div>

      <div class="contacts_wrapper">
        <div class="contacts_item contacts_phone-email">
            <div class="contacts_phone">
              <?php if( get_field('c_phone')) { ?>
                <div><?php the_field('c_phone'); ?></div>
              <?php } ?>
            </div>
            <div class="contacts_email">
              <?php if( get_field('c_e-mail')) { ?>
                <div><?php the_field('c_e-mail'); ?></div>
              <?php } ?>
            </div>
        </div>
        <div class="contacts_item contacts_address__main">
          <?php if( get_field('c_address1')) { ?>
            <div><?php the_field('c_address1'); ?></div>
          <?php } ?>
        </div>
        <div class="contacts_item contacts_address__details">
          <?php if( get_field('c_address_details')) { ?>
            <div><?php the_field('c_address_details'); ?></div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>

  <div class="contacts_order">
    <?php if( get_field('cf_order_the_game')) {
      $cf_order_the_game = get_field('cf_order_the_game');?>
      <div><?php echo do_shortcode($cf_order_the_game) ?></div>
    <?php } ?>
  </div>
</div>
