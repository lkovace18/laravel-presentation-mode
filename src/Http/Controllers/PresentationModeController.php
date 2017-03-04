<?php
namespace lKovace18\PresentationMode\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;

class PresentationModeController extends Controller {

	public function showDemo(): RedirectResponse{
		$config = config('presentation-mode');
		session()->put($config[session_name], true);
		return new RedirectResponse(
			config($config[demo_entery_redirect_url])
		);
	}

}