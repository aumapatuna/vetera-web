<?php
/**
 * The header for vetera theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="page">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vetera-theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <!-- DNS prefetch -->
  <link rel="dns-prefetch" href="https://www.vetera.net/">
  <link rel="preconnect" href="https://www.vetera.net/">

  <title>Vetera</title>

  <!-- Site Icons -->
  <?php 
    $favicon = get_field('favicon', 'option');
    $favicon_32x32 = get_field('favicon_32x32', 'option');
    $favicon_16x16 = get_field('favicon_16x16', 'option');
    $apple_touch_icon = get_field('apple_touch_icon', 'option');
  ?>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon; ?>">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $favicon_32x32; ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $favicon_16x16; ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $apple_touch_icon; ?>">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/safari-pinned-tab.svg" color="#021E98">
  <meta name="msapplication-TileColor" content="#021E98">
  <meta name="theme-color" content="#021E98">
  
  <?php 
    wp_head();
  ?>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-197950299-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-197950299-1');
</script>
</head>

<?php
  $header_logo = get_field('header_logo', 'option');
  $header_talk_expert_button_text = get_field('header_talk_expert_button_text', 'option');
  $header_talk_expert_button_url = get_field('header_talk_expert_button_url', 'option');
  $header_request_demo_button_text = get_field('header_request_demo_button_text', 'option');
  $header_request_demo_button_url = get_field('header_request_demo_button_url', 'option');
?>

<!-- Header -->
<body <?php body_class(); ?>>
  <header class="vetera-header">
    <div class="container">
      <div class="vetera-header__wrapper">
        <div class="vetera-header__branding">
          <a href="<?php echo bloginfo('url'); ?>">
            <?php 
              if(!empty($header_logo)) : 
            ?>
              <img src="<?php echo $header_logo; ?>" height="32" width="157" alt="Vetera logo" class="vetera-header__branding-img" />
            <?php endif; ?>
          </a>
        </div>
        <div class="vetera-header__mobile-menu-icon">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div> 
        </div>
        <div class="vetera-header__nav">
          <nav>
            <ul class="vetera-header__nav__list">
              <?php if(dynamic_sidebar('wp_nav_menu_objects')) : else : endif; ?>
            </ul>
          </nav>

          <div class="vetera-header__nav__language-switcher">
            <div>
              <?php if(dynamic_sidebar('language_switcher')) : else : endif; ?>
            </div>
            <div class="lang-wrp">
              <ul class="lang-list"></ul>
            </div>
          </div>

          <div class="vetera-header__nav__action-buttons">

            <?php 
              if($header_talk_expert_button_url) :
            ?>
              <a href="<?php echo $header_talk_expert_button_url; ?>" class="btn btn--inverse"><?php echo $header_talk_expert_button_text; ?></a>
            <?php endif; ?>
            <?php 
              if($header_request_demo_button_url) :
            ?>
              <a href="<?php echo $header_request_demo_button_url; ?>" class="btn btn"><?php echo $header_request_demo_button_text; ?></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </header><!-- ./Header -->

<!-- vetera site wrapper -->
<div id="page" class="vetera-wrapper"> 