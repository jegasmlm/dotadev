<?php
App::uses('AppController', 'Controller');
/**
 * Heroes Controller
 *
 * @property Hero $Hero
 * @property PaginatorComponent $Paginator
 */
class HeroesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

    public function beforeFilter()
	{
		parent::beforeFilter();
		$this->Auth->allow('home', 'randomTeam', 'randomTeamByStrategy');
	}

/**
 * index method
 *
 * @return void
 */
	public function index($filterString=null)
    {
        $this->Hero->recursive = 0;

        if ($this->request->is('post'))
        $this->set('heroes', $this->Paginator->paginate('Hero', array('Hero.name LIKE' => "%".$this->request->data['Heroes']['busqueda']."%")));
        else
            $this->set('heroes', $this->Paginator->paginate());
        $this->render('index');
	}

    public function search($filterString=null) {
        $this ->Hero->recursive = 0;

        if($filterString != null)
            $this->set('heroes', $this->Paginator->paginate('Hero', array('Hero.name LIKE' => "%$filterString%")));
        else
            $this->set('heroes', $this->Paginator->paginate());
        $this->render('index');
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
		//$options = array('conditions' => array('Hero.' . $this->Hero->primaryKey => $id));
        $this->set(array('hero' => $this->Hero->view($id), 'topHeroRoles' => $this->Hero->RolesHero->getTopRolesByHero($id)));
 /*       	$this->set(array(
				'hero' => $this->Hero->view($id),
				'topHeroRoles' => $this->Hero->getTopRoles($id),
				));*/
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

    public function home(){
        $this->set('heroes', $this->Hero->getHeroOrderedByGroups());
    }

    public function randomTeam(){
        $heroes = $this->Hero->getRandomTeam();
        $this->set('randomTeam', $heroes);
        $this->set('rolesAvg', $this->Hero->RolesHero->getAverageLevelsPerRole($heroes));
    }

    public function randomTeamByStrategy($strategy_id=null){
        if($strategy_id==null)
            $roles = $this->Hero->RolesHero->Role->getRolesByStrategy(1);
        else
            $roles = $this->Hero->RolesHero->Role->getRolesByStrategy($strategy_id);
        $heroes = $this->Hero->RolesHero->getRandomTeamByRoles($roles);
        $this->set('Strategy', $roles);
        $this->set('randomTeam', $heroes);
        $this->set('rolesAvg', $this->Hero->RolesHero->getAverageLevelsPerRole($heroes));
    }
}
