<?php
namespace lKovace18\PresentationMode;

class PresentationModeServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application events.
	 */
	public function boot() {

		$this->publishes([
			__DIR__ . '/config/presentation-mode.php' => config_path('presentation-mode.php'),
		], 'config');

		$this->mergeConfigFrom(__DIR__ . '/config/presentation-mode.php', 'presentation-mode');
	}

	/**
	 * Register the service provider.
	 */
	public function register() {

	}

}