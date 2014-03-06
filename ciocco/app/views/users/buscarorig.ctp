<?php
echo $form->create('User',array('action'=>'buscar', 'class' => 'form')); ?>
Por favor completa el siguiente fomulario.
<?php
echo $form->input('fijo_numero', array('label' => 'Fijo numero', 'div' => 'formfield', 'error' => array('wrap' => 'div', 'class' => 'formerror')));
?>

<center><?php echo $form->end('Buscar');?></center><br />
