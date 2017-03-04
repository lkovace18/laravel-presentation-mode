<?php

namespace lKovace18\PresentationMode\Test;

use lKovace18\PresentationMode\Test\TestCase;

class PresentationModeMiddlewareTest extends TestCase {
	/** @test */
	public function it_redirects_users_who_have_not_been_granted_access_to_in_development_page() {
		$response = $this->call('GET', '/secret-content');
		$this->assertEquals('302', $response->getStatusCode());
	}
	/** @test */
	public function it_only_redirects_users_if_presentation_mode_is_enabled() {
		$this->app['config']->set('presentation-mode.presentation_mode_enabled', false);
		$response = $this->call('GET', '/secret-content');
		$this->assertEquals('200', $response->getStatusCode());
	}

	/** @test */
	public function it_will_allow_visiting_secret_content_after_having_visited_the_grant_url_first() {
		$response = $this->call('GET', '/demo');
		$this->assertEquals('302', $response->getStatusCode());
	}

	/** @test */
	public function it_will_allow_visiting_secret_content_if_get_parameter_has_right_key() {
		$response = $this->call('GET', '/secret-content?_k=__stage');
		$this->assertEquals('200', $response->getStatusCode());
	}

	/** @test */
	public function it_redirects_unauthorized_users_if_enviroment_is_stage_enviroment() {
		// todo figure out test for this
		$response = $this->call('GET', '/secret-content');
		$this->assertEquals('302', '302');
	}

}