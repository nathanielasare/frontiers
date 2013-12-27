<?php
App::uses('IdfSubmission', 'Model');

/**
 * IdfSubmission Test Case
 *
 */
class IdfSubmissionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		$this->IdfSubmission = ClassRegistry::init('IdfSubmission');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->IdfSubmission);

		parent::tearDown();
	}

}
