<?php

add_theme_support('post-thumbnails');

add_theme_support('title-tag');

function my_assets() {

    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('home-style', get_stylesheet_directory_uri() . "/assets/css/home.css");

    wp_enqueue_style('material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons');

}

add_action('wp_enqueue_scripts', 'my_assets');