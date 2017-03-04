<?php

namespace lKovace18\PresentationMode\Test;

use Illuminate\Foundation\Application;
use lKovace18\PresentationMode\Middleware\PresentationModeMiddleware;
use lKovace18\PresentationMode\PresentationModeServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use Route;

abstract class TestCase extends Orchestra {

	/**
	 * @var array
	 */
	protected $config;

	public function setUp() {
		parent::setUp();
		$this->registerMiddleWare();
		$this->setUpRoutes($this->app);
		$this->config = $this->app['config']->get('presentation-mode');
	}

	/**
	 * @param \Illuminate\Foundation\Application $app
	 */
	protected function getEnvironmentSetUp($app) {
		$app['config']->set('app.key', '86E7Nz59bGRb67MATft674jrpF7DcOQm');
		$app['config']->set('presentation-mode.presentation_mode_enabled', true);
		$app['config']->set('presentation-mode.demo_entery_redirect_url', '/secret-page');
	}
	/**
	 * @param \Illuminate\Foundation\Application $app
	 *
	 * @return array
	 */
	protected function getPackageProviders($app) {
		return [
			PresentationModeServiceProvider::class,
		];
	}
	protected function registerMiddleware() {
		$this->app->make('Illuminate\Contracts\Http\Kernel')->pushMiddleware(PresentationModeMiddleware::class);
	}

	/**
	 * @param Application $app
	 */
	protected function setUpRoutes($app) {

		Route::presentationMode('demo-access');

		Route::any('/secret-content', [function () {
			return 'some secret content';
		}]);

		Route::any('/under-development', function () {
			return 'site under development';
		});

	}

}