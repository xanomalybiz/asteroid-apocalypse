<?php
/**
* Plugin Name: Asteroid Appocalypse Alarm
* Description: This widget tracks NASA's data on near Earth Asteroids and alarms users immediatly if a hazardous asteroid is found.
* Version: 1.0
* Author: Xanomaly
**/

//Exit if accessed Directly
if(!defined('ABSPATH'))
{
	exit;	
}

//Load Class
require_once(plugin_dir_path(__FILE__) . '/include/asteroid-appocalypse-class.php');
//Load Scripts
require_once(plugin_dir_path(__FILE__) . '/include/asteroid-appocalypse-scripts.php');

function register_aaa()
{
	register_widget('Asteroid_Appocalypse_Alarm');
}
add_action('widgets_init', 'register_aaa');