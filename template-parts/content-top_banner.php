<div class="top-banner__wrapper">
  <?php if( get_field('main_image')) { ?>



    <div class="top-banner_img__wrapper">
      <?php $image = get_field('main_image');
      $url = $image['url'];?>

      <div class="top-banner_img">
      <img src="<?php echo $url; ?>" alt="galaxy main image">
      <span class="overlayed"></span>
      </div>
      <div class="top-banner_img__wrapper">

      <div class="top-banner_additional-info__wrapper">
        <div class="top-banner_text__wrapper">
          <div class="top-banner__main-text">
            <?php if( get_field('main_banner_text')) { ?>
              <h1><?php the_field('main_banner_text'); ?></h1>
            <?php } ?>
          </div>
          <div class="top-banner__sub-text">
            <?php if( get_field('sub_main_bannertext')) { ?>
              <div><?php the_field('sub_main_bannertext'); ?></div>
            <?php } ?>
          </div>
        </div>

        <div class="top-banner_social-info">
            <div class="top-banner_social-info__youtube">
              <span class="top-banner__youtube-text">
                 <?php if( get_field('text_link_full_version')) { ?>
                   <?php the_field('text_link_full_version'); ?>
                 <?php } ?>
              </span>
              <span class="top-banner__youtube-link">
                 <?php if( get_field('link_full_version')) { ?>
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/youtube.svg" alt="youtube"/>
                 <?php } ?>

              </span>
            </div>

          <div class="top-banner_social-info__socialnetwork">
            <?php if( get_field('link_facebook')) { ?>
              <a href="<?php the_field('link_facebook'); ?>" target="_blank">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/iconFacebook.svg" alt="facebook logo"/>
              </a>
            <?php } ?>
            <?php if( get_field('link_instagram')) { ?>
            <a href="<?php the_field('link_instagram'); ?>" target="_blank">
              <img src="<?php bloginfo('template_url'); ?>/assets/images/iconInstagram.svg" alt="insta logo"/>
            </a>
            <?php } ?>
          </div>
        </div>
      </div>

    </div>
  <?php } ?>
</div>
