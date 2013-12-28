<?php
App::uses('AppController', 'Controller');
/**
 * OfficeLocations Controller
 *
 * @property OfficeLocation $OfficeLocation
 * @property PaginatorComponent $Paginator
 */
class OfficeLocationsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->OfficeLocation->recursive = 0;
		$this->set('officeLocations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->OfficeLocation->exists($id)) {
			throw new NotFoundException(__('Invalid office location'));
		}
		$options = array('conditions' => array('OfficeLocation.' . $this->OfficeLocation->primaryKey => $id));
		$this->set('officeLocation', $this->OfficeLocation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OfficeLocation->create();
			if ($this->OfficeLocation->save($this->request->data)) {
				$this->Session->setFlash(__('The office location has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The office location could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->OfficeLocation->exists($id)) {
			throw new NotFoundException(__('Invalid office location'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->OfficeLocation->save($this->request->data)) {
				$this->Session->setFlash(__('The office location has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The office location could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('OfficeLocation.' . $this->OfficeLocation->primaryKey => $id));
			$this->request->data = $this->OfficeLocation->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->OfficeLocation->id = $id;
		if (!$this->OfficeLocation->exists()) {
			throw new NotFoundException(__('Invalid office location'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->OfficeLocation->delete()) {
			$this->Session->setFlash(__('The office location has been deleted.'));
		} else {
			$this->Session->setFlash(__('The office location could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
