<?php
App::uses('AppController', 'Controller');
/**
 * SubmitLocations Controller
 *
 * @property SubmitLocation $SubmitLocation
 * @property PaginatorComponent $Paginator
 */
class SubmitLocationsController extends AppController {

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
		$this->SubmitLocation->recursive = 0;
		$this->set('submitLocations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SubmitLocation->exists($id)) {
			throw new NotFoundException(__('Invalid submit location'));
		}
		$options = array('conditions' => array('SubmitLocation.' . $this->SubmitLocation->primaryKey => $id));
		$this->set('submitLocation', $this->SubmitLocation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SubmitLocation->create();
			if ($this->SubmitLocation->save($this->request->data)) {
				$this->Session->setFlash(__('The submit location has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The submit location could not be saved. Please, try again.'));
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
		if (!$this->SubmitLocation->exists($id)) {
			throw new NotFoundException(__('Invalid submit location'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SubmitLocation->save($this->request->data)) {
				$this->Session->setFlash(__('The submit location has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The submit location could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SubmitLocation.' . $this->SubmitLocation->primaryKey => $id));
			$this->request->data = $this->SubmitLocation->find('first', $options);
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
		$this->SubmitLocation->id = $id;
		if (!$this->SubmitLocation->exists()) {
			throw new NotFoundException(__('Invalid submit location'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SubmitLocation->delete()) {
			$this->Session->setFlash(__('The submit location has been deleted.'));
		} else {
			$this->Session->setFlash(__('The submit location could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
