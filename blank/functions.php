<?php

if ( function_exists('register_sidebars') )
	register_sidebars(1);

if ( function_exists('register_nav_menus') ) {
	register_nav_menus(array('topmenu'=>'Menu górne'));
}

if ( function_exists('add_theme_support') ) {
	add_theme_support('post-thumbnails');
}
