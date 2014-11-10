<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Oswald|Lato|Roboto:400,500,700|Open+Sans:600,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<!--Custom Css-->
<link href="<?php echo get_template_directory_uri(); ?>/css/custom.css" rel="stylesheet" type="text/css">
<!--Colors Css-->
<link href="<?php echo get_template_directory_uri(); ?>/css/colors.css" rel="stylesheet" type="text/css">
<!--Boxed Css-->
<link href="<?php echo get_template_directory_uri(); ?>/css/boxed.css" rel="stylesheet" media="screen" />
<!--Boostrap Css-->
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet" type="text/css">
<!--Boostrap-Responsice Css-->
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
<!--Calender Css-->
<link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/css/fullcalendar.css' />
<!--Awesome Fonts-->
<link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" rel="stylesheet">
<!--Banner Slider-->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" type="text/css" media="screen" />
<!--Scrollbar Css-->
<link href="<?php echo get_template_directory_uri(); ?>/css/jquery.mCustomScrollbar.css" rel="stylesheet" />
<!--Pie Chart Css-->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css" media="screen">
<!--J Carousel-->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/skin.css" />

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fancybox.css" />

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script><!-- lib Js -->

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="boxed">
  <!--Header Start-->
  <header id="header"> <!--<span class="icon-dish"></span>-->
    <div class="">
      <div class="row-fluid">
        <div class="span3">
          <div class="logo"><a href="/"><img src="<?php the_field('logo', 'option'); ?>" alt="img"></a></div>
        </div>
        <div class="span9 margin-non pull-right">
           <div class="top-container">
            <div class="span5"></div>
            <div class="span7">

            </div>
          </div>
          <div class="navbar navbar-inverse nav-bar">
            <div class="navbar-inner nav-bar-inner">
              <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <div class="nav-collapse collapse top-nav">
                    <?php

                      $defaults = array(
                        'theme_location'  => '',
                        'menu'            => '',
                        'container'       => 'div',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'menu',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => ''
                      );

                      wp_nav_menu( $defaults );

                      ?>
              </div>
              <!--/.nav-collapse -->
            </div>
            <!-- /.navbar-inner -->
          </div>
          <!--Nav End-->
        </div>
      </div>
    </div>
  </header>
  <!--Header End-->