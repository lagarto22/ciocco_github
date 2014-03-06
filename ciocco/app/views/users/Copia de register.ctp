<?php
echo $form->create('User',array('action'=>'register'));
echo $form->input('username',array('label' => 'Email','after'=>$form->error('username_taken_error','Perdon! Este usuario ya existe. Por favor elegi otro')));
echo $form->input('password',array('value'=>''));
echo $form->input('password_confirm', array('value'=>'','type'=>'password','error'=>'No Coinciden las password - Ingresa la clave nuevamente'));

echo $form->input('first_name');
echo $form->input('last_name');

echo $form->input('cel_prefijo');
echo $form->input('cel_numero', array('label' => 'cel_numero (15)'));
echo $form->input('fijo_prefijo');
echo $form->input('fijo_numero');

echo $form->input('direccion');

echo $form->end('Registrar');
?>