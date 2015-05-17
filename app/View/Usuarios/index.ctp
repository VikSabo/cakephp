<h2>Listas de Usuarios</h2>
<?php
	echo $this->Html->link('Registrarse', array('controller' => 'usuarios', 'action' => 'nuevo'));
?>
<table>
	<tr>
		<td>ID</td>
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Correo</td>
		<td>Acciones</td>
	</tr>

	<?php foreach($usuarios as $usuario): ?>
		<tr>
			<td> <?php echo $usuario['Usuario']['id']; ?></td>
			<td><?php echo $usuario['Usuario']['nombre']; ?></td>
			<td><?php echo $usuario['Usuario']['apellido']; ?></td>
			<td><?php echo $usuario['Usuario']['email']; ?></td>
			<td><?php echo $this->Html->link('Detalle',array('controller' => 'usuarios', 'action' => 'ver', $usuario['Usuario']['id'])); ?></td>
		</tr>
	<?php endforeach; ?>
</table>