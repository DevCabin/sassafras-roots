<?php 
$options = get_option('my_theme_options'); 
?>
<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

<?php if (get_option( 'my_theme_options[new_logo]', $options["new_logo"] ) !="") { ?> 
      <a title="<?php bloginfo('name'); ?>" class="brand" href="<?php echo home_url(); ?>/">
        <img id="logo-top" src="<?php echo get_option( 'my_theme_options[new_logo]', $options["new_logo"] ); ?>" alt="Logo for <?php bloginfo('name'); ?>" />
      </a>
<?php } else { ?>
      <a class="brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
<?php } ?>

    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>
