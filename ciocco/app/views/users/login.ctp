<?php
	
    echo $form->create('User', array('action' => 'login', 'class' => 'form'));
    echo $form->input('username', array('label' => 'Telefono', 'div' => 'formfield', 'error' => array('wrap' => 'div', 'class' => 'formerror')));
	echo $form->input('password', array('label' => 'Clave', 'div' => 'formfield', 'error' => array('wrap' => 'div', 'class' => 'formerror')));
    
?>	
<center><?php echo $form->end('Buscar');?></center>

<center><?php echo $html->link('Registrarme', array('controller' => 'users', 'action' => 'register'));?></center><br />