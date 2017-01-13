<?php

class baseclass{
  public $themename;
  public function __construct(){
    $themename=$this->themename;
    add_action('after_setup_theme',array($this,'theme_setup'));
  }
  public function themes_setup($themename){
    /*
    * Make theme available for translation.
    * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
    * If you're building a theme based on Twenty Seventeen, use a find and replace
    * to change 'twentyseventeen' to the name of your theme in all the template files.
    */
    load_theme_textdomain( $themename);

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
    * Let WordPress manage the document title.
    * By adding theme support, we declare that this theme does not use a
    * hard-coded <title> tag in the document head, and expect WordPress to
    * provide it for us.
    */
    add_theme_support( 'title-tag' );

    /*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
    add_theme_support( 'post-thumbnails' );
  }

}


?>
