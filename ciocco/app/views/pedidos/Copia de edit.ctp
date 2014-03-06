<?php 
$user = $session->read('Auth.User.first_name');
?>
<?php echo $form->create('Pedido',array('class' => 'form'));?>
<fieldset>
<legend>Editar Pedido</legend>
<?php
echo $form->input('medida', array('label' => 'Presentacion', 'readonly' => true, 'div' => 'formfield', 'error' => array('wrap' => 'div', 'class' => 'formerror')));

echo $form->input('detalle', array('label' => 'Detalle', 'readonly' => true, 'div' => 'formfield', 'error' => array('wrap' => 'div', 'class' => 'formerror')));


echo $form->input('cantidad', array('label' => 'Cantidad', 'readonly' => true, 'div' => 'formfield', 'error' => array('wrap' => 'div', 'class' => 'formerror')));
echo $form->input('precio', array('label' => 'Precio', 'readonly' => true, 'div' => 'formfield', 'error' => array('wrap' => 'div', 'class' => 'formerror')));
echo $form->input('cambio', array('label' => 'Cambio', 'readonly' => true, 'div' => 'formfield', 'error' => array('wrap' => 'div', 'class' => 'formerror')));


echo $form->input('status', array('label' => 'Estado', 'div' => 'formfield', 'error' => array('wrap' => 'div', 'class' => 'formerror')));


	
	



	


echo $form->input('usuario', array('type'=>'hidden', 'value' => $user));




?>
<!-- FORMATO DE FECHA CON HORA, EL CAMPO DE LA BASE DEBE SER DATETIME
echo $form->datetime('fecha', $dateFormat = 'DMY', $timeFormat = '24', $selected = null, $attributes = array('empty' => false));
-->
<!-- echo $form->input('sucursal', array('options' => array('Brandsen','Cipolleti','Villa Regina','Villa Soldati'))); -->
<!-- echo $form->input('medida', array('readonly' => true)); mostar data pero NO editable-->
</fieldset>
<br />
<center><?php echo $form->end('Guardar Pedido');?></center><br />
<?php echo $html->link('Listar todos los Pedidos', array('action'=>'index')); ?><br />
<?php echo $html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?>















