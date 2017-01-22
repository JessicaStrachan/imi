<?php

$about_us = new_cmb2_box([
  'id' => 'about_us',
  'title' => __('Our Vision & Our Branches', 'imi'),
  'object_types' => ['page'],
  'context' => 'normal',
  'priority' => 'high',
  'show_names' => true
]);

$about_us->add_field([
  'desc' => __('Enter text to be displayed in Our Vision section'),
  'id' => $prefix . 'our_vision_text',
  'type' => 'wysiwyg'
]);

$about_us->add_field([
  'desc' => __('Enter text to be displayed in Our Branches section'),
  'id' => $prefix . 'our_branches_text',
  'type' => 'wysiwyg'
]);
