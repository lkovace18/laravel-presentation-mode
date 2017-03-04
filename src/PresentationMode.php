<?php
namespace lKovace18\PresentationMode;

use App;
use Illuminate\Http\Request;

class PresentationMode {

	protected $config;

	function __construct() {
		$this->config = config('presentation-mode');
	}

	public function isOn(): bool {

		if (App::environment($this->config['stage_enviroment'])) {
			return true;
		}

		if ($this->config['presentation_mode_enabled']) {
			return true;
		}

		return false;
	}

	/**
	 * Check if request has Access
	 *
	 * @param \Illuminate\Http\Request $request
	 *
	 * @return bool
	 */
	public function hasAccess(Request $request): bool {

		if (auth()->check()) {
			return true;
		}

		if (session()->has($this->config['session_name'])) {
			return true;
		}

		if ($this->validateRequestKey($request)) {
			return true;
		}

		return false;
	}

	/**
	 * Validates if there is get parameter
	 *
	 * @param \Illuminate\Http\Request $request
	 *
	 * @return bool
	 */
	protected function validateRequestKey(Request $request): bool{
		$secureKey = $request->input('_k');
		if ($secureKey == $this->config['secure_key']) {
			session()->put($this->config['session_name'], true);
			return true;
		}

		return false;
	}
}
