<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category Imi
 * @package  CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

class CustomMetaboxes {
  public function __construct() {
    if(file_exists(__DIR__ . '/CMB2/init.php')) {
      require_once __DIR__ . '/CMB2/init.php';
    }

    add_action('cmb2_init', [$this, 'cmb2_imi_metaboxes']);
  }

  public function cmb2_imi_metaboxes() {
    $prefix = '_imi_cmb2_';

    $cmb2_field_files_dir = __DIR__ . '/custom-metaboxes';

    if(file_exists($cmb2_field_files_dir)) {
      $cmb2_field_files = new DirectoryIterator($cmb2_field_files_dir);

      foreach($cmb2_field_files as $file) {
        if($file->isFile()) require_once($file->getPathname());
      }
    }
  }
}
