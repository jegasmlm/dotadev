<?php
App::uses('AppController', 'Controller');
/**
 * StrategiesRoles Controller
 *
 * @property StrategiesRole $StrategiesRole
 * @property PaginatorComponent $Paginator
 */
class StrategiesRolesController extends AppController {

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
		$this->StrategiesRole->recursive = 0;
		$this->set('strategiesRoles', $this->Paginator->paginate());
        $this->StrategiesRole->getRoles(0);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->StrategiesRole->exists($id)) {
			throw new NotFoundException(__('Invalid strategies role'));
		}
		$options = array('conditions' => array('StrategiesRole.' . $this->StrategiesRole->primaryKey => $id));
		$this->set('strategiesRole', $this->StrategiesRole->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StrategiesRole->create();
			if ($this->StrategiesRole->save($this->request->data)) {
				//$this->Session->setFlash(__('The strategies role has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The strategies role could not be saved. Please, try again.'));
			}
		}
		$roles = $this->StrategiesRole->Role->find('list');
		$strategies = $this->StrategiesRole->Strategy->find('list');
		$this->set(compact('roles', 'strategies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->StrategiesRole->exists($id)) {
			throw new NotFoundException(__('Invalid strategies role'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->StrategiesRole->save($this->request->data)) {
				$this->Session->setFlash(__('The strategies role has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The strategies role could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StrategiesRole.' . $this->StrategiesRole->primaryKey => $id));
			$this->request->data = $this->StrategiesRole->find('first', $options);
		}
		$roles = $this->StrategiesRole->Role->find('list');
		$strategies = $this->StrategiesRole->Strategy->find('list');
		$this->set(compact('roles', 'strategies'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->StrategiesRole->id = $id;
		if (!$this->StrategiesRole->exists()) {
			throw new NotFoundException(__('Invalid strategies role'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->StrategiesRole->delete()) {
			//$this->Session->setFlash(__('The strategies role has been deleted.'));
		} else {
			//$this->Session->setFlash(__('The strategies role could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


}
