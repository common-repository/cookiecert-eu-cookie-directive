<?php
/*
Plugin Name: CookieCert EU Cookie Directive
Plugin URI: http://www.cookiecert.com/wordpress/consent/index.php
Description: Display widget to get users consent for cookies.  Makes site compliant with EU Cookie Directive. CONTACT US at wordpressplugin@cookicert.com if you have specific feature request for this plugin, we would be happy to address your request promptly.
Version: 1.1
Author: CookieCert
Author URI: http://www.cookiecert.com/wordpress/consent/index.php
License: GPL2
*/
?>
<?php
/*  Copyright 2012 CookieCert  (email : wordpressplugin@cookiecert.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
?>
<?php
include_once 'cc_widget.php';

/**
 * Add Settings link to plugins - code from GD Star Ratings
 */
function add_cc_settings_link($links, $file) {
        static $this_plugin;
        if (!$this_plugin) $this_plugin = plugin_basename(__FILE__);

        if ($file == $this_plugin){
                $settings_link = '<a href="admin.php?page=cc_privacy">'.__("Settings", "cc-privacy").'</a>';
                array_unshift($links, $settings_link);
        }
        return $links;
}

add_filter('plugin_action_links', 'add_cc_settings_link', 10, 2 );
add_action('widgets_init', create_function('', 'return register_widget("CookieConsentWidget");'));
?>