<?php

/* ------------------------------------------------------------------- *
* Theme setup.
/* ------------------------------------------------------------------- */
add_action('after_setup_theme', 'patronus_setup');

if (!function_exists('patronus_setup')) {

  function patronus_setup()
  {


    add_theme_support("title-tag");
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');

    // Custom menu areas
    register_nav_menus(array(
      'header' => esc_html__('Header Navigation', 'patronus')
    ));

    // Load theme languages
    load_theme_textdomain('patronus', get_template_directory() . '/languages');

    // TODO aggiungo thumb specifiche
    // if (function_exists('add_image_size')) {
    //   add_image_size('1920x1080', 1920, 1080, true);
    // }

    //! WOOCOMMERCE
    // add_theme_support('woocommerce');
    // add_theme_support('wc-product-gallery-zoom');
    // add_theme_support('wc-product-gallery-lightbox');
    // add_theme_support('wc-product-gallery-slider');
  }
}