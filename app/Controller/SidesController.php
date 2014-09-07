<?php
App::uses('AppController', 'Controller');
/**
 * Sides Controller
 *
 * @property Side $Side
 * @property PaginatorComponent $Paginator
 */
class SidesController extends AppController {

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
		$this->Side->recursive = 0;
		$this->set('sides', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Side->exists($id)) {
			throw new NotFoundException(__('Invalid side'));
		}
		$options = array('conditions' => array('Side.' . $this->Side->primaryKey => $id));
		$this->set('side', $this->Side->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Side->create();
			if ($this->Side->save($this->request->data)) {
				$this->Session->setFlash(__('The side has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The side could not be saved. Please, try again.'));
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
		if (!$this->Side->exists($id)) {
			throw new NotFoundException(__('Invalid side'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Side->save($this->request->data)) {
				$this->Session->setFlash(__('The side has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The side could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Side.' . $this->Side->primaryKey => $id));
			$this->request->data = $this->Side->find('first', $options);
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
		$this->Side->id = $id;
		if (!$this->Side->exists()) {
			throw new NotFoundException(__('Invalid side'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Side->delete()) {
			$this->Session->setFlash(__('The side has been deleted.'));
		} else {
			$this->Session->setFlash(__('The side could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
