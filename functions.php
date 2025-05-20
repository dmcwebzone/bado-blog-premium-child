<?php
/* ------------------------------------------------------------------------------
* Author: web-zone.org
* @package Bado Blog Premium Child
* Description: Functions
* ------------------------------------------------------------------------------ */

if (!function_exists('badoblog_child_fun_scripts')) {
	function badoblog_child_fun_scripts() {
		wp_enqueue_style('badoblog-style-child', get_template_directory_uri() . '/style.css');
	}
	add_action('wp_enqueue_scripts', 'badoblog_child_fun_scripts', 1);
}

/* ------------------------------------------------------------------------------
* Below you can add your functions
* ------------------------------------------------------------------------------ */


