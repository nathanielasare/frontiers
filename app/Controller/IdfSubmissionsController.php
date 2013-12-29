<?php
App::uses('AppController', 'Controller');
/**
 * IdfSubmissions Controller
 *
 * @property IdfSubmission $IdfSubmission
 * @property PaginatorComponent $Paginator
 */
class IdfSubmissionsController extends AppController {

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

        $documentTypes = $this->IdfSubmission->DocumentType->find('list');
        $officeLocations = $this->IdfSubmission->OfficeLocation->find('list');
        $users = $this->IdfSubmission->User->find('list');
        $sites = $this->IdfSubmission->Site->find('list');
		$this->IdfSubmission->recursive = 0;
		$this->set('idfSubmissions',$this->Paginator->paginate());
        $this->set(compact('documentTypes', 'officeLocations', 'users', 'sites'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->IdfSubmission->exists($id)) {
			throw new NotFoundException(__('Invalid idf submission'));
		}
		$options = array('conditions' => array('IdfSubmission.' . $this->IdfSubmission->primaryKey => $id));
		$this->set('idfSubmission', $this->IdfSubmission->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->IdfSubmission->create();
			if ($this->IdfSubmission->save($this->request->data)) {
				$this->Session->setFlash(__('The idf submission has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The idf submission could not be saved. Please, try again.'));
			}
		}
		$documentTypes = $this->IdfSubmission->DocumentType->find('list');
		$officeLocations = $this->IdfSubmission->OfficeLocation->find('list');
		$users = $this->IdfSubmission->User->find('list');
		$sites = $this->IdfSubmission->Site->find('list');
		$this->set(compact('documentTypes', 'officeLocations', 'users', 'sites'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->IdfSubmission->exists($id)) {
			throw new NotFoundException(__('Invalid idf submission'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->IdfSubmission->save($this->request->data)) {
				$this->Session->setFlash(__('The idf submission has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The idf submission could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('IdfSubmission.' . $this->IdfSubmission->primaryKey => $id));
			$this->request->data = $this->IdfSubmission->find('first', $options);
		}
		$documentTypes = $this->IdfSubmission->DocumentType->find('list');
		$officeLocations = $this->IdfSubmission->OfficeLocation->find('list');
		$users = $this->IdfSubmission->User->find('list');
		$sites = $this->IdfSubmission->Site->find('list');
		$this->set(compact('documentTypes', 'officeLocations', 'users', 'sites'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->IdfSubmission->id = $id;
		if (!$this->IdfSubmission->exists()) {
			throw new NotFoundException(__('Invalid idf submission'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->IdfSubmission->delete()) {
			$this->Session->setFlash(__('The idf submission has been deleted.'));
		} else {
			$this->Session->setFlash(__('The idf submission could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
