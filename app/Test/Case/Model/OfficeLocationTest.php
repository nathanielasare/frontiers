<?php
App::uses('OfficeLocation', 'Model');

/**
 * OfficeLocation Test Case
 *
 */
class OfficeLocationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.office_location',
		'app.idf_submission',
		'app.document_type',
		'app.submit_location',
		'app.user',
		'app.site'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OfficeLocation = ClassRegistry::init('OfficeLocation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OfficeLocation);

		parent::tearDown();
	}

}
