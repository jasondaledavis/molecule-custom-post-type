<?php
if( !function_exists ( 'mcpt_scripts' ) ) :
	function mcpt_scripts() {
		// wp_enqueue_script( 'jquery' );
		wp_enqueue_style( 'mcpt_styles', plugin_dir_url( __FILE__ ) . '/css/style.css' );
	}
	add_action( 'wp_enqueue_scripts', 'mcpt_scripts' );
endif;


add_filter ('widget_text', 'do_shortcode');