<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package YJLC Template
 */
?><!DOCTYPE html>
<!--[if lt IE 9]><html class="lte-ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 8]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic' rel='stylesheet' type='text/css'>

  <!--[if gt IE 8]>
  <!--><link href="<?php echo get_template_directory_uri(); ?>/style.css" media="screen" rel="stylesheet" type="text/css" /><!--<![endif]-->
  <!--[if lte IE 8]>
  <link href="<?php echo get_template_directory_uri(); ?>/ie.css" media="screen" rel="stylesheet" type="text/css" />
  <![endif]-->

  <link href="<?php echo get_template_directory_uri(); ?>/print.css" media="print" rel="stylesheet" type="text/css" />

  <!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/javscripts/html5.js"></script>
  <![endif] -->

  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-58325836-1', 'auto');
    ga('send', 'pageview');

  </script>
</head>

<body <?php body_class(); ?>>
  <script type="text/javascript">document.body.className = ((document.body.className) ? document.body.className + ' js-enabled' : 'js-enabled');</script>

  <div id="skiplink-container">
    <div>
      <a href="#content" class="skiplink">Skip to main content</a>
    </div>
  </div>

  <div id="global-cookie-message">
    <p>YJLC uses cookies to make the site simpler. <a href="<?php echo esc_url( home_url( '/' ) ); ?>cookies">Find out more about cookies</a></p>
  </div>

  <header role="banner" id="global-header">
    <div class="header-wrapper">
      <div class="header-global">
        <div class="header-logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php echo get_template_directory_uri(); ?>/images/yjlc-logo-white-2x.png" alt="YJLC logo">
            <span class="visuallyhidden">Youth Justice Legal Centre</span>
          </a>
        </div>

        <?php
          wp_nav_menu( array(
            'theme_location' => 'main_menu',
            'menu_class' => 'main-menu' )
           );
        ?>

      </div>
    </div>
  </header>

  <div id="feedback">
    <p>This is a new website. Your <a href="<?php echo esc_url( home_url( '/' ) ); ?>feedback">feedback</a> will help us to improve it.</p>
  </div>

  <div id="wrapper">
    <main id="content">
