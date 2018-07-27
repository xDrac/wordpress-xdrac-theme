<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>

    <div class="container">

    <!--site-header-->
    <header class="site-header">
      <div class="logo">
        <h1><?php bloginfo('name'); ?></h1>
      </div>
      <div class="menu-navigation">
        <nav class="site-nav">
          <?php
            $args = array(
                'theme_location' => 'primary'
            );
          ?>
          <?php wp_nav_menu(  $args ); ?>
        </nav>
      </div>
    </header>
    <!-- /site-header -->
