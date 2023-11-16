<?php 

	function proacto_scripts() {

		wp_enqueue_style( 'proacto-style', get_stylesheet_uri(), array(), _S_VERSION );

		// wp_enqueue_style( 'proacto-slick-css' , get_template_directory_uri() . '/libs/slick/slick.css', array(), '1.0');
		// wp_enqueue_style( 'proacto-slick-theme-css' , get_template_directory_uri() . '/libs/slick/slick-theme.css', array(), '1.0');

         wp_enqueue_style( 'proacto-swiper-css' , 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '1.0');

		wp_enqueue_style( 'proacto-main-style', get_template_directory_uri() . '/css/main.css', array(), _S_VERSION );


		// wp_enqueue_script( 'proacto-slick-js', get_template_directory_uri() . '/libs/slick/slick.min.js', array('jquery'), '1.0', true );

		// wp_enqueue_script( 'proacto-debounce-js', get_template_directory_uri() . '/libs/debounce/jquery.ba-throttle-debounce.min.js', array(), '1.0', true );

		 wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), _S_VERSION, true );

		wp_enqueue_script( 'proacto-main', get_template_directory_uri() . '/js/main.js', array('jquery'), 1.0, true );


	}
	add_action( 'wp_enqueue_scripts', 'proacto_scripts' );

 ?>