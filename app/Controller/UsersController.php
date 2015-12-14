<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');


	public function login() {

	if ($this->request->is('post')) {

		var_dump('toto');
   
           if ($this->Auth->login()) {
        
        	return $this->redirect($this->Auth->redirect());
               
               
           } else{
                   
               
               $this->Session->setFlash(__('<button type="button" class="close" data-dismiss="alert"><span class="glyphicon glyphicons remove_2"></span></button><span class="contenu"><span class="glyphicon glyphicons ban"></span>Identifiant ou mot de passe incorrect</span>'),
                    'default',
                    array('class' => 'alert alert-dismissable alert-danger col-xs-8 col-xs-offset-2 col-sm-8 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3'),
                    'auth'
                );
           }

           
           
           } }


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function inscription() {
	if($this->request->is('post')) {
		$tableau = $this->request->data;
		$tableau['User']['id'] = null;
		if(!empty($tableau['User']['password'])) {
			$tableau['User']['password'] = Security::hash($tableau['User']['password'], null,true);
		}

		if($this->User->save($tableau, true, array('login', 'nom', 'prenom', 'password', 'email', 'ddn'))) {
			$this->Session->setFlash("Votre inscription à été faite !", "notif", array('type' => 'success')); 
		} else {
			
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
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Flash->success(__('The user has been deleted.'));
		} else {
			$this->Flash->error(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
