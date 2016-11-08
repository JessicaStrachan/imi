<?php
define('PUBLIC_FOLDER', get_stylesheet_directory_uri() . '/public');
require_once(get_template_directory() . '/includes/class.wp-brunch.php');
class WPTheme extends WPBrunch {
  public static function init() {
    parent::init();
    self::register_nav_menus();
    self::custom_image_sizes();
    self::theme_support();
    spl_autoload_register([__CLASS__, 'autoload_classes']);
    spl_autoload_register([__CLASS__, 'autoload_lib_classes']);
    add_action('wp_enqueue_scripts', [__CLASS__, 'style_script_includes']);
    add_action('init', [__CLASS__, 'include_additional_files'], LOAD_ON_INIT);
  }
  public static function style_script_includes() {
    wp_enqueue_script('jquery');
    wp_register_style(
      'font-awesome',
      '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css',
      false,
      '4.6.3'
    );
    wp_enqueue_style('font-awesome');
  }
  public static function register_nav_menus() {
    register_nav_menus([
      'main_menu' => 'Primary navigation menu in header',
      'footer_menu' => 'Secondary navigation menu in footer'
    ]);
  }
  public static function custom_image_sizes() {
    add_image_size('product-listing', 380, 230, true);
  }
  public static function theme_support() {
    add_theme_support('html5', ['comment-list', 'comment-form', 'search-form']);
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
  }
  public static function format_class_filename($filename) {
    return strtolower(
      implode(
        '-',
        preg_split('/(?=[A-Z])/', $filename, -1, PREG_SPLIT_NO_EMPTY)
      )
    );
  }
  public static function autoload_classes($name) {
    $class_name = self::format_class_filename($name);
    $class_path = get_template_directory() . '/includes/class.'
                  . $class_name . '.php';
    if(file_exists($class_path)) require_once $class_path;
  }
  public static function autoload_lib_classes($name) {
    $lib_class_name = get_template_directory() . '/includes/class.'
                      . strtolower($name) . '.php';
    if(file_exists($lib_class_name)) require_once($lib_class_name);
  }
  public static function include_additional_files() {
    // new CustomMetaboxes();
    // new CustomPostTypes();
    // new TaxonomyFields();
    if(is_admin()) {
      // $rdAdmin = new rdAdmin();
      // $rdAdmin->hooks();
    }
  }
}
WPTheme::init();
