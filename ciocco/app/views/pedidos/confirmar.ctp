<?php echo $session->read('Auth.User.first_name'); ?>

<h2>Su Pedido</h2>

<?php if(empty($detalles)): ?>
No hay detalles para su pedido.
<?php else: ?>

<table>
<tr>
<th>Nro. Pedido</th>
<th>Detalle</th>
<th>Fecha</th>
<th>Presentacion</th>
<th>Cantidad</th>
<th>Precio</th>
<th>Cambio</th>
<th>Direccion</th>
<th>Telefono</th>

</tr>
<?php foreach ($detalles as $detalle): ?>
<tr>
<td>
<?php echo $detalle['Pedido']['id'] ?>
</td>
<td>
<?php echo $detalle['Pedido']['detalle'] ?>
</td>
<td>
<?php echo $detalle['Pedido']['fecha'] ?>
</td>
<td>
<?php echo $detalle['Pedido']['medida'] ?>
</td>
<td>
<?php echo $detalle['Pedido']['cantidad'] ?>
</td>
<td>
<?php echo $detalle['Pedido']['precio'] ?>
</td>
<td>
<?php echo $detalle['Pedido']['cambio'] ?>
</td>


<td>
<?php echo $detalle['User']['direccion'] ?>
</td>
<td>
<?php echo $detalle['User']['cel_numero'] ?>
</td>


<td>


</td>
</tr>
<?php endforeach; ?>
</table>
<?php endif; ?><br />
<br />
<center><?php echo $html->link('Cerrar', array('controller' => 'users', 'action' => 'logout')); ?></center><br />