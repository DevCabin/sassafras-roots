<?php 
$options = get_option('my_theme_options'); 
?>
<header class="banner container" role="banner">
  <div class="row">
    <div class="col-lg-12">
<?php if (get_option( 'my_theme_options[new_logo]', $options["new_logo"] ) !="") { ?> 
      <a title="<?php bloginfo('name'); ?>" class="brand" href="<?php echo home_url(); ?>/">
        <img id="logo-top" src="<?php echo get_option( 'my_theme_options[new_logo]', $options["new_logo"] ); ?>" alt="Logo for <?php bloginfo('name'); ?>" />
      </a>
<?php } else { ?>
      <a class="brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
<?php } ?>
      <nav class="nav-main" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>