<?php

Class CustomPostTypes {
  public function __construct() {
    add_action('init', [$this, 'initialize_cpts']);
  }

  public function initialize_cpts() {

    $custom_post_types['events'] = [
      'labels' => [
        'name' => 'Events',
        'singular_name' => 'Event'
      ],
      'public' => true,
      'menu_position' => '28',
      'menu_icon' => 'dashicons-calendar-alt',
      'capability_type' => 'post',
      'has_archive' => true,
      'supports' => [
        'title',
        'editor',
        'thumbnail',
        'page-attributes'
      ],
      'taxonomies' => [
        'category'
      ],
      'rewrite' => [
        'slug' => 'events',
        'with_front' => false
      ]
    ];

    $this->register_custom_post_types($custom_post_types);
  }

  private function register_custom_post_types($cpts) {
    foreach($cpts as $cpt => $cpt_args) {
      register_post_type($cpt, $cpt_args);
    }
  }
}
