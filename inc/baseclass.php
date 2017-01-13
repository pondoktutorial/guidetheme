<?php

class baseclass{
  public $addmenu;
  public $args;
  public $filecss;
  public $filejs;
  

  public function __construct(){
    $themename = $this->themename;
    add_action('after_setup_theme',array($this,'themes_setup'));
    add_action('wp_enqueue_script',array($this,'theme_scripts'));
     add_action( 'widgets_init', array($this,'add_widget') );

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
    
    // This theme uses wp_nav_menu() in two locations.
    if(isset($this->addmenu)){
        register_nav_menus($this->addmenu);
    }
    

	
	
  }
  public function addcss($cssname,$cssfile){
      wp_enqueue_style($cssname,get_template_directory_uri().'/assets/css/'.$cssfile);
  }
  
  public function addjs($jsname,$jsfile){
      wp_enqueue_script($jsname,get_template_directory_uri().'/assets/js/'.$jsfile,array('jquery'),'2017',true);
  }
  
  
  public function theme_scripts(){
      $this->addcss();
      $this->addjs();
  }
  
 
  public function add_widget($widget){
      register_sidebar($widget);
  }
  public function custom_post_type(){
      $this->add_post_type();
  }
 
  
  
}

//Class to make post type
class oo_post_type{
    public $singular;
    public $plural;
    public $name;
    public $menu_icon;
    public function __construct($name,$plural,$singular,$menu_icon){
        $this->name=$name;
        $this->plural=$plural;
        $this->singular=$singular;
        $this->menu_icon=$menu_icon;
        add_action( 'init', array($this,'post_type_function') );
         
    }
    function post_type_function() {
    register_post_type( $this->name,
    array(
      'labels' => array(
        'name' => __( $this->plural ),
        'singular_name' => __( $this->singular )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon'=> $this->menu_icon,
      'supports' => array( 'title', 'editor', 'author', 'thumbnail' )
    )
  );
}
  
}


?>
