<?php
/*
Plugin Name: BJH Website Assistant
Version:     1.0
Author:      Billy.J.Hee 
Author URI:  http://www.bjhee.com/
Plugin URI:  https://github.com/bjhee/bjh-site-assistant
Description: The WordPress plugin that assists your web site to work better (especially in China).
License:     The MIT License - http://mit-license.org/
*/

define('BSA_PATH', dirname(__FILE__));
require_once BSA_PATH . '/init.php';
require_once BSA_PATH . '/settings.php';

// Register the function to be called when the plugin is enabled
register_activation_hook(__FILE__, 'bjh_site_assistant_install');

// Register the function to be called when the plugin is disabled
register_deactivation_hook(__FILE__, 'bjh_site_assistant_remove');
?>
