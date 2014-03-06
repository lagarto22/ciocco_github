<?php
	class User extends AppModel
	{
		var $name = 'User';
//original		var $belongsTo = 'Pedido';
		var $hasMany = 'Pedido';
		 
 //       var $belongsTo = array( 
  //          'Pedido' => array( 
 //           'className'     => 'Pedido', 
 //           'foreignKey'    => 'pedido_id', 
//            'dependent'=> true)); 
		
		
// agregado para la funcion registrar		
		var $validate = array(
//		'username' => array('rule' => 'alphaNumeric','required' => true),
		'username' => array('No puede ser vacio' => array('rule' => 'notEmpty')),
//		'password' => array('rule' => 'alphaNumeric','required' => true),
		
//		'password' => array('cannot be empty' => array('rule' => 'notEmpty'),'Debe tener 5 caracteres' => array('rule' => 'minlenght', 5)));
//		'Must be at least 4 chars' => array('rule'=>array('minLength', 4));
			
//		'password_confirm' => array('rule' => array('validateConfirmPassword'),'message' => 'Error - No coinciden las contraseñas'),
		'direccion' => array('No puede ser vacio' => array('rule' => 'notEmpty')),
//		'cel_prefijo' => array('No puede ser vacio' => array('rule' => 'notEmpty')),
//		'cel_numero' => array('No puede ser vacio' => array('rule' => 'notEmpty'))
		);
///////////////////////////////////////////////////////////////////////		
	//Validacion solo a traves de Model->save() or Model->validates()
//		function validateConfirmPassword($data) {
//		if ($this->data['User']['password'] == AuthComponent::password($this->data['User']['password_confirm'])) {
//		return true;
//		}
//		return false;
//	}
/////////////////////////////////////////////////////////////////////////

	
	//Verificar si existe usuario
//		function beforeValidate() {
//		if (empty($this->id)) { //crea usuario, verifico si ya existe
//		$vCond = array('User.username' =>$this->data['User']['username']);
//		if ($this->find('count', array('conditions'=>$vCond))>0) { // aceptado
//		$this->invalidate('username_taken_error');
//		return false;
//		}
//		}
//		return true;
//		}
//		}
//////////////////////////////////////////////////////////////////////////		
		function beforeValidate() {
		if (empty($this->id)) { //crea usuario, verifico si ya existe
		$vCond = array('User.username' =>$this->data['User']['username']);
		if ($this->find('count', array('conditions'=>$vCond))>0) { // aceptado
		$this->invalidate('username_taken_error');
		return false;
		}
		}
		return true;
		}
		}
?>