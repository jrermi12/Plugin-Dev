<?php



function dea_Documenter()
{
      add_menu_page(
        'Module', // Title of the admin page
        'Module', // Text to show on the menu link
        'manage_options', // Capability requirement to see the link
        'desdoc-admin-menu', // The 'slug' - file to display when clicking the link
        'dea_scripts_page',
        '',
        200
    );
}

add_action( 'admin_menu', 'dea_Documenter' );