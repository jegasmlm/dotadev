<?php

App::uses('AppController', 'Controller');
/**
 * HeroesHeros Controller
 *
 * @property HeroesHero $HeroesHero
 * @property PaginatorComponent $Paginator
 */
class HeroesHerosController extends AppController {

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
		$this->HeroesHero->recursive = 0;
		$this->set('heroesHeros', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->HeroesHero->exists($id)) {
			throw new NotFoundException(__('Invalid heroes hero'));
		}
		$options = array('conditions' => array('HeroesHero.' . $this->HeroesHero->primaryKey => $id));
		$this->set('heroesHero', $this->HeroesHero->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HeroesHero->create();
			if ($this->HeroesHero->save($this->request->data)) {
				$this->Session->setFlash(__('The heroes hero has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The heroes hero could not be saved. Please, try again.'));
			}
		}
		$heroes = $this->HeroesHero->Hero->find('list');
		$counters = $this->HeroesHero->Counter->find('list');
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
		if (!$this->HeroesHero->exists($id)) {
			throw new NotFoundException(__('Invalid heroes hero'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HeroesHero->save($this->request->data)) {
				$this->Session->setFlash(__('The heroes hero has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The heroes hero could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HeroesHero.' . $this->HeroesHero->primaryKey => $id));
			$this->request->data = $this->HeroesHero->find('first', $options);
		}
		$heroes = $this->HeroesHero->Hero->find('list');
		$counters = $this->HeroesHero->Counter->find('list');
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
		$this->HeroesHero->id = $id;
		if (!$this->HeroesHero->exists()) {
			throw new NotFoundException(__('Invalid heroes hero'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->HeroesHero->delete()) {
			$this->Session->setFlash(__('The heroes hero has been deleted.'));
		} else {
			$this->Session->setFlash(__('The heroes hero could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
