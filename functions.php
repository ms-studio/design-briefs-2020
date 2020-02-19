<?php 


function designbriefs_load_style() {
		if ( ! is_admin() ) {
		
			// wp_register_style( 'davis_fonts', '//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic' );
		
			wp_enqueue_style( 
					'parent-style', 
					get_template_directory_uri() . '/style.css', // main.css
					false, // dependencies
					'1.1' // version
			);
				
		} 
}
add_action( 'wp_enqueue_scripts', 'designbriefs_load_style' );


/**
 * Functionality
 * Should rather be added to plugin:
 * https://github.com/ms-studio/design-briefs-funk
 *
*/

