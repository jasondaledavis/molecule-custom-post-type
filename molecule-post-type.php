<?php
/*
Plugin Name: Molecule Post Type
Plugin URI: https://nerdbrand.me
Description: I'm a mad genuis.
Author: Jason Davis
Version: 1.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// Adds files
require_once( dirname(__FILE__) . '/inc/post-types.php' );
require_once( dirname(__FILE__) . '/inc/scripts.php' );