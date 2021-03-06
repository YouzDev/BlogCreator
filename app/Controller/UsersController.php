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

# use Cake\Validation\Validation;

class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
<<<<<<< HEAD
	public $components = array('Paginator', 'Flash', 'Session');	
	#public $components = array('Session', 'Cookie', 'Auth');
=======
>>>>>>> 9893b848313a69405e5cc432407e6b56eec3ff14




public $components = array('Paginator', 'Flash', 'Session');	
#public $components = array('Session', 'Cookie', 'Auth');


public function login() {
			

			if($this->request->is('post')) {
				if($this->Auth->login()) {
					$this->redirect('/Blog');
					$this->Session->setFlash("Vous êtes connecté", "notif"); 
				}
				else {
			#$this->Session->setFlash("Votre login ou votre mot de passe est mauvais"); 
					echo "HEY FDP CALME TOI";			

				}
			}

		}

		public function logout() {
			$this->Auth->logout();
			$this->redirect($this->referer('/'));

<<<<<<< HEAD
	public function logout() {
	$this->Auth->logout();
	$this->redirect('/Users/login');
	
}
=======
		}
>>>>>>> 9893b848313a69405e5cc432407e6b56eec3ff14

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
<<<<<<< HEAD
	public function view($id = null) {
		/*if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
		*/
		if (!$id) {
            throw new NotFoundException(__('Post non valide'));
        }

        $users = $this->Users->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Post non valide'));
        }
        
        if(!empty($this->data)) {
            $this->Comment->save($this->data);
            return $this->redirect('/Users/' . $id);
           // $this->redirect('/posts');
        }


        $this->set('user', $users);
=======
public function view($id = null) {
	if (!$this->User->exists($id)) {
		throw new NotFoundException(__('Invalid user'));
>>>>>>> 9893b848313a69405e5cc432407e6b56eec3ff14
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
			
			return $this->redirect('/login');
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

