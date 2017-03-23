<?php
/*
Plugin Name: Molecule Post Type
Plugin URI: https://github.com/jasondaledavis/molecule-post-type
GitHub Plugin URI: https://github.com/jasondaledavis/molecule-post-type
Description: Creates Projects, Landers and Thank You Post types for inbound marketing and portfolio management.
Author: Jason Davis
Version: 0.1
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// Adds files
require_once( dirname(__FILE__) . '/inc/post-types.php' );
require_once( dirname(__FILE__) . '/inc/scripts.php' );