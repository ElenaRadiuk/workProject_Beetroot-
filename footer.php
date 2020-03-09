
<div id="splash-container">
  <div class="popup">
      <span class="popuptext" id="myPopup">
        <div class="close_pop-up">x</div>
        <?php the_field('youtube_link'); ?>
      </span>
  </div>
</div>

	<footer class="page-footer" role="contentinfo">
    <div class="page-footer_wrapper">


      <section class="page-footer_main-menu">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
          <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.svg" alt="galaxy logo"/>
        </a>

        <nav class="main-nav" role="navigation">
          <?php wp_nav_menu( array( 'theme_location' => 'footer_navigation', 'menu_class' => 'main-nav__list', 'container' => false ) ); ?>
        </nav>
        <nav class="main-nav_social">
          <?php wp_nav_menu( array( 'theme_location' => 'footer_navigation_social', 'menu_class' => 'main-nav__list', 'container' => false ) ); ?>
        </nav>
      </section>


      <section class="page-footer_sub-menu">
        <nav class="main-nav" role="navigation">
          <?php wp_nav_menu( array( 'theme_location' => 'footer_navigation2', 'menu_class' => 'main-nav__list', 'container' => false ) ); ?>
        </nav>
        <div class="page-footer__inner">
          <p class="copyright">&copy; <?php echo date("Y"); ?> Galaxy</p>
        </div>
      </section>

	</div>
  </footer>

<?php wp_footer(); ?>

</body>
</html>
