<?php echo $session->read('Auth.User.first_name'); ?>
<?php 
$user = $session->read('Auth.User.first_name');
$userid = $session->read('Auth.User.id');
?>

<?php echo $form->create('Pedido');?>
<fieldset>
<legend>Elegir Agregar Pedido</legend>
<?php

$date = date("Y-m-d");
echo $form->input('fecha', array('type'=>'hidden', 'value' => $date));

echo $form->input('medida', array('type' => 'radio',
					'options' => array('Cuarto-Kilo'=>'1/4','Medio-Kilo'=>'1/2', 'Tres-Cuartos'=>'3/4' ,'Kilo'=>'Kilo'),
					 'value' => 'Kilo')
				 ); 
?>
</fieldset>			 
<fieldset>
<legend>Elegir Gustos</legend>
<?php
echo $form->input('detalle', array('type'=>'select',
					'multiple'=>'checkbox', 'options'=> array('Frutilla a la crema'=>'Frutilla a la crema','Anana al agua'=>'Anana al agua', 'Chocolate'=>'Chocolate',
					'Granizado'=>'Granizado', 'Vainilla'=>'Vainilla', 'Cereza'=>'Cereza', 'Dulce de Leche'=>'Dulce de Leche',
					'Sambayon'=>'Sambayon', 'Mascarpone'=>'Mascarpone' , 'Almendrado'=>'Almendrado', 'maracuya al agua'=>'maracuya al agua',
					'dulce de lecha con brownie' => 'dulce de lecha con brownie', 'manjar de coco' => 'manjar de coco',
					'yogurt con frutlilla' => 'yogurt con frutlilla', 'crema rusa' => 'crema rusa', 'menta granizada' => 'menta granizada',
					'tiramisu' => 'tiramisu', 'tramontana' => 'tramontana', 'frutos del bosque' => 'frutos del bosque',
					'chocolate nevado' => 'chocolate nevado', 'chocolate con almendras' => 'chocolate con almendras',
					'chocolate blanco' => 'chocolate blanco', 'chocolate bariloche' => 'chocolate bariloche',
					'chocolate suizo' => 'chocolate suizo', 'Durazno al agua' => 'Durazno al agua', 'limon al agua' => 'limon al agua',
					'dulce de leche granizado' => 'dulce de leche granizado', 'amarena' => 'amarena', 'anana a la crema' => 'anana a la crema',
					'kinotos al whisky' => 'kinotos al whisky')));


				
?>	
</fieldset>		
<fieldset>
<?php					
echo $form->input('cantidad', array('label' => 'Cantidad', 'div' => 'formfield', 'error' => array('wrap' => 'div', 'class' => 'formerror')));

echo $form->input('cambio', array('label' => 'Pago', 'div' => 'formfield', 'error' => array('wrap' => 'div', 'class' => 'formerror')));



echo $form->input('usuario', array('type'=>'hidden', 'value' => $user));

echo $form->input('user_id', array('type'=>'hidden', 'value' => $userid));

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
	 <!-- echo $form->input('precio'); -->




