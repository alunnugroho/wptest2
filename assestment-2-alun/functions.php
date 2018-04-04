<?php


function enqueueScripts()
{
	wp_enqueue_script('jquery');
	wp_register_script('app', get_template_directory_uri() . '/assets/app.js', '', null, true);

	wp_enqueue_script('app');
}

add_action('wp_enqueue_scripts', 'enqueueScripts');