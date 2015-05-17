<h2> Crear Usuario</h2>

<?php 
	echo $this->Form->create('Usuario');
	echo $this->Form->input('nombre');
	echo $this->Form->input('apellido');
	echo $this->Form->input('email');
	echo $this->Form->input('password');
	echo $this->Form->end('Crear Usuario');
?>