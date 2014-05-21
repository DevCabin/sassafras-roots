
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php
	$options = get_option('my_theme_options'); 
    wp_head(); 
  ?>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

  <style>
	#logo{
	position: relative;
	top: <?php echo get_option( 'my_theme_options[c_top]', $options["c_top"] ); ?>px;
	left: <?php echo get_option( 'my_theme_options[c_left]', $options["c_left"] ); ?>px;
	}
  </style>

<link rel="icon" type="image/png" href="<?php echo get_option( 'my_theme_options[favicon_url]', $options["favicon_url"] ); ?>">

<?php // make cool modern stuff compatible with old crappy browsers ?>
 <script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/assets/js/css3-media-queries.js"></script>
 <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
 <!--[if lt IE 9]>
   <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
   <script type='text/javascript' src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
 <![endif]-->

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
</head>
