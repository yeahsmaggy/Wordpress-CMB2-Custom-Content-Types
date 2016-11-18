<?php
/*
Plugin Name: Ajw Custom Content Types
Plugin URI: 
Description: 
Version:
Author:
Author URI:
*/

if ( !class_exists( 'AjwCustomContentTypes' ) ) {

  class AjwCustomContentTypes {
    /**
     * Construct the plugin object
     */
    public function __construct() {

      $dir = plugin_dir_path( __FILE__ );

      require_once ( $dir . "/custom_post_types/page.php" );

      $Page = new Page();

    } 

    /**
     * Activate the plugin
     */
    public static function activate() {

    } // END public static function activate

    /**
     * Deactivate the plugin
     */
    public static function deactivate() {

    } 
  } 


} 


if ( class_exists( 'AjwCustomContentTypes' ) ) {
  register_activation_hook( __FILE__, array( 'ajw_custom_content_types', 'activate' ) );
  register_deactivation_hook( __FILE__, array( 'ajw_custom_content_types', 'deactivate' ) );
  $ajw_custom_content_types = new AjwCustomContentTypes();
}
