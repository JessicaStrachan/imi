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

$about_us = new_cmb2_box([
  'id' => 'team_member',
  'title' => __('Team Member', 'imi'),
  'object_types' => ['page'],
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
