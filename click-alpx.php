<?php
/**
 * Plugin Name: Google Ads sahte tıklama önleyici
 * Plugin URI: https://click.alpx.com.tr
 * Description: Google reklamlarınıza gelen sahte tıklamaları ip olarak engellemenizi sağlar.
 * Version: 1.0
 * Author: alpx.com.tr
 * Author URI: https://click.alpx.com.tr
 * License: GPL2
 */
function alpx_tracker_script() {
    echo '<script type="text/javascript" src="https://click.alpx.com.tr/tracker.js"></script>';
}

add_action('wp_head', 'alpx_tracker_script');
?>