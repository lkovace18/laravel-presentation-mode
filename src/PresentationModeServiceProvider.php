<?php
namespace lKovace18\PresentationMode;

use Illuminate\Support\ServiceProvider;

class PresentationModeServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application events.
	 */
	public function boot() {
		$this->loadRoutesFrom(__DIR__ . '/routes/routes.php');
		$this->loadTranslationsFrom(__DIR__ . '/translations', 'presentation-mode');
		$this->loadViewsFrom(__DIR__ . '/views', 'presentation-mode');

		$this->publishes([
			__DIR__ . '/translations' => resource_path('lang/vendor/presentation-mode'),
		], 'translations');

		$this->publishes([
			__DIR__ . '/views' => resource_path('views/vendor/presentation-mode'),
		], 'views');

		$this->publishes([
			__DIR__ . '/config/presentation-mode.php' => config_path('presentation-mode.php'),
		], 'config');

		$this->mergeConfigFrom(__DIR__ . '/config/presentation-mode.php', 'presentation-mode');
	}

	/**
	 * Register the service provider.
	 */
	public function register() {
		$this->mergeConfigFrom(__DIR__ . '/config/presentation-mode.php', 'presentation-mode');

		$router = $this->app['router'];

		$router->macro('presentationMode', function ($url) use ($router) {
			if (!config('presentation-mode.presentation_mode_enabled')) {
				return;
			}

			if (!$url) {
				$url = config('presentation-mode.demo_url');
			}

			$router->get($url, '\lKovace18\PresentationMode\Http\Controllers\PresentationModeController@grantAccess');
		});
	}
}
