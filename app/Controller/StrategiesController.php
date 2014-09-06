<?php
App::uses('AppController', 'Controller');
/**
 * Strategies Controller
 *
 * @property Strategy $Strategy
 * @property PaginatorComponent $Paginator
 */
class StrategiesController extends AppController {

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
		$this->Strategy->recursive = 0;
		$this->set('strategies', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Strategy->exists($id)) {
			throw new NotFoundException(__('Invalid strategy'));
		}
		$options = array('conditions' => array('Strategy.' . $this->Strategy->primaryKey => $id));
		$this->set('strategy', $this->Strategy->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Strategy->create();
			if ($this->Strategy->save($this->request->data)) {
				$this->Session->setFlash(__('The strategy has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The strategy could not be saved. Please, try again.'));
			}
		}
		$roles = $this->Strategy->Role->find('list');
		$this->set(compact('roles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Strategy->exists($id)) {
			throw new NotFoundException(__('Invalid strategy'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Strategy->save($this->request->data)) {
				$this->Session->setFlash(__('The strategy has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The strategy could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Strategy.' . $this->Strategy->primaryKey => $id));
			$this->request->data = $this->Strategy->find('first', $options);
		}
		$roles = $this->Strategy->Role->find('list');
		$this->set(compact('roles'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Strategy->id = $id;
		if (!$this->Strategy->exists()) {
			throw new NotFoundException(__('Invalid strategy'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Strategy->delete()) {
			$this->Session->setFlash(__('The strategy has been deleted.'));
		} else {
			$this->Session->setFlash(__('The strategy could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
