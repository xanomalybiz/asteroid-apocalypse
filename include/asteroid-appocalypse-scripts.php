<?php
//addscripts
	function aaa_load_scripts()
	{
		wp_enqueue_style('aaa-main-style', plugins_url() . '/asteroid-appocalypse/css/custom.css');
		wp_enqueue_script('aaa-main-script', plugins_url() . '/asteroid-appocalypse/js/main.js', array('jquery'));
	}
	add_action('wp_enqueue_scripts', 'aaa_load_scripts');