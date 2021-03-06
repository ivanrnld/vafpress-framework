<?php

return array(

	////////////////////////
	// Main Configuration //
	////////////////////////

	/**
	 * Will always load option values from option.php/xml default values, not DB,
	 * so you can play with the option.php/xml freely.
	 */
	'dev_mode'			=> true,

	/**
	 * Automatically assign 'name' to each grouping class
	 */
	'auto_group_naming' => true,

	/**
	 * Option name in DB
	 */
	'option_key'        => 'vp_option',

	/**
	 * Minimum Role to access the option page
	 */
	'role'              => 'administrator',

	/**
	 * Slug of option page menu under appereance
	 */
	'menu_page_slug'    => 'vp_theme_option',
	
	/**
	 * Set this the same as your text domain
	 */
	'theme_text_domain' => 'vafpress',

);

/**
 * EOF
 */