<!--<?php echo $session->read('Auth.User.first_name'); ?> -->
 
<!-- $user = $session->read('Auth.User.fijo_numero'); -->
<?php
$user = $session->read('Auth.User.first_name'); ?>
<?php
$userid = $session->read('Auth.User.id');?>


<!-- <?php echo $form->create('Pedido',array('class' => 'form'));?> -->

<?php echo $form->create('Pedido');?>

			<center><h3><?php echo $session->read('Auth.User.first_name'); ?></h3></center>
			<center><h3><?php echo $session->read('Auth.User.last_name'); ?></h3></center>
			<center><h3><?php echo $session->read('Auth.User.direccion'); ?></h3></center>

<fieldset>
<legend>Elegir Presentacion</legend>
<?php

$date = date("Y-m-d");
echo $form->input('fecha', array('type'=>'hidden', 'value' => $date));

echo $form->input('medida', array('legend' => false,'type' => 'radio',
					'options' => array('Cuarto-Kilo'=>'1/4','Medio-Kilo'=>'1/2', 'Kilo'=>'Kilo'),
					 'value' => 'Kilo')
				 ); 
?>
</fieldset>
<br />			 
<fieldset>
<legend>Elegir Gustos</legend>
<?php
echo $form->input('detalle', array('label' => false,'type'=>'select',
					'multiple'=>'checkbox', 'options'=> array('Frutilla'=>'FRUTILLA','Anana al chanty'=>'ANANA AL CHANTY', 'Biznike'=>'BIZNIKE',
					'Chocolate blanco'=>'CHOCOLATE BLANCO', 'Cereza'=>'CEREZA', 'Chantilly con frutilla'=>'CHANTILLY CON FRUTILLA', 'Choco con pasas'=>'CHOCO CON PASAS',
					'Choco relleno'=>'CHOCO RELLENO', 'Chocolate'=>'CHOCOLATE' , 'Chocolate ciocco'=>'CHOCOLATE CIOCCO', 'Dulce de leche'=>'DULCE DE LECHE',
					'Dulce de leche con brownie' => 'DL BROWNIES', 'Dulce de leche con nuez' => 'DL CON NUEZ',
					'Dulce de leche granizado' => 'DULCE DE LECHE GRANIZADO', 'Dulce de leche relleno' => 'DL RELLENO', 'Dol-k bananita' => 'DOL-K BANANITA',
					'Durazno al chanty' => 'DURAZNOS AL CHANTY', 'Fc comun' => 'FC COMUN', 'Flan' => 'FLAN',
					'Frutilla' => 'FRUTILLA', 'Frutos del bosque' => 'FRUTOS DEL BOSQUE',
					'Granizado' => 'GRANIZADO', 'Limon' => 'LIMON',
					'Limon tropical' => 'LIMON TROPICAL', 'Manzana' => 'MANZANA', 'Menta granizada' => 'MENTA GRANIZADA',
					'Mousse de limon' => 'MOUSSE DE LIMON', 'Sambayon' => 'SAMBAYON', 'Split banana' => 'SPLIT BANANA',
					'Tiramizu' => 'TIRAMIZU', 'Tramontana' => 'TRAMONTANA', 'Vainilla' => 'VAINILLA')));


				
?>	
</fieldset>	
<br />	
<fieldset>
<br />		
<center><?php echo $form->input('cantidad', array('label' => 'Cantidad', 'div' => 'formfield', 'error' => array('wrap' => 'div', 'class' => 'formerror')));?></center>



<?php

echo $form->input('usuario', array('type'=>'hidden', 'value' => $user));

echo $form->input('user_id', array('type'=>'hidden', 'value' => $userid));



?>

</fieldset>
<br />
<center><?php echo $form->end('Confirmar Pedido');?></center><br />
<!-- <?php echo $html->link('Listar todos los Pedidos', array('action'=>'index')); ?><br /> -->
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




