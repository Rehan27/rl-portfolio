<?php
/**
 * Plugin Name:     Rehan Lodhi Portfolio
 * Plugin URI:
 * Description:     Portfolio plugin list the projects with custom fields
 * Version:         1.0
 * Author:          Rehan Lodhi
 * Author URI:      http://rehanlodhi.work
 * License: GPL     v2 or later
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.html
 */

define('RL_PORTFOLIO_PATH', plugin_dir_path(__FILE__));


register_activation_hook(__FILE__, 'rl_portfolio_activation');
function rl_portfolio_activation() {

    flush_rewrite_rules();
}

register_deactivation_hook(__FILE__, 'rl_portfolio_deactivation');
function rl_portfolio_deactivation() {

    flush_rewrite_rules();
}

add_action('init', 'sidebar_plugin_register');
function sidebar_plugin_register() {
    wp_register_script(
        'index-plugin-js',
        plugins_url('build/index.js', __FILE__),
        array('wp-plugins', 'wp-edit-post', 'wp-element')
    );
}

add_action('enqueue_block_editor_assets', 'sidebar_plugin_script_enqueue');
function sidebar_plugin_script_enqueue() {
    wp_enqueue_script('index-plugin-js');
}

include(RL_PORTFOLIO_PATH . 'admin/post-types/rl-portfolio-post-type.php');
