<?php
class Pedido extends AppModel {
var $name = 'Pedido';

// original var $hasMany = 'User';
			var $belongsTo = 'User';
 
//        var $name = 'Factura'; 
//        var $hasOne = array( 
 //           'User' => array( 
  //          'className'     => 'User', 
 //           'foreignKey'    => 'pedido_id', 
 //           'dependent'=> true) 
 //       ); 
     


//var $validate = array(
//'legajo' => array(
//'DebeSerNumerico' => array(
//'rule' => 'numeric',
//'message' => 'Debe ser un NUMERO.'
//),
//'NoVacio' => array(
//'rule' => 'notEmpty',
//'message' => 'Debes ingresar el campo de LEGAJO'
//)
//),
//'empleado' => array(
//'rule' => 'notEmpty',
//'message' => 'Debes ingresar el campo de EMPLEADO'
//),
//'sucursal' => array(
//'rule' => 'notEmpty',
//'message' => 'Debes ingresar la SUCURSAL.'
//),
//'fecha' => array(
//'rule' => 'dateTime',
//'message' => 'Ingrese una fecha válida usando el formato AA-MM-DD.',
//'allowEmpty' => true
//)
//);
}
?>