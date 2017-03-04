<?php

namespace lKovace18\PresentationMode\Facades;

use Illuminate\Support\Facades\Facade;
use lKovace18\PresentationMode\PresentationMode;

/**
 * @see lKovace18\PresentationMode\PresentationMode
 */
class Socialite extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() {
		return PresentationMode::class;
	}
}
