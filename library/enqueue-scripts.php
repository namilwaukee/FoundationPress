<?php
/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_scripts' ) ) :
	function foundationpress_scripts() {

	// Enqueue the main Stylesheet.
	wp_enqueue_style( 'main-stylesheet', get_template_directory_uri() . '/dist/assets/css/app.css', array(), '2.10.2', 'all' );

<<<<<<< HEAD
	// Deregister the jquery version bundled with WordPress.
	// wp_deregister_script( 'jquery' );

	// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
	// wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', false );
=======
	// Deregister the jquery version bundled with WordPress, as we're injecting the version we need with Webpack.
	wp_deregister_script( 'jquery' );

	// Enqueue Founation scripts
	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/dist/assets/js/app.js', array(), '2.10.2', true );

	// Enqueue FontAwesome from CDN. Uncomment the line below if you don't need FontAwesome.
	//wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/5016a31c8c.js', array(), '4.7.0', true );
>>>>>>> olefredrik/master


	// Add the comment-reply library on pages where it is necessary
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	}

	add_action( 'wp_enqueue_scripts', 'foundationpress_scripts' );
endif;
