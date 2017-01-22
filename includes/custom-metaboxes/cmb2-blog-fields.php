<?php

$blog_quote = new_cmb2_box([
  'id' => 'blog_quote',
  'title' => __('Blog Quote', 'imi'),
<<<<<<< HEAD
  'object_types' => ['post'],
=======
  'object_types' => ['blog'],
>>>>>>> 676d63a0c16f699c2d27f8fd9a2401c722b5a04d
  'context' => 'normal',
  'priority' => 'high',
  'show_names' => true
]);

$blog_quote->add_field([
  'desc' => __('Enter text to be displayed as quote'),
  'id' => $prefix . 'blog_quote_text',
  'type' => 'text'
]);

<<<<<<< HEAD
$blog_quote->add_field([
=======
$blog_quote_author = new_cmb2_box([
  'id' => 'blog_quote_author',
  'title' => __('Blog Quote Author', 'imi'),
  'object_types' => ['blog'],
  'context' => 'normal',
  'priority' => 'high',
  'show_names' => true
]);

$blog_quote_author->add_field([
>>>>>>> 676d63a0c16f699c2d27f8fd9a2401c722b5a04d
  'desc' => __('Enter text to be displayed as author of quote'),
  'id' => $prefix . 'blog_quote_author_text',
  'type' => 'text'
]);
