<?php

function ithslab1_theme_support(){
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'ithslab1_theme_support');

function ithslab1_register_style(){
  wp_enqueue_style('labb1-css', get_template_directory_uri() . '/style.css', array('labb1-bootstrap'), '1.0', 'all');
  wp_enqueue_style('labb1-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '3.3.8', 'all');
  wp_enqueue_style('labb1-fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), '4.6.3', 'all');
}

add_action('wp_enqueue_scripts', 'ithslab1_register_style');

function ithslab1_register_scripts(){
  wp_enqueue_script('labb1-jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), '3.1.0', true);
  wp_enqueue_script('labb1-script', get_template_directory_uri() . '/assets/js/script.js', array('labb1-jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'ithslab1_register_scripts');

function ithslab1_menus(){
  $location = array(
    'primary' => "Main navigation bar",
    'left_side_bar' => "Left side bar",
    'right_side_bar' => "Right side bar"
  );

  register_nav_menus($location);
}

add_action('init', 'ithslab1_menus');

?>