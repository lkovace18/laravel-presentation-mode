<?php

return [

	/**
	 * stage enviroment
	 */
	'stage_enviroment' => 'stageMeBaby',

	/**
	 * enter url of your production site, to redirect unauthorized users from your stage site
	 */
	'production_url' => env('PRESENTATION_PRODUCTION_URL', null),

	/**
	 * turn on your presentation mode site
	 */
	'presentation_mode_enabled' => env('PRESENTATION_MODE', false),

	/**
	 *  key for authorize page preview when in stage or presentation mode
	 */
	'secure_key' => env('PRESENTATION_KEY', '__stage'),

	/**
	 *  redirect users in demo mode to
	 */
	'demo_entery_redirect_url' => env('PRESENTATION_ENTERY_URL', ''),

	/**
	 *  presentation entery point for your clients
	 */
	'demo_url' => 'access-demo',

	/**
	 *  session name for viewing site in presentation mode or in stage enviroment
	 */
	'session_name' => 'presentation-mode-access',

	/**
	 * url of under development page
	 */
	'under_development_url' => 'under_development',

];