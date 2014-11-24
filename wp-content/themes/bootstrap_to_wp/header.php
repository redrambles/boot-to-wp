<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">

    <title>
      <?php wp_title( '|', true, 'right' ); ?> 
      <?php bloginfo('name'); ?> 
  </title>   

    <?php wp_head(); ?> <!-- This allows for the functions.php function to be echoed out here - thereby including our css. -->
  </head>

  <body <?php body_class(); ?>> <!-- adds a class to our body tag that tells us a lot of info, such as whether someone is logged in, or if our admin bar is visible... -->

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>
        </div>
        <div class="navbar-collapse collapse">

          <?php 
            $args = array(
              'menu'        => 'header_menu',
              'menu_class'  =>  'nav navbar-nav',
              'container'   =>  'false'   
            );
            wp_nav_menu( $args );
          ?>

        </div><!--/.navbar-collapse -->
      </div>
    </div>