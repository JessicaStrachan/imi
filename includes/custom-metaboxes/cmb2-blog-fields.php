<?php

$blog_quote = new_cmb2_box([
  'id' => 'blog_quote',
  'title' => __('Blog Quote', 'imi'),
  'object_types' => ['post'],
  'context' => 'normal',
  'priority' => 'high',
  'show_names' => true
]);

$blog_header = new_cmb2_box([
  'id' => 'blog_header',
  'title' => __('Blog Header Image', 'imi'),
  'object_types' => ['post'],
  'context' => 'normal',
  'priority' => 'high',
  'show_names' => true
]);

$blog_header->add_field([
  'desc' => __('Upload jpeg file'),
  'id' => $prefix . 'blog_header_image',
  'type' => 'file',
  'allow' => ['attachment']
]);

$blog_quote->add_field([
  'desc' => __('Enter text to be displayed as quote'),
  'id' => $prefix . 'blog_quote_text',
  'type' => 'text'
]);

$blog_quote->add_field([
  'desc' => __('Enter text to be displayed as author of quote'),
  'id' => $prefix . 'blog_quote_author_text',
  'type' => 'text'
]);

$blog_gallery = new_cmb2_box([
  'id' => 'blog_gallery',
  'title' => __('Blog Gallery', 'imi'),
  'object_types' => ['post'],
  'context' => 'normal',
  'priority' => 'high',
  'show_names' => true
]);

$blog_gallery->add_field([
  'desc' => __('Upload jpeg file'),
  'id' => $prefix . 'blog_gallery_image_1',
  'type' => 'file',
  'allow' => ['attachment']
]);

$blog_gallery->add_field([
  'desc' => __('Upload jpeg file'),
  'id' => $prefix . 'blog_gallery_image_2',
  'type' => 'file',
  'allow' => ['attachment']
]);

$blog_gallery->add_field([
  'desc' => __('Upload jpeg file'),
  'id' => $prefix . 'blog_gallery_image_3',
  'type' => 'file',
  'allow' => ['attachment']
]);
