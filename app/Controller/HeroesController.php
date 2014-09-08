<?php
App::uses('AppController', 'Controller');
/**
 * Heroes Controller
 *
 * @property Hero $Hero
 * @property RolesHero $RolesHero
 * @property PaginatorComponent $Paginator
 */
class HeroesController extends AppController {

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
		$this->Hero->recursive = 0;
		$this->set('heroes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Hero->exists($id)) {
			throw new NotFoundException(__('Invalid hero'));
		}
        	$this->set(array(
				'hero' => $this->Hero->view($id), 
				'topHeroRoles' => $this->Hero->getTopRoles($id),
				));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Hero->create();
			if ($this->Hero->save($this->request->data)) {
				$this->Session->setFlash(__('The hero has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hero could not be saved. Please, try again.'));
			}
		}
		$sides = $this->Hero->Side->find('list');
		$groups = $this->Hero->Group->find('list');
		$this->set(compact('sides', 'groups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Hero->exists($id)) {
			throw new NotFoundException(__('Invalid hero'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Hero->save($this->request->data)) {
				$this->Session->setFlash(__('The hero has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hero could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Hero.' . $this->Hero->primaryKey => $id));
			$this->request->data = $this->Hero->find('first', $options);
		}
		$sides = $this->Hero->Side->find('list');
		$groups = $this->Hero->Group->find('list');
		$this->set(compact('sides', 'groups'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Hero->id = $id;
		if (!$this->Hero->exists()) {
			throw new NotFoundException(__('Invalid hero'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Hero->delete()) {
			$this->Session->setFlash(__('The hero has been deleted.'));
		} else {
			$this->Session->setFlash(__('The hero could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
