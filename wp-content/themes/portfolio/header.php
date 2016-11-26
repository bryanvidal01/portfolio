<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/stylesheets/style.css">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
      <div class="menu">
          <div class="logo">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="" />
          </div>
          <ul class="navigation">
          <?php
          $args = array(
              'cat'      => 'post',
              'order'    => 'ASC'
            );
            query_posts( $args );
            while ( have_posts() ) : the_post(); ?>
                <li>
                    <a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                </li>
            <?php endwhile;
            wp_reset_query();
          ?>
          </ul>

          <ul class="link-footer">
              <li>
                  <a href="#">Facebook</a>
              </li>
              <li>
                  <a href="#">Dribble</a>
              </li>
          </ul>
      </div>
