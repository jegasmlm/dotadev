<?php
App::uses('AppController', 'Controller');
/**
 * UsersHeros Controller
 *
 * @property UsersHero $UsersHero
 * @property PaginatorComponent $Paginator
 */
class UsersHerosController extends AppController {

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
		$this->UsersHero->recursive = 0;
		$this->set('usersHeros', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UsersHero->exists($id)) {
			throw new NotFoundException(__('Invalid users hero'));
		}
		$options = array('conditions' => array('UsersHero.' . $this->UsersHero->primaryKey => $id));
		$this->set('usersHero', $this->UsersHero->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UsersHero->create();
			if ($this->UsersHero->save($this->request->data)) {
				$this->Session->setFlash(__('The users hero has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users hero could not be saved. Please, try again.'));
			}
		}
		$users = $this->UsersHero->User->find('list');
		$heroes = $this->UsersHero->Hero->find('list');
		$this->set(compact('users', 'heroes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UsersHero->exists($id)) {
			throw new NotFoundException(__('Invalid users hero'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UsersHero->save($this->request->data)) {
				$this->Session->setFlash(__('The users hero has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users hero could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UsersHero.' . $this->UsersHero->primaryKey => $id));
			$this->request->data = $this->UsersHero->find('first', $options);
		}
		$users = $this->UsersHero->User->find('list');
		$heroes = $this->UsersHero->Hero->find('list');
		$this->set(compact('users', 'heroes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->UsersHero->id = $id;
		if (!$this->UsersHero->exists()) {
			throw new NotFoundException(__('Invalid users hero'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UsersHero->delete()) {
			$this->Session->setFlash(__('The users hero has been deleted.'));
		} else {
			$this->Session->setFlash(__('The users hero could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
