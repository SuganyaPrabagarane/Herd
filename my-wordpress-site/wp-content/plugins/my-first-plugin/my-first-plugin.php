<?php
/*
Plugin Name: My First Plugin
Description: A simple plugin to learn Wordpress development.
Version: 1.0
Author: Suganya Prabagarane

*/



function my_first_plugin_footer_message()
{
    echo '<p style="text-align: center;">Hello from My First Plugin!</p>';
}
add_action('wp_footer', 'my_first_plugin_footer_message');

function my_first_shortcode()
{
    return '<p>This is my first shortcode!</p>';
}
add_shortcode('my_hello', 'my_first_shortcode');

function my_first_plugin_admin_notice()
{
    echo '
    Welcome to My First Plugin!
    ';
}
add_action('admin_notices', 'my_first_plugin_admin_notice');
