<?php
$contact_us_quote = new_cmb2_box([
  'id' => 'contact_quote_text',
  'title' => __('Quote', 'imi'),
  'object_types' => ['page'],
  'show_on'      => [
    'key'   => 'page-template',
    'value' => 'contact.php'
  ],
  'context' => 'normal',
  'priority' => 'high',
  'show_names' => true
]);

$contact_us_quote->add_field([
  'desc' => __('Enter text to be displayed as quotevsdfd'),
  'id' => $prefix . 'contact_quote_text',
  'type' => 'text'
]);

$contact_us_quote_author = new_cmb2_box([
  'id' => 'contact_quote_author',
  'title' => __('Quote Author', 'imi'),
  'object_types' => ['page'],
  'show_on'      => [
    'key'   => 'page-template',
    'value' => 'contact.php'
  ],
  'context' => 'normal',
  'priority' => 'high',
  'show_names' => true
]);

$contact_us_quote_author->add_field([
  'desc' => __('Enter text to be displayed as author of quote'),
  'id' => $prefix . 'contact_quote_author_text',
  'type' => 'text'
]);