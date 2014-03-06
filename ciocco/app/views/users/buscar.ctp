
<?php  
    echo $form->create("User",array('url'=>array('action' => 'buscar'))); 
    echo $form->input("fijo_numero", array('label' => 'Telefono')); 
    echo $form->end("Buscar"); 
?> 
<?php if(empty($contribuyente)): ?>
No existe el cliente. Debe darlo de alta!!!
<?php else: ?>

<table>
<tr>
<th>Codigo</th>
<th>Cliente</th>
<th>Direccion</th>
</tr>
<?php foreach ($contribuyente as $telefono): ?>
<tr>
<td>
<?php echo $telefono['id'] ?>
</td>
<td>
<?php echo $telefono['username'] ?>
</td>
<td>
<?php echo $telefono['direccion'] ?>
</td>
<td>

</td>
<td>


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
<?php echo $html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?>
<?php echo $html->link('Agregar Pedido', array('controller' => 'pedidos', 'action'=>'add')); ?>

 