<?php
/**
 * Bootstrap wordpress functions for plugin testing
 */
require_once('wordpress.php');

/**
 * Require plugin
 */
require_once('wp-skill-test.php');

/**
 * Mock initialize wordpress
 */
do_action('init');
