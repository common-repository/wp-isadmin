<?php
/*
Plugin Name: WP isAdmin
Plugin URI: https://github.com/BlaineMoore/wp-isadmin
Description: This plugin provides provides a simple short code to add or hide custom content to your posts and pages based on whether a user is an administrator or not.
Version: 1.0.1
Author: Blaine Moore
Author URI: https://blainemoore.com
GitHub Plugin URI: BlaineMoore/wp-isadmin
*/

function isAdmin_visible($atts, $content = null) { return isAdmin_isAdminWorker($atts, $content, true); }
function isAdmin_invisible($atts, $content = null) { return isAdmin_isAdminWorker($atts, $content, false); }
add_shortcode( 'isAdmin', 'isAdmin_visible' );
add_shortcode( 'isNotAdmin', 'isAdmin_invisible' );

function isAdmin_isAdminWorker($atts, $content, $visible) { 
    extract(shortcode_atts(array(
        "roles" => 'administrator',
        "role" => null // allow for possible typo
    ), $atts));
    if (('administrator' == $roles) && (!is_null($role))) { $roles = $role; }

    $roles = explode(',', $roles);
    $user = wp_get_current_user();
    if($visible == (0<sizeOf(array_intersect($roles, $user->roles)))) {
        return do_shortcode($content);
    } else {
        return '';
    } // if($visible == array_intersect($roles, $user->roles)) {
} // function isAdmin_isAdminWorker($atts, $content, $visible) { 
