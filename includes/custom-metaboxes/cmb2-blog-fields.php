<?php

$blog_quote = new_cmb2_box([
  'id' => 'blog_quote',
  'title' => __('Blog Quote', 'imi'),
  'object_types' => ['post'],
  'context' => 'normal',
  'priority' => 'high',
  'show_names' => true
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
