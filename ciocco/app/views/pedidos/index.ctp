<!--<?php echo $session->read('Auth.User.first_name'); ?> -->
<h2>Detalle de Pedidos</h2>
<?php if(empty($pedidos)): ?>
No hay pedidos en esta lista
<?php else: ?>
<table>
<tr>
<th>Pedido</th>
<th>Detalle</th>
<th>Fecha Hora</th>
<th>Presentacion</th>
<th>Cantidad</th>

<th>Usuario</th>
<th>Direccion</th>
<th>Telefono</th>

<th>Estado</th>


</tr>
<?php foreach ($pedidos as $pedido): ?>
<tr>
<td>
<?php echo $pedido['Pedido']['id'] ?>
</td>
<td>
<?php echo $pedido['Pedido']['detalle'] ?>
</td>
<td>
<?php echo $pedido['Pedido']['created'] ?>
</td>
<td>
<?php echo $pedido['Pedido']['medida'] ?>
</td>
<td>
<?php echo $pedido['Pedido']['cantidad'] ?>
</td>

<td>
<?php echo $pedido['Pedido']['usuario'] ?>
</td>
<td>
<?php echo $pedido['User']['direccion'] ?>
</td>

<td>
<?php echo $pedido['User']['username'] ?>
</td>
<td>
<?php echo $pedido['Pedido']['status'] ?>
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
$pedido['Pedido']['id'])); ?>&nbsp;
<?php echo $html->link('Imprimir', array('action'=>'impresion',
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

<?php echo $html->link('Buscar', array('controller' => 'users', 'action' => 'login')); ?><br />
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

