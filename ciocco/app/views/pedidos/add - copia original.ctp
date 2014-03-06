<?php echo $session->read('Auth.User.first_name'); ?>
<?php 
$user = $session->read('Auth.User.first_name');
$inicio = '';
$fin = '';
$diferencia = '';
?>

<?php echo $form->create('Pedido');?>
<fieldset>
<legend>Agregar Nueva Extra</legend>
<?php
echo $form->input('legajo');
echo $form->input('empleado');

echo $form->input('fecha', array(
	'label' => 'Fecha',
	'dateFormat' => 'DMY',
	'minYear' => date('Y') - 0,
	'maxYear' => date('Y') - 10,));
	
	


echo $form->input('sucursal', array('options' => array(
	'Brandsen' => 'Brandsen',
	'Cipolleti' => 'Cipolleti',
	'Villa Regina' => 'Villa Regina',
	'Villa Soldati' => 'Villa Soldati')));
	
echo $form->input('ingreso1', array('label' => 'Ingreso','timeFormat' => '24', 'empty' => true, 'interval' => 5));
echo $form->input('egreso1', array('label' => 'Egreso','timeFormat' => '24', 'empty' => true, 'interval' => 5));
echo $form->input('ingreso2', array('label' => 'Ingreso','timeFormat' => '24', 'empty' => true, 'interval' => 5));
echo $form->input('egreso2', array('label' => 'Egreso','timeFormat' => '24', 'empty' => true, 'interval' => 5));

echo $form->input('horas50', array('label' => 'Hs 50 %'));
echo $form->input('horas100', array('label' => 'Hs 100 %'));
echo $form->input('horasnoche', array('label' => 'Hs Nocturnas'));

echo $form->input('usuario', array('type'=>'hidden', 'value' => $user));

echo $form->input('ausencia', array('options' => array(
	'---' => '---',
	'LICENCIA POR ENFERMEDAD' => 'Enfermedad',
	'LICENCIA POR EXAMEN' => 'Examen',
	'LICENCIA POR CASAMIENTO' => 'Casamiento',
	'LICENCIA POR NACIMIENTO' => 'Nacimiento',
	'LICENCIA POR FALLECIMIENTO' => 'Fallecimiento',
	'LICENCIA GREMIAL' => 'Gremial',
	'LICENCIA POR VACACIONES' => 'Vacaciones',
	'SUSPENSION' => 'Suspension',
	'OTRA' => 'Otra')));

?>
<!-- FORMATO DE FECHA CON HORA, EL CAMPO DE LA BASE DEBE SER DATETIME
echo $form->datetime('fecha', $dateFormat = 'DMY', $timeFormat = '24', $selected = null, $attributes = array('empty' => false));
-->
<!-- echo $form->input('sucursal', array('options' => array('Brandsen','Cipolleti','Villa Regina','Villa Soldati'))); -->
</fieldset>
<?php echo $form->end('Agregar Extra');?><br />
<?php echo $html->link('Listar todas las Tareas', array('action'=>'index')); ?><br />
<?php echo $html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?>



<!-- <?php echo $html->link('Listar Tareas Hechas', array('action'=>
'index', 'hecha')); ?><br />
<?php echo $html->link('Listar Tareas Pendientes', array('action'=>
'index', 'pendientes')); ?><br /> -->





