<?php

/*
 * Plugin Name: Gallery images
 * Description: Wordpress Plugin that create gallery as post type and show in shortcode
 * Version: 1.0
 * Author: Abolfazl Sabagh
 * Author URI: http://asabagh.ir
 * Text Domain: ODT
 */

if (!defined('ABSPATH')) {
    exit;
}

define("ODT_FILE", __FILE__);
define("ODT_PRU", plugin_basename(__FILE__));
define("ODT_PDU", plugin_dir_url(__FILE__));
define("ODT_PRT", basename(__DIR__));
define("ODT_PDP", plugin_dir_path(__FILE__));
define("ODT_TMP", ODT_PDP . "public/");
define("ODT_ADM", ODT_PDP . "admin/");

require_once trailingslashit(__DIR__) . "includes/Init.php";
$init = new ODT\Init(1.0, 'odt-plugin', 'ODTApi');