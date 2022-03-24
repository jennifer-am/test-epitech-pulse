<?php
/**
 * Hide Front End WP Admin bar
 *
 *
 * @package Hide Front End WP Admin Bar
 * @since 1.0
 */

/**
 * Plugin Name: Hide Front End WP Admin Bar
 * Plugin URI:  https://wordpress.org/plugins/hide-front-end-wp-admin-bar/
 * Description: Hides the admin bar in front-end
 * Author:      Arul Prasad J
 * Author URI:  https://profiles.wordpress.org/arulprasadj/
 * Version:     1.0
 * Text Domain: hide-front-end-wp-admin-bar
 * Domain Path: /languages
 * License:     GPLv2 or later (license.txt)

Copyright (C)  2020-2021 arulprasadj

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
*/
remove_action('wp_footer', 'wp_admin_bar_render', 1000);
add_filter('show_admin_bar', '__return_false');
