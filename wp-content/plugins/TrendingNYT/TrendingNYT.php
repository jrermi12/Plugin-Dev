<?php

/*
Plugin Name: Trending NYT
Description: This plugins helps blog writers to get idea and information what the latest news and articles are treinding at present time. 
             this plugin get all the new feeds from the new york times.
version:1.0 
Author: Ermias Asmare
*/ 

if( ! defined('ABSPATH') ) exit;

function plugin_add_news(){
    require_once plugin_dir_path(__FILE__).'setting/news.php';

}


add_shortcode('newsdisplay', 'plugin_add_news');

function displayCode(){
    require_once plugin_dir_path(__FILE__).'setting/news.php';

} 

function plugin_add_menu(){
    add_menu_page( 
        "Trending NYT", 
        "Treding NYT", 
        "manage_options", 
        "/trending_nyt", 
        "displayNews",
        "dashicons-feedback",
        "10" 
    );
}

add_action('admin_menu', 'plugin_add_menu');
?>