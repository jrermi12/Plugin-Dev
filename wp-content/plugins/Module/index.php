<?php

/*
Plugin Name: Moduler
Description: Moduler is a plugin made for educational 
version:1.0 
Author: Ermias Asmare
*/ 

if( ! defined('ABSPATH') ) exit;

class Moduler {
    function __construct() {
        add_action('admin_menu', array($this, 'ourMenu'));
    }

    function ourMenu(){
        add_menu_page(
            'Moduler Plugin',
            'Moduler',
            'manage_options',
            'Moduler',
            array($this,'ModulerPage'),
            'dashicons-smiley',
            100);
            add_submenu_page('Moduler','Moduler Plugin','Manage','manage_options','Moduler',array($this,'ModulerPage'));
            add_submenu_page('Moduler','Moduler Options','Options','manage_options','moduler-options',array($this,'optionsSubPage'));
    }

    function optionsSubPage(){
        require_once plugin_dir_path(__FILE__).'design/option.php';
    }

    function ModulerPage(){
        require_once plugin_dir_path(__FILE__).'design/module.php';
    }
}

$moduler = new Moduler();