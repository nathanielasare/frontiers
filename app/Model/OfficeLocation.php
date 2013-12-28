<?php
App::uses('AppModel', 'Model');
/**
 * OfficeLocation Model
 *
 * @property IdfSubmission $IdfSubmission
 */
class OfficeLocation extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'IdfSubmission' => array(
			'className' => 'IdfSubmission',
			'foreignKey' => 'office_location_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
