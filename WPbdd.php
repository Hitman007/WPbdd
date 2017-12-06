<?php
/*
Plugin Name: WordPress Behavior Driven Development
Plugin URI: 
Description: 
Version: 1.0
Author: Jim Maguire
Author URI: https://customrayguns.com
*/

namespace WPbbb;

$plugin_dir_path = plugin_dir_path(__FILE__);
require_once ($plugin_dir_path . 'src/WPbdd/autoloader.php');

$WPbddPlugin = new WPbddPlugin;
//$WPbddPlugin->activateShortCode();