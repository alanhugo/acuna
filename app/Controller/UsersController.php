<?php
//App::uses('AppController', 'Controller');
class UsersController extends AppController{

	//var $components = array('Auth', 'Session');
	public $components = array(
    'BotDetect.Captcha' => array(
      'captchaConfig' => 'ExampleCaptcha'
    )
  	);

	public $name = 'User';

	public function beforeFilter(){
		$this->Auth->allow(array('login','register','logout'));
		parent::beforeFilter();
	}

	public function login() {
		$this->layout = "default_login";
		$this->set('show_captcha', 0);


		if($this->request->is('post')) {

			// validate the user-entered Captcha code

  			if(isset($this->request->data['User']['CaptchaCode'])){
  				$isHuman = captcha_validate($this->request->data['User']['CaptchaCode']);
  			}else{
  				$isHuman = "";
  			}

  			if($this->Session->check('contar')){
  				$intento = $this->Session->read('contar');
  			}else{
  				$this->Session->write('contar',1);
  				$intento = 1;
  			}

  			//Verificar creacion de tareas para enosa

  			if($intento < 3){
				if($this->Auth->login()) {
					if($this->Auth->user('estado')==0){
						//$this->Session->setFlash(__('El Usuario o Contrase&ntilde;a es Incorrecto'),array(),'auth');
						$this->Session->setFlash('El Usuario o Contrase&ntilde;a es Incorrecto', 'default', array(), 'authe');
						$this->redirect($this->Auth->logout());
					}
					$this->Session->delete('contar');
					$this->redirect($this->Auth->redirectUrl());
				} else {

					$this->Session->setFlash('El Usuario o Contrase&ntilde;a es Incorrecto', 'default', array(), 'authe');
					$intento++;
					$this->Session->write('contar',$intento);
					//debug($intento);
				}
			}else{
				$this->set('show_captcha', 1);
				if($this->Auth->login() && $isHuman) {
					if($this->Auth->user('estado')==0){
						$this->Session->setFlash('El Usuario o Contrase&ntilde;a es Incorrecto', 'default', array(), 'authe');
						$this->redirect($this->Auth->logout());
					}
					
					$this->Session->delete('contar');
					$this->redirect($this->Auth->redirectUrl());	
					$this->set('show_captcha', 0);
					
				} 

				if(!$isHuman) {
					$this->Session->setFlash('Ingrese el texto correcto', 'default', array(), 'captcha');

					$intento++;
					$this->Session->write('contar',$intento);
				}	

				if(!$this->Auth->login()) {
					$this->Session->setFlash('El Usuario o Contrase&ntilde;a es Incorrecto', 'default', array(), 'authe');
					$intento++;
					$this->Session->write('contar',$intento);
				}				
			}	




		}else{
			if($this->Auth->user('id')){
				$this->redirect($this->Auth->redirect());
			}
		}
	}

	public function logout() {
		$this->redirect($this->Auth->logout());
	}


	/*public function index() {
		$this->layout = "default";
		$this->loadModel('TipoUsuario');
		$this->loadModel('Persona');
		$array_obj_usuario = $this->User->listarInfoPersonalUsuario();
		$this->set(compact('array_obj_usuario'));
	}*/
	
	

}
?>
