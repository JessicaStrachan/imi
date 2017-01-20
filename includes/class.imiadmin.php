<?php

/**
 * CMB2 Theme Options
 * @version 0.1.0
 */
class imiAdmin {

   /**
    * Option key, and option page slug
    * @var string
    */
  private $key = 'imi_options';
  private $field_prefix = 'imi_option_';

  /**
   * Array of metaboxes/fields
   * @var array
   */
  protected $option_metabox = [];

  /**
   * Options Page title
   * @var string
   */
  protected $title = '';

  /**
   * Options Page hook
   * @var string
   */
  protected $options_page = '';

  /**
   * Constructor
   * @since 0.1.0
   */
  public function __construct() {
    $this->title = __('Imi Site Options', 'imi');

    $option_fields = [];

    $option_fields[] = [
      'name' => __('General options', 'imi'),
      'desc' => 'Use the fields below to manage the header options for the site',
      'id' => $this->field_prefix . 'general_options',
      'type' => 'title'
    ];

    $option_fields[] = [
      'name' => __('Logo', 'imi'),
      'id' => $this->field_prefix . 'logo',
      'type' => 'file',
      'allow' => ['attachment']
    ];

    $this->fields = $option_fields;
  }

  /**
   * Initiate our hooks
   * @since 0.1.0
   */
  public function hooks() {
    add_action('admin_init', [$this, 'init']);
    add_action('admin_menu', [$this, 'add_options_page']);
  }

  /**
   * Register our setting to WP
   * @since  0.1.0
   */
  public function init() {
    register_setting($this->key, $this->key);
  }

  /**
   * Add menu options page
   * @since 0.1.0
   */
  public function add_options_page() {
    $this->options_page = add_menu_page(
      $this->title,
      $this->title,
      'manage_options',
      $this->key,
      [$this, 'admin_page_display']
    );
  }

  /**
   * Admin page markup. Mostly handled by CMB2
   * @since  0.1.0
   */
  public function admin_page_display() {
    ?>
    <div class="wrap cmb2_options_page <?php echo $this->key; ?>">
      <h2><?php echo esc_html(get_admin_page_title()); ?></h2>
      <?php cmb2_metabox_form($this->option_metabox(), $this->key); ?>
    </div>
    <?php
  }

  /**
   * Defines the theme option metabox and field configuration
   * @since  0.1.0
   * @return array
   */
  public function option_metabox() {
    return [
      'id' => 'option_metabox',
      'show_on' => ['key' => 'options-page', 'value' => [$this->key]],
      'show_names' => true,
      'fields' => $this->fields,
    ];
  }

  /**
   * Public getter method for retrieving protected/private variables
   * @since  0.1.0
   * @param  string  $field Field to retrieve
   * @return mixed          Field value or exception is thrown
   */
  public function __get($field) {
    // Allowed fields to retrieve
    if(in_array($field, ['key', 'fields', 'title', 'options_page'], true)) {
      return $this->{$field};
    }

    if('option_metabox' === $field) {
      return $this->option_metabox();
    }

    throw new Exception('Invalid property: ' . $field);
  }
}
