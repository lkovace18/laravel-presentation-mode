<?php
namespace lKovace18\PresentationMode\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use lKovace18\PresentationMode\PresentationMode;

class PresentationModeMiddleware {

	protected $config;

	protected $presentationMode;

	function __construct() {
		$this->config = config('presentation-mode');
		$this->presentationMode = new PresentationMode;
	}

	/**
	 * Handles request.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \Closure                 $next
	 *
	 * @return mixed
	 */
	public function handle(Request $request, Closure $next) {

		if ($this->presentationMode->isOn($request)) {

			if (!$this->presentationMode->hasAccess($request)) {
				return new RedirectResponse($this->config['under_development_url']);
			}

		}

		return $next($request);
	}

}