<?php

if (!function_exists('themeexoone_setup')) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which runs
   * before the init hook. The init hook is too late for some features, such as indicating
   * support post thumbnails.
   */
  function themeexoone_setup()
  {

    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain('themeexoone', get_template_directory() . '/languages');

    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support('automatic-feed-links');

    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support('post-thumbnails');

    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus(array(
      'primary'   => __('Primary Menu', 'themeexoone'),
      'secondary' => __('Secondary Menu', 'themeexoone')
    ));

    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));
  }
endif; // themeexoone_setup
add_action('after_setup_theme', 'themeexoone_setup');

/**
 * Enqueue styles and scripts
 */
function themeexoone_init_scripts_and_styles()
{
  wp_enqueue_style('app', get_template_directory_uri(). '/assets/css/app.css', false, time(), 'all');
  wp_enqueue_script('anime.min', get_template_directory_uri() . '/node_modules/animejs/lib/anime.min.js', false, false, true);
  wp_enqueue_script('all.min', get_template_directory_uri() . '/node_modules/@fortawesome/fontawesome-free/js/all.min.js' ,false, false, true);
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', ['anime.min'], time(), true);
}
add_action('wp_enqueue_scripts', 'themeexoone_init_scripts_and_styles');
