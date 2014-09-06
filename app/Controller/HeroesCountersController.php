<?php
App::uses('AppController', 'Controller');
/**
 * HeroesCounters Controller
 *
 * @property HeroesCounter $HeroesCounter
 * @property PaginatorComponent $Paginator
 */
class HeroesCountersController extends AppController {

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
		$this->HeroesCounter->recursive = 0;
		$this->set('heroesCounters', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->HeroesCounter->exists($id)) {
			throw new NotFoundException(__('Invalid heroes counter'));
		}
		$options = array('conditions' => array('HeroesCounter.' . $this->HeroesCounter->primaryKey => $id));
		$this->set('heroesCounter', $this->HeroesCounter->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HeroesCounter->create();
			if ($this->HeroesCounter->save($this->request->data)) {
				$this->Session->setFlash(__('The heroes counter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The heroes counter could not be saved. Please, try again.'));
			}
		}
		$heroes = $this->HeroesCounter->Hero->find('list');
		$counters = $this->HeroesCounter->Counter->find('list');
		$this->set(compact('heroes', 'counters'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->HeroesCounter->exists($id)) {
			throw new NotFoundException(__('Invalid heroes counter'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HeroesCounter->save($this->request->data)) {
				$this->Session->setFlash(__('The heroes counter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The heroes counter could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HeroesCounter.' . $this->HeroesCounter->primaryKey => $id));
			$this->request->data = $this->HeroesCounter->find('first', $options);
		}
		$heroes = $this->HeroesCounter->Hero->find('list');
		$counters = $this->HeroesCounter->Counter->find('list');
		$this->set(compact('heroes', 'counters'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->HeroesCounter->id = $id;
		if (!$this->HeroesCounter->exists()) {
			throw new NotFoundException(__('Invalid heroes counter'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->HeroesCounter->delete()) {
			$this->Session->setFlash(__('The heroes counter has been deleted.'));
		} else {
			$this->Session->setFlash(__('The heroes counter could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
