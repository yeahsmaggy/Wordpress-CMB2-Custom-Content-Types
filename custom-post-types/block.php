<?php
/**
 * Block Post Type
 */

if ( !class_exists( 'Block' ) ) {

    /**
     * A PostTypeTemplate class that provides 3 additional meta fields
     * http://www.yaconiello.com/blog/how-to-write-wordpress-plugin/
     */
    class Block {

        const POST_TYPE = "block";
        private $_meta  = array(
            'meta_a',
            'meta_b',
            'meta_c',
        );

        public function __construct() {

            add_action( 'init', array( &$this, 'init' ) );
            add_action( 'cmb2_init', array( &$this, 'addMetaBoxes' ) );
            // add_action( 'admin_menu', array( &$this, 'remove_default_post_type_functionality' ) );
        }

        public function init() {
            // Initialize Post Type
            $this->create_post_type();
        }


        public function remove_default_post_type_functionality(){
            // remove_post_type_support( 'block', 'editor' );
        }

        public function create_post_type() {

        }


        public function addMetaBoxes() {
            /// definitions for blocks
            include 'cmb_defs/cmb_block.php';
        }
        public function columns( $columns ) {
            return $columns;
        }

        public function column_content( $column ) {
        }

    }
}
