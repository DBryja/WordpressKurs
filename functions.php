<?php
/**
 * Theme Functions.
 *
 * @package kurs
 */


if (!defined('KURS_DIR_PATH')) {
    define('KURS_DIR_PATH', untrailingslashit(get_template_directory()));
}

require_once KURS_DIR_PATH . '/inc/helpers/autoloader.php';
function kurs_enqueue_scripts() {
    wp_register_style('kurs-styles', get_template_directory_uri() . '/style.css', [], filemtime(get_template_directory() . '/style.css'), 'all');
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.css', [], false,'all');
    wp_enqueue_style('kurs-styles');
    wp_enqueue_style('bootstrap-css');

    wp_register_script('kurs-scripts', get_template_directory_uri() . '/assets/index.js', [], filemtime(get_template_directory() . '/assets/index.js'), true);
    wp_register_script("bootstrap-js", get_template_directory_uri() . "/assets/src/library/js/bootstrap.js", ["jquery"], false, true);
    wp_enqueue_script('kurs-scripts');
    wp_enqueue_script('bootstrap-js');
}

add_action("wp_enqueue_scripts", "kurs_enqueue_scripts");
