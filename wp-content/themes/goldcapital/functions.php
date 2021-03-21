<?php


add_action( 'wp_enqueue_scripts', 'goldcapital_style' );
add_action( 'wp_enqueue_scripts', 'goldcapital_scripts' );

// styles
function goldcapital_style() {
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css'  );
    wp_enqueue_style( 'jqueryArcticmodal-style', get_template_directory_uri() . '/assets/css/lightbox.min.css' );
    wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/assets/css/slick.css' );
    wp_enqueue_style( 'slick-theme-style', get_template_directory_uri() . '/assets/css/slick-theme.css' );
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}

// scripts
function goldcapital_scripts() {

  wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js' );
	wp_enqueue_script( 'jquery' );

	// подключаем js файл темы
	wp_enqueue_script( 'jquery-name', get_template_directory_uri() . '/assets/js/jquery-3.5.0.min.js', array(), null, true );
  wp_enqueue_script( 'slick-name', get_template_directory_uri() . '/assets/js/slick.min.js', array(), null, true );
  wp_enqueue_script( 'bootstrap-name', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), null, true );
  wp_enqueue_script( 'parallax-name', get_template_directory_uri() . '/assets/js/parallax-bg.js', array(), null, true );
  wp_enqueue_script( 'snow', get_template_directory_uri() . '/assets/js/particles.min.js', array(), null, true );
  //wp_enqueue_script( 'arcticmodal-name', get_template_directory_uri() . '/assets/js/jquery.arcticmodal-0.3.min.js', array(), null, true );
  wp_enqueue_script( 'main-name', get_template_directory_uri() . '/assets/js/main.js', array(), null, true );
}
