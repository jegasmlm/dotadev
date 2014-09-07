<?php
App::uses('AppController', 'Controller');
/**
 * RolesHeros Controller
 *
 * @property RolesHero $RolesHero
 * @property PaginatorComponent $Paginator
 */
class RolesHerosController extends AppController {

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
		$this->RolesHero->recursive = 0;
		$this->set('rolesHeros', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RolesHero->exists($id)) {
			throw new NotFoundException(__('Invalid roles hero'));
		}
		$options = array('conditions' => array('RolesHero.' . $this->RolesHero->primaryKey => $id));
		$this->set('rolesHero', $this->RolesHero->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RolesHero->create();
			if ($this->RolesHero->save($this->request->data)) {
				$this->Session->setFlash(__('The roles hero has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The roles hero could not be saved. Please, try again.'));
			}
		}
		$roles = $this->RolesHero->Role->find('list');
		$heroes = $this->RolesHero->Hero->find('list');
		$this->set(compact('roles', 'heroes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->RolesHero->exists($id)) {
			throw new NotFoundException(__('Invalid roles hero'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->RolesHero->save($this->request->data)) {
				$this->Session->setFlash(__('The roles hero has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The roles hero could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RolesHero.' . $this->RolesHero->primaryKey => $id));
			$this->request->data = $this->RolesHero->find('first', $options);
		}
		$roles = $this->RolesHero->Role->find('list');
		$heroes = $this->RolesHero->Hero->find('list');
		$this->set(compact('roles', 'heroes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->RolesHero->id = $id;
		if (!$this->RolesHero->exists()) {
			throw new NotFoundException(__('Invalid roles hero'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->RolesHero->delete()) {
			$this->Session->setFlash(__('The roles hero has been deleted.'));
		} else {
			$this->Session->setFlash(__('The roles hero could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
