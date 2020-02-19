<?php 


function designbriefs_load_style() {
		if ( ! is_admin() ) {
				
			wp_enqueue_style( 
					'parent-style', 
					get_template_directory_uri() . '/style.css', // main.css
					false, // dependencies
					'1.1' // version
			);
			
			wp_enqueue_style( 
					'override', 
					get_stylesheet_directory_uri() . '/style-inline.css', // main.css
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

