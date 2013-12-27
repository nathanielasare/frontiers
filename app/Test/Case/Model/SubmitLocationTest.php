<?php
App::uses('SubmitLocation', 'Model');

/**
 * SubmitLocation Test Case
 *
 */
class SubmitLocationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.submit_location'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SubmitLocation = ClassRegistry::init('SubmitLocation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SubmitLocation);

		parent::tearDown();
	}

}
