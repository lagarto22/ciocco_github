<?php
	class User extends AppModel
	{
		var $name = 'User';
		var $belongsTo = 'Pedido';
		
		
//		var $validate = array(
//		'legajo' => array(
//		'rule' => 'notEmpty',
//		'message' => 'Tenes que ingresar el campo de LEGAJO'
//	)
//	);
		
	}
?>