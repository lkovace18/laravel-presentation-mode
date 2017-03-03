<?php
use lKovace18\PresentationMode\PresentationMode;

if (!function_exists('presentationMode')) {
	function presentationMode(): PresentationMode {
		return app(PresentationMode::class);
	}
}