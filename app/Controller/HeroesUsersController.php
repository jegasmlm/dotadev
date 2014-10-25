<?php

App::uses('AppController', 'Controller');
/**
 * HeroesUsers Controller
 *
 * @property HeroesUser $HeroesUser
 * @property PaginatorComponent $Paginator
 */
class HeroesUsersController extends AppController {

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
		$this->HeroesUser->recursive = 0;
		$this->set('heroesUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->HeroesUser->exists($id)) {
			throw new NotFoundException(__('Invalid heroes user'));
		}
		$options = array('conditions' => array('HeroesUser.' . $this->HeroesUser->primaryKey => $id));
		$this->set('heroesUser', $this->HeroesUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HeroesUser->create();
			if ($this->HeroesUser->save($this->request->data)) {
				$this->Session->setFlash(__('The heroes user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The heroes user could not be saved. Please, try again.'));
			}
		}
		$users = $this->HeroesUser->User->find('list');
		$heroes = $this->HeroesUser->Hero->find('list');
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
		if (!$this->HeroesUser->exists($id)) {
			throw new NotFoundException(__('Invalid heroes user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HeroesUser->save($this->request->data)) {
				$this->Session->setFlash(__('The heroes user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The heroes user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HeroesUser.' . $this->HeroesUser->primaryKey => $id));
			$this->request->data = $this->HeroesUser->find('first', $options);
		}
		$users = $this->HeroesUser->User->find('list');
		$heroes = $this->HeroesUser->Hero->find('list');
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
		$this->HeroesUser->id = $id;
		if (!$this->HeroesUser->exists()) {
			throw new NotFoundException(__('Invalid heroes user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->HeroesUser->delete()) {
			$this->Session->setFlash(__('The heroes user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The heroes user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
