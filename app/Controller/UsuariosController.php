<?php
	class UsuariosController extends AppController{

		public $helpers = array('Html', 'Form');
		public $components = array('Session');

		public function index(){
			$this->set('usuarios',$this->Usuario->find('all'));
		}

		public function ver($id = null){
			if (!$id) {
				throw new NotFoundException("Datos Invalidos", 1);
				
			}
			$usuario = $this->Usuario->findById($id);

			if (!$usuario) {
				throw new NotFoundException("El usuario no existe", 1);
				
			}

			$this->set('usuario',$usuario);
		}

		public function nuevo(){
			if ($this->request->is('post')) {
				$this->Usuario->create();
				if ($this->Usuario->save($this->request->data)) {
					$this->Session->setFlash('El usuario ha sido creado', 'default', array('class' => 'success'));
					return $this->redirect(array('action' => 'index'));
				}

				$this->Session->setFlash('No se puedo crear el usuario');
			}
		}
	}
?>