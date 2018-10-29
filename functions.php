<?php

add_action( 'after_setup_theme', function() {
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'escapo' )
	) );
} );