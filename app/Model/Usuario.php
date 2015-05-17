<?php
	class Usuario extends AppModel {
		public $validate = array(
				'nombre' => array(
						'rule' => 'notEmpty'
					),
				'apellido' => array(
						'rule' => 'notEmpty'
					),
				'email' => array(
						'rule' => 'notEmpty'
					),
				'password' => array(
						'rule' => 'notEmpty'
					)
			);

	}

?>