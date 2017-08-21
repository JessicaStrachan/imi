<?php
$events_date = new_cmb2_box([
  'id' => 'event_date',
  'title' => __('Event Date', 'imi'),
  'object_types' => ['events'],
  'context' => 'normal',
  'priority' => 'high',
  'show_names' => true
]);

$events_date->add_field([
  'desc' => __('Enter text to be displayed as date and time on listing page card'),
  'id' => $prefix . 'event_date_text',
  'type' => 'text'
]);

$events_address = new_cmb2_box([
  'id' => 'event_address',
  'title' => __('Event Address', 'imi'),
  'object_types' => ['events'],
  'context' => 'normal',
  'priority' => 'high',
  'show_names' => true
]);

$events_address->add_field([
  'desc' => __('Enter text to be displayed as address on listing page card'),
  'id' => $prefix . 'event_address_text',
  'type' => 'text'
]);


$events_excerpt = new_cmb2_box([
  'id' => 'event_excerpt',
  'title' => __('Event Exceprt', 'imi'),
  'object_types' => ['events'],
  'context' => 'normal',
  'priority' => 'high',
  'show_names' => true
]);

$events_excerpt->add_field([
  'desc' => __('Enter text to be displayed as excerpt on listing page card' 'cmb2'),
  'id' => $prefix . 'event_excerpt_text',
  'type' => 'text'
]);

$events_banner_images = new_cmb2_box([
  'id' => 'events_images',
  'title' => __('Events Banner Images', 'imi'),
  'object_types' => ['events'],
  'context' => 'normal',
  'priority' => 'high',
  'show_names' => true
]);

$events_banner_images->add_field([
  'name' => __('Add the banner images for the page'),
  'desc' => __('A Maximum of 3 images should be added'),
  'id' => $prefix . 'banner_images',
  'type' => 'title'
]);

$events_banner_images_group = $events_banner_images->add_field([
  'id' => $prefix . 'banner_images_group',
  'type' => 'group',
  'options' => [
                'group_title' => __('Entry {#}', 'cmb2'),
                'add_button' => __('Add Banner Image', 'cmb2'),
                'remove_button' => __('Remove Banner Image', 'cmb2')
               ]
]);

$events_banner_images->add_group_field($events_banner_images_group, [
  'desc' => __('Add Banner Images', 'cmb2'),
  'id' => 'banner_image',
  'type' => 'file',
  'allow' => ['attachment']
]);

$events_quote = new_cmb2_box([
  'id' => 'event_quote',
  'title' => __('Event Quote', 'imi'),
  'object_types' => ['events'],
  'context' => 'normal',
  'priority' => 'high',
  'show_names' => true
]);

$events_quote->add_field([
  'desc' => __('Enter text to be displayed as quote'),
  'id' => $prefix . 'event_quote_text',
  'type' => 'text'
]);

$events_quote_author = new_cmb2_box([
  'id' => 'event_quote_author',
  'title' => __('Event Quote Author', 'imi'),
  'object_types' => ['events'],
  'context' => 'normal',
  'priority' => 'high',
  'show_names' => true
]);

$events_quote_author->add_field([
  'desc' => __('Enter text to be displayed as author of quote'),
  'id' => $prefix . 'event_quote_author_text',
  'type' => 'text'
]);
