<?php

$press = new_cmb2_box([
  'id' => 'page_quote',
  'title' => __('Page Quote', 'imi'),
  'object_types' => ['page'],
  'context' => 'normal',
  'priority' => 'high',
  'show_names' => true
]);

$press->add_field([
  'desc' => __('Enter text to be displayed as quote'),
  'id' => $prefix . 'page_quote_text',
  'type' => 'text'
]);

$press->add_field([
  'desc' => __('Enter text to be displayed as blah'),
  'id' => $prefix . 'page_quote_text',
  'type' => 'text'
]);
