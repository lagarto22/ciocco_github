<?php echo $session->read('Auth.User.first_name'); ?>
<?php 
$user = $session->read('Auth.User.first_name');
?>

<?php echo $form->create('Pedido');?>
<fieldset>
<legend>Agregar Pedido</legend>
<?php

$date = date("Y-m-d");
echo $form->input('fecha', array('type'=>'hidden', 'value' => $date));

echo $form->input('medida', array('type' => 'radio',
					'options' => array('1'=>'1/4','2'=>'1/2', '3'=>'3/4' ,'4'=>'Kilo', '5'=>'Kilo y 1/4', '6'=>'Kilo y 1/2', '7'=>'Kilo y 3/4'),
					 'value' => '4')
				 ); 
				 

echo $form->input('detalle', array('type'=>'select',
					'multiple'=>'checkbox', 'options'=> array('1'=>'Frutiila','2'=>'Anana', '3'=>'Chocolate' ,'4'=>'Granizado', '5'=>'Vainilla', '6'=>'Cereza', '7'=>'Dulce de Leche', '8'=>'Sambayon', '9'=>'Mascarpone' , '10'=>'Almendrado')));


$array = array('detalle');
$comma_separated = implode(",", $array);
echo $comma_separated; // lastname,email,phone					
				
					
echo $form->input('cantidad');
echo $form->input('precio');
echo $form->input('cambio');



echo $form->input('usuario', array('type'=>'hidden', 'value' => $user));

?>

</fieldset>
<?php echo $form->end('Confirmar Pedido');?><br />
<?php echo $html->link('Listar todas las Tareas', array('action'=>'index')); ?><br />
<?php echo $html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?>



<!-- <?php echo $html->link('Listar Tareas Hechas', array('action'=>
'index', 'hecha')); ?><br />
<?php echo $html->link('Listar Tareas Pendientes', array('action'=>
'index', 'pendientes')); ?><br /> -->

<!-- echo $form->input('detalle', array('type' => 'radio',
	'options' => array('1'=>'Frutiila','2'=>'Anana', '3'=>'Chocolate' ,'4'=>'Granizado', '5'=>'Vainilla', '6'=>'Cereza', '7'=>'Dulce de Leche', '8'=>'Sambayon', '9'=>'Mascarpone' , '10'=>'Almendrado')
	 )
	 ); --> 




