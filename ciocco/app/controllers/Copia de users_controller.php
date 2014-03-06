<?php
   
   class UsersController extends AppController
   {
		var $name = 'Users';
		var $helpers = array('Html', 'Form', 'Time');
		var $components = array('Auth'); //no es necesario si se declara en el app controller
		

		
		function index() {
		//cargo el modelo Extra para poder utilizarlo		
//		$this->loadModel('Extra');
//		$this->set('extras', $this->Extra->find('all'));
		
}
//		function prueba() {

//	}

	
		
		function beforeFilter() {
			parent::beforeFilter(); 
//			
//			$this->Auth->allowedActions = array('*');
//			$this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'index');
			$this->Auth->loginRedirect = array('controller' => 'pedidos', 'action' => 'add');
			//agregado para registrar usuario
			$this->Auth->allow('register');
		}

//		function add() {
		//cargo el modelo Extra para poder utilizarlo
//		$this->loadModel('Extra');
//			if (!empty($this->data)) {
//				$this->Extra->create();
//			if ($this->Extra->save($this->data)) {
//				$this->Session->setFlash('Los Registros han sido salvados');
//				$this->redirect(array('action'=>'index'), null, true);
//			} else {
//				$this->Session->setFlash('Los Registro no se han salvado. Prueba de nuevo.');
//			}
//			}

//		}

//funcion agregada para registrar usuario
		function register() {
		$this->Auth->logout();
		if (!empty($this->data)){
		$this->User->create();
		if ($this->User->save($this->data)) {
		$this->Auth->login($this->data); //autologin
	//	$this->redirect(array('action'=>'index'));
		$this->redirect(array('controller' => 'pedidos', 'action' => 'add'));
		
		}
		}
		}

		
		function login() {
		}
		
		function logout() {
			$this->Session->setFlash('Nos vemos.');
			$this->redirect($this->Auth->logout());
		}
   }
 
   
?>