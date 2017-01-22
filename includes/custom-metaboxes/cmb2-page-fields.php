<?php

$page_quote = new_cmb2_box([
  'id' => 'page_quote',
  'title' => __('Page Quote', 'imi'),
  'object_types' => ['page'],
  'context' => 'normal',
  'priority' => 'high',
  'show_names' => true
]);

$page_quote->add_field([
  'desc' => __('Enter text to be displayed as quote'),
  'id' => $prefix . 'page_quote_text',
  'type' => 'text'
]);

$page_quote->add_field([
  'desc' => __('Enter text to be displayed as author of quote'),
  'id' => $prefix . 'page_quote_author_text',
  'type' => 'text'
]);
