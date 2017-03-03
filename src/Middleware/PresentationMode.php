<?php

namespace lKovace18\PresentationMode\Middleware;

use App;
use Closure;

class PresentationMode {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next) {
		// if in a production do nothing
		if (!App::environment('stage')) {
			return $next($request);
		}

		$secureKey = $request->input('secure_key');
		$secureCookie = $request->cookie('organizatori_demo');

		if (!empty($secureCookie) && $secureCookie = 'org.dev@#443952') {
			return $next($request);
		}

		if (!empty($secureKey) && $secureKey = 'org.dev@#443952') {
			$cookie = cookie('organizatori_demo', 'org.dev@#443952', 3600);
			$response = $next($request);
			return $response->withCookie($cookie);
		}

		return abort(403, 'Application is under development');
	}
}
