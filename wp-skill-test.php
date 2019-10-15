<?php

/**
 * Plugin Name:  WP PHP Skill test
 * Description:  WP PHP Skill test Plugin
 */

if (!is_blog_installed()) {
    return;
}

/**
 * Require autoload file
 */
require_once('vendor'.DIRECTORY_SEPARATOR.'autoload.php');

/**
 * Initialize Plugin Loader
 */
new \PauPenin\WPSkillTest\PluginLoader();

/**
 * Debug helper
 */
if (! function_exists('dd')) {
    function dd($data, $continue = false)
    {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';

        ($continue) ?: die();
    }
}