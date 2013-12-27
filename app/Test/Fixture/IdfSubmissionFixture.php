<?php
/**
 * IdfSubmissionFixture
 *
 */
class IdfSubmissionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'Creation_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'idf_Received_date' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'idf_number' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'document_type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'submit_Location_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'no_of_partials' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'importer' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'InvoiceNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'site_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'remarks' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_idfs_docT_id' => array('column' => 'document_type_id', 'unique' => 0),
			'fk_idfs_subloc_id' => array('column' => 'submit_Location_id', 'unique' => 0),
			'fk_idfs_user_id' => array('column' => 'user_id', 'unique' => 0),
			'fk_idfs_site_id' => array('column' => 'site_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'Creation_date' => '2013-12-28 00:04:20',
			'idf_Received_date' => 'Lorem ipsum dolor sit amet',
			'idf_number' => 'Lorem ipsum dolor sit amet',
			'document_type_id' => 1,
			'submit_Location_id' => 1,
			'no_of_partials' => 'Lorem ipsum dolor sit amet',
			'importer' => 'Lorem ipsum dolor sit amet',
			'InvoiceNo' => 'Lorem ipsum dolor sit amet',
			'user_id' => 1,
			'site_id' => 1,
			'remarks' => 'Lorem ipsum dolor sit amet'
		),
	);

}
