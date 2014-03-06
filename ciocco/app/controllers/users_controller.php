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

	///////////////////////////funcion original////////////////////////
		
//		function beforeFilter() {
//			parent::beforeFilter(); 
			
//			if ($this->data['User']['username'] == 'administrator') {
	//	debug($this->data);
//			$this->redirect(array('controller' => 'pedidos', 'action' => 'index'));
//			}
//			else {
	//			
	//			$this->Auth->allowedActions = array('*');
	//			$this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'index');
//			$this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'buscar');
			//agregado para registrar usuario
//			$this->Auth->allow('register');
//			}
//		}

///////////////////////////////////////////////////////////////////////////

		function beforeFilter() {
			parent::beforeFilter(); 
			
			if ($this->data['User']['username'] == '227722') {
			$this->redirect(array('controller' => 'pedidos', 'action' => 'index'));
			}
			else {
			$this->Auth->loginError = "Usuario NO existe, darlo de Alta!!!";
			$this->Auth->loginRedirect = array('controller' => 'pedidos', 'action' => 'add');
			$this->Auth->allow('register');
			}
		}

//funcion agregada para registrar usuario
		function register() {
		$username = $this -> data['User']['username'];
		$this -> Session -> write('User', $username);
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


		
		function buscar() {
//		$this->User->recursive = 1;
//		if (!empty($this->data)){
		$busca_cuit = $this->User->find('first',
        array(
        'fields' => array(
        'User.username',
        'User.direccion',
        'User.fijo_numero'
        ),
        'conditions' =>  array ("User.fijo_numero" => $this->data['User']['fijo_numero']),
        )
        );
        $this->set('contribuyente', $busca_cuit);
//		$this->redirect(array('controller' => 'pedidos', 'action' => 'add'));

		}

		
		function mostrar() {
			
	//	$this->data['User']['fijo_numero'];
		
		}
		
		
		function login() {
		
//		$this->Auth->loginError = "No, you fool!  That's not the right password!";

		}

//		function login() {
//		if ($this->data['User']['username'] == 'Administrator') {
//		debug($this->data);
//		$this->redirect(array('controller' => 'pedidos', 'action' => 'index'));
//		return true;
//		}
//		}
		
		
		function logout() {
			$this->Session->setFlash('Gracias por su pedido. Nos vemos.');
			$this->redirect($this->Auth->logout());
		}
   }
 
   
?>