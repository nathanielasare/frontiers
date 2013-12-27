<?php
App::uses('AppModel', 'Model');
/**
 * DocumentType Model
 *
 * @property IdfSubmission $IdfSubmission
 */
class DocumentType extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'IdfSubmission' => array(
			'className' => 'IdfSubmission',
			'foreignKey' => 'document_type_id',
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
