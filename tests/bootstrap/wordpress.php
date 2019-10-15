<?php
/**
 * Bootstrap wordpress functions for plugin testing
 */

if (! function_exists('is_blog_installed')) {
    function is_blog_installed() { return true; }
}

/**
 * Actions
 */
$GLOBALS['wp_actions'] = [];

if (! function_exists('add_action')) {
    function add_action($key, $callback) {
        $GLOBALS['wp_actions'][$key] = $callback;
    }
}

if (! function_exists('do_action')) {
    function do_action($key, $args = []) {
        call_user_func_array($GLOBALS['wp_actions'][$key], $args);
    }
}

/**
 * PostTypes
 */
$GLOBALS['wp_posttypes'] = [];

if (! function_exists('post_type_exists')) {
    function post_type_exists($key) {
        return isset($GLOBALS['wp_posttypes'][$key]);
    }
}

if (! function_exists('register_post_type')) {
    function register_post_type($key, $args = '') {
        $GLOBALS['wp_posttypes'][$key] = $args;
    }
}

