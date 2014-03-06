<?php echo $session->read('Auth.User.first_name'); ?>
<h2>Datos del cliente</h2>
<?php if(empty($telefonos)): ?>
No existe el cliente. Debe darlo de alta!!!
<?php else: ?>
<table>
<tr>
<th>Pedido</th>
<th>Detalle</th>
<th>Fecha Hora</th>
<th>Presentacion</th>
<th>Cantidad</th>
<th>Precio</th>
<th>Cambio</th>
<th>Usuario</th>
<th>Direccion</th>
<th>Telefono</th>
<th>Email</th>
<th>Estado</th>
<th>Accion</th>

</tr>
<?php foreach ($telefonos as $telefono): ?>
<tr>
<td>
<?php echo $telefono['User']['id'] ?>
</td>
<td>
<?php echo $telefono['User']['username'] ?>
</td>
<td>
<?php echo $telefono['User']['created'] ?>
</td>
<td>
<?php echo $telefono['User']['first_name'] ?>
</td>
<td>
<?php echo $telefono['User']['last_name'] ?>
</td>
<td>
<?php echo $telefono['User']['fijo_numero'] ?>
</td>
<td>
<?php echo $telefono['User']['dir_confirmada'] ?>
</td>

<td>
<?php echo $telefono['User']['direccion'] ?>
</td>
<td>
<?php echo $telefono['User']['cel_numero'] ?>
</td>
<td>
<?php echo $telefono['User']['username'] ?>
</td>


<!--
<td>
<?php
if($tarea['Tarea']['hecha']) echo "Hecha";
else echo "Pendiente";
?>
</td>-->
<td>

<?php echo $html->link('Editar', array('action'=>'edit',
$pedido['Pedido']['id'])); ?>
<!-- echo $strfTime->niceShort($tufecha); -->
<!-- <?php echo $html->link('Editar', array('action'=>'edit',
$extra['Extra']['id'])); ?>&nbsp;
<?php echo $html->link('Borrar', array('action'=>'delete',
$tarea['Tarea']['id']), null, 'Estas Seguro?'); ?> -->
</td>
</tr>
<?php endforeach; ?>
</table>
<?php endif; ?><br />
<!--<?php echo $html->link('Agregar Pedido', array('action'=>'add')); ?><br />

<?php echo $html->link('Exportar a Excel', array('action'=>'export_xls')); ?><br /> -->

<!--<?php echo $html->link('Exportar a Pdf', array('action'=>'pdf')); ?><br /> -->

<?php echo $html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?><br />

<!-- <?php if($status): ?>
<?php echo $html->link('Listar Todas las Tareas', array('action'=>
'index')); ?><br />
<?php endif;?>
 <?php if($status != 'hecha'): ?>
<?php echo $html->link('Listar Tareas Hechas', array('action'=>
'index', 'hecha')); ?><br />
<?php endif;?>
<?php if($status != 'pendiente'): ?>
<?php echo $html->link('Listar Tareas pendientes', array('action'=>
'index', 'pendiente')); ?><br /> -->
<?php endif;?>


