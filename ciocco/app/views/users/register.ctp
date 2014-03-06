<?php
echo $form->create('User',array('action'=>'register', 'class' => 'form')); ?>
Por favor completa el siguiente fomulario.

<?php
$user = $session->read('User.username'); ?>
<?php 
echo $form->input('username', array('label' => 'Telefono', 'div' => 'formfield', 'error' => array('wrap' => 'div', 'class' => 'formerror'),'after'=>$form->error('username_taken_error','Perdon! Este usuario ya existe. Por favor elegi otro')));

echo $form->input('password', array('label' => 'Contraseña', 'div' => 'formfield', 'error' => array('wrap' => 'div', 'class' => 'formerror')));

echo $form->input('first_name', array('label' => 'Nombre', 'div' => 'formfield', 'error' => array('wrap' => 'div', 'class' => 'formerror')));
echo $form->input('last_name', array('label' => 'Apellido', 'div' => 'formfield', 'error' => array('wrap' => 'div', 'class' => 'formerror')));




echo $form->input('direccion', array('label' => 'Direccion', 'div' => 'formfield', 'error' => array('wrap' => 'div', 'class' => 'formerror')));
?>

<center><?php echo $form->end('Registrar');?></center><br />
