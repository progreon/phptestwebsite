<?php
/**
 * Debugging
 */
ini_set('display_errors', 'On');
error_reporting(E_ALL);

/**
 * Root directory of installation.
 */
define('ROOT', getcwd() . '/');

/**
 * Using the controller.
 */
require 'controllers/controller.php';
$controller = new Controller();
$controller->handle_request();
