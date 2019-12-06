<div class="nav-wrapper">
  <nav>
    <div class="nav-logo">
      <a href="<?php echo get_home_url(); ?>">

      <!-- 
        <img src="<?php echo get_template_directory_uri(); ?>/images/svg/SVG/logo-empaxis.svg" alt=""> </a> -->

 <?php echo wp_get_attachment_image(13519, "full");  ?>


    </div>

    <?php
    $defaults = array(
      'container' => '',
      'theme_location' => 'desktop_nav',
      'menu_class' => 'desktop-nav',
      'menu_id' => 'desktop-nav'
    );
    wp_nav_menu($defaults);
    ?>

    <div class="nav-consul-btn ">
      <a href="<?php get_home_url() ?>/who-we-are/contact/">
        <span>Free Consultation</span>
      </a>
    </div>

    <div class="drop-down-btn-open" id="drop-down-btn-open">
      <?php echo wp_get_attachment_image(13290, "full");  ?>
    </div>

    <div class="drop-down-btn-close" id="drop-down-btn-close">
      <?php echo wp_get_attachment_image(13289, "full");  ?>
    </div>

  </nav>
</div>



<?php
$defaults = array(
  ///ask if you want wp to create a container
  // '' = false
  'container' => '',
  'container'       => 'div',
  'container_class' => 'mob-nav',
  'container_id'    => 'mob-nav',
  ///telling wp this is where the menu is
  'theme_location' => 'mobile_nav',
  ///gives the menu a class for your css
  'menu_class' => 'mob-nav-ul',
);

wp_nav_menu($defaults);
?>


<div class="fake-nav-height"></div>
<!-- <div id="mobile-indicator">mobile</div> -->