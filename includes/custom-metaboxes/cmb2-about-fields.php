<?php

$about_quote = new_cmb2_box([
  'id' => 'about_quote',
  'title' => __('About Quote', 'imi'),
  'object_types' => ['page'],
  'context' => 'normal',
  'priority' => 'high',
  'show_names' => true
]);

$about_quote->add_field([
  'desc' => __('Enter text to be displayed as quote'),
  'id' => $prefix . 'about_quote_text',
  'type' => 'text'
]);

$about_quote->add_field([
  'desc' => __('Enter text to be displayed as author of quote'),
  'id' => $prefix . 'about_quote_author_text',
  'type' => 'text'
]);
