<?php 
$user = $session->read('Auth.User.first_name');
?>
<?php echo $form->create('Pedido');?>
<fieldset>
<legend>Editar Pedido</legend>
<?php
echo $form->input('medida');
echo $form->input('detalle');

echo $form->input('fecha');
echo $form->input('cantidad');
echo $form->input('precio');
echo $form->input('cambio');

echo $form->input('status');


	
	



	


echo $form->input('usuario', array('type'=>'hidden', 'value' => $user));




?>
<!-- FORMATO DE FECHA CON HORA, EL CAMPO DE LA BASE DEBE SER DATETIME
echo $form->datetime('fecha', $dateFormat = 'DMY', $timeFormat = '24', $selected = null, $attributes = array('empty' => false));
-->
<!-- echo $form->input('sucursal', array('options' => array('Brandsen','Cipolleti','Villa Regina','Villa Soldati'))); -->
</fieldset>
<?php echo $form->end('Guardar Pedido');?><br />
<?php echo $html->link('Listar todos los Pedidos', array('action'=>'index')); ?><br />
<?php echo $html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?>















