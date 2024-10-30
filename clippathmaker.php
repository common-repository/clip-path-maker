<?php
/*
 * Plugin Name:       Clip Path Maker
 * Plugin URI:        /
 * Description:       Create Your Custom CSS Clip Path and use everywhere in you Pages & Posts.
 * Version:           1.0
 * Requires at least: 5.6
 * Author:            Vikas Ratudi
 * Author URI:        https://www.instagram.com/ratudi_vikas/?r=nametag
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       clippathmaker
 * Tags:              css, clippathmaker, custom clip path maker, clip path maker, svg, svg shape builder, vikasratudi, element clip, css styling, svg shapes
*/

defined('ABSPATH') || die("You Can't Access this File Directly");

define('VFCPM_PLUGIN_PATH',plugin_dir_path(__FILE__));
define('VFCPM_PLUGIN_URL',plugin_dir_url(__FILE__));
define('VFCPM_PLUGIN_FILE', __FILE__);
include VFCPM_PLUGIN_PATH."inc/db.php";


	add_action('admin_enqueue_scripts','vfcpm_admin_enqueue_scripts');

	function vfcpm_admin_enqueue_scripts(){
			wp_enqueue_script('jquery');
			wp_localize_script('vfcpm_dev_script','ajax_object',admin_url("admin-ajax.php"));
	}

	//ADMIN MENU
	add_action('admin_menu','vfcpm_plugin_menu');
	function vfcpm_plugin_menu(){

		add_menu_page('clippathmaker','Clip Path Maker','manage_options','clippathmaker','vfcpm_options_func','dashicons-star-filled',$position=null);
		add_submenu_page('clippathmaker','More','More','manage_options','clippathmaker-more','vfcpm_comingsoon_func');

	}

	function vfcpm_options_func(){

		include VFCPM_PLUGIN_PATH."inc/clippathmaker-structure.php";
		wp_enqueue_style('vfcpm_dev_style', VFCPM_PLUGIN_URL."assets/css/style.min.css");
		wp_enqueue_script('vfcpm_dev_script', VFCPM_PLUGIN_URL."assets/js/clip.js", array(),'1.0.0',false);
		wp_enqueue_script('vfcpm_dev_script2', VFCPM_PLUGIN_URL."assets/js/draggabilly.min.js", array(),'1.0.0',false);
		wp_enqueue_script('vfcpm_dev_script3', VFCPM_PLUGIN_URL."assets/js/flickity.pkgd.min.js", array(),'1.0.0',false);

	}

	function vfcpm_comingsoon_func(){
		include VFCPM_PLUGIN_PATH."inc/clippathmaker-cmsoon.php";
	}

