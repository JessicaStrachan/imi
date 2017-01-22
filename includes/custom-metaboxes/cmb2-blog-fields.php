<?php

$blog_quote = new_cmb2_box([
  'id' => 'blog_quote',
  'title' => __('Blog Quote', 'imi'),
  'object_types' => ['blog'],
  'context' => 'normal',
  'priority' => 'high',
  'show_names' => true
]);

$blog_quote->add_field([
  'desc' => __('Enter text to be displayed as quote'),
  'id' => $prefix . 'blog_quote_text',
  'type' => 'text'
]);

$blog_quote_author = new_cmb2_box([
  'id' => 'blog_quote_author',
  'title' => __('Blog Quote Author', 'imi'),
  'object_types' => ['blog'],
  'context' => 'normal',
  'priority' => 'high',
  'show_names' => true
]);

$blog_quote_author->add_field([
  'desc' => __('Enter text to be displayed as author of quote'),
  'id' => $prefix . 'blog_quote_author_text',
  'type' => 'text'
]);
