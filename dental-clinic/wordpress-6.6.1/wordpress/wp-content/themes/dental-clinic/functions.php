<?php
add_action('wp_enqueue_scripts', 'dental_scripts');



function add_type_attribute($tag, $handle, $src) {
    // if not your script, do nothing and return original $tag
	if ( 'dental-scripts' !== $handle ) {
        return $tag;
	}
	// change the script tag by adding type="module" and return it.
	$tag = '<script type="module" src="' . esc_url( $src ) . '"></script>';
	return $tag;
}
function dental_scripts()
{
    wp_enqueue_style('dental-style', get_stylesheet_uri());
    add_filter( 'script_loader_tag', 'add_type_attribute' , 10, 3 );
    wp_enqueue_script('dental-scripts', get_template_directory_uri() . './assets/scripts/index.js', array(), null, false);
};

// add_theme_support( 'custom-logo' );
?>