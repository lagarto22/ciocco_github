<?php echo $session->read('Auth.User.first_name'); ?>
<?php 
$user = $session->read('Auth.User.first_name');
?>

<!--//jQuery code here :) -->
<script type="text/javascript">
	$(document).ready(function(){
	$('.submit').click(function(){
		var miArray = new Array(3);
		
		miArray[0] = 15;
		miArray[1] = 4;
		miArray[2] = 49;
		
		alert(miArray);	
	});
});
</script> 


<?php echo $form->create('Pedido');?>
<fieldset>
<legend>Agregar Pedido</legend>
<?php

$date = date("Y-m-d");
echo $form->input('fecha', array('type'=>'hidden', 'value' => $date));

echo $form->input('medida', array('type' => 'radio',
					'options' => array('1'=>'1/4','2'=>'1/2', '3'=>'3/4' ,'Kilo'=>'Kilo', '5'=>'Kilo y 1/4', '6'=>'Kilo y 1/2', '7'=>'Kilo y 3/4'),
					 'value' => 'Kilo')
				 ); 
				 

echo $form->input('detalle', array('type'=>'select',
					'multiple'=>'checkbox', 'options'=> array('1'=>'Frutilla','2'=>'Anana', '3'=>'Chocolate' ,'4'=>'Granizado', '5'=>'Vainilla',
					'6'=>'Cereza', '7'=>'Dulce de Leche', '8'=>'Sambayon', '9'=>'Mascarpone' , '10'=>'Almendrado', '11'=>'Torroncino'))
					);


				
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




