<?php

/**
 * Plugin Name:       Srinivas Reddy Post Types and Taxonomies
 * Plugin URI:        https://github.com/mmarol/sankalpana/
 * Description:       A simple plugin for creating custom post types and taxonomies specific to this website.
 * Version:           1.0.0
 * Author:            Mrityunjay Marol
 * Author URI:        https://jaymarol.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       srini-post-types
 * Domain Path:       /languages
 */

if (!defined('WPINC')) {
    die;
}

define('SRINI_VERSION', '1.0.0');
define('SRINIDOMAIN', 'srini-post-types');
define('SRINIPATH', plugin_dir_path(__FILE__));

require_once(SRINIPATH . '/post-types/register.php');
add_action('init', 'srini_register_announcement_type');
add_action('init', 'srini_register_event_type');
add_action('init', 'srini_register_learning_path_type');
add_action('init', 'srini_register_book_type');
add_action('init', 'srini_register_cd_type');
add_action('init', 'srini_register_article_type');
add_action('acf/init', 'my_acf_op_init');

function my_acf_op_init()
{
    if (function_exists('acf_add_options_page')) {

        acf_add_options_page(array(
            'page_title'     => 'Global Page Settings',
            'menu_title'    => 'Global Page Settings',
            'menu_slug'     => 'global-page-settings',
            'capability'    => 'edit_posts',
        ));

        acf_add_options_sub_page(array(
            'page_title'     => 'Global Header Settings',
            'menu_title'    => 'Header',
            'parent_slug'    => 'global-page-settings',
        ));

        acf_add_options_sub_page(array(
            'page_title'     => 'Global Footer Settings',
            'menu_title'    => 'Footer',
            'parent_slug'    => 'global-page-settings',
        ));
    }
}
