<?php

$about_us = new_cmb2_box([
  'id' => 'about_us',
  'title' => __('Our Vision & Our Branches', 'imi'),
  'object_types' => ['page'],
  'show_on'      => [
    'key'   => 'page-template',
    'value' => 'about-page.php'
  ],
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

$about_us = new_cmb2_box([
  'id' => 'team_member',
  'title' => __('Team Member', 'imi'),
  'object_types' => ['page'],
  'show_on'      => [
    'key'   => 'page-template',
    'value' => 'about-page.php'
  ],
  'context' => 'normal',
  'priority' => 'high',
  'show_names' => true
]);

$about_us->add_field([
  'desc' => __('Upload jpeg file of team member'),
  'id' => $prefix . 'team_member_image',
  'type' => 'file',
  'allow' => ['attachment']
]);

$about_us->add_field([
  'desc' => __('Name'),
  'id' => $prefix . 'team_member_name',
  'type' => 'text'
]);

$about_us->add_field([
  'desc' => __('Short Bio'),
  'id' => $prefix . 'team_member_bio',
  'type' => 'text'
]);

$about_us->add_field([
  'name' => __('Twitter'),
  'desc' => __('Will only display if the link is filled in'),
  'id' => $prefix . 'twitter_link',
  'type' => 'text_url'
]);

$about_us_quote = new_cmb2_box([
  'id' => 'about_quote_text',
  'title' => __('Quote', 'imi'),
  'object_types' => ['page'],
  'show_on'      => [
    'key'   => 'page-template',
    'value' => 'about-page.php'
  ],
  'context' => 'normal',
  'priority' => 'high',
  'show_names' => true
]);

$about_us_quote->add_field([
  'desc' => __('Enter text to be displayed as quotevsdfd'),
  'id' => $prefix . 'about_quote_text',
  'type' => 'text'
]);

$about_us_quote_author = new_cmb2_box([
  'id' => 'about_quote_author',
  'title' => __('Quote Author', 'imi'),
  'object_types' => ['page'],
  'show_on'      => [
    'key'   => 'page-template',
    'value' => 'about-page.php'
  ],
  'context' => 'normal',
  'priority' => 'high',
  'show_names' => true
]);

$about_us_quote_author->add_field([
  'desc' => __('Enter text to be displayed as author of quote'),
  'id' => $prefix . 'about_quote_author_text',
  'type' => 'text'
]);
