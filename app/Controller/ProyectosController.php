<?php
class ProyectosController extends AppController{
	public $name = 'Proyecto';	
	
	public function index($page=null,$order_by=null,$order_by_or=null,$search_proyecto=null) {
		/*if($this->obj_logged_user->getAttr('tipo_user_id') == 2) {
        	$this->redirect(array('controller' => 'errors', 'action' => 'error_404'));
			exit();
        }*/

		$this->layout = "default_adm";
		$this->loadModel('Proyecto');
		
		$page = 0;
		//$page -= 1;
		$per_page = 10;
		$start = $page * $per_page;
		
		if($order_by_or!=NULL && isset($order_by_or) && $order_by_or!='null'){
			$order_by_or = $order_by_or;
		}else{
			$order_by_or = 'DESC';
		}
	
		$order_by = 'Proyecto.created';
		
		if($this->request->is('get')){
			if($search_proyecto!=''){
				$search_proyecto = $search_proyecto;
			}else{
				$search_proyecto = '';
			}
			
		}else{
			$search_proyecto = '';
		}
		
		$list_proyecto_all = $this->Proyecto->listAllProyectos($order_by, utf8_encode($search_proyecto),$order_by_or);
		$list_proyectos = $this->Proyecto->listFindProyectos($order_by, $search_proyecto,$order_by_or, $start, $per_page);
		$count = count($list_proyecto_all);
		$no_of_paginations = ceil($count / $per_page);
		$page = $page + 1;
		
		$this->set(compact('list_proyectos','page','no_of_paginations'));
	}
	
	public function find_proyectos($page=null,$order_by=null,$order_by_or=null,$search_proyecto=null) {
		$this->layout = 'ajax';
		$this->loadModel('Proyecto');
		$page = $page;
		$page -= 1;
		$per_page = 10;
		$start = $page * $per_page;
		/*if(isset($order_by)){
			$order_by = $order_by;
		}else{
			$order_by = 'Persona.created';
		}*/
		$order_by = 'Proyecto.created';
	
		if($order_by_or!=NULL && isset($order_by_or) && $order_by_or!='null'){
			$order_by_or = $order_by_or;
		}else{
			$order_by_or = 'DESC';
		}
	
		/*if($order_by=='title'){
			$order_by = 'Bit.title';
		}elseif($order_by=='username'){
			$order_by = 'UserJoin.username';
		}elseif($order_by=='home'){
			$order_by = 'Bit.view_home';
		}elseif($order_by=='status'){
			$order_by = 'Bit.status';
		}else{
			$order_by = 'Bit.created';
		}*/
	
		if($this->request->is('get')){
		
			if($search_proyecto == 'null'){
				$search_proyecto = '';
			}else{
				$search_proyecto = $search_proyecto;
			}

		}else{
			$search_proyecto = '';
		}

		$list_proyecto_all = $this->Proyecto->listAllProyectos($order_by, utf8_encode($search_proyecto),$order_by_or);
		$list_proyectos = $this->Proyecto->listFindProyectos($order_by, utf8_encode($search_proyecto),$order_by_or, $start, $per_page);
		$count = count($list_proyecto_all);
		$no_of_paginations = ceil($count / $per_page);
		$page = $page+1;
		$this->set(compact('list_proyectos','page','no_of_paginations'));
	}
	
	
	/**
	 * Add and Edit using Ajax
	 * 16 March 2015
	 * @author Vladimir
	 */
	public function add_edit_proyecto($proyecto_id=null){
		$this->layout = 'ajax';
		
		if($this->request->is('post')  || $this->request->is('put')){
			if(isset($proyecto_id) && intval($proyecto_id) > 0){
				
				//update
				
				$this->Proyecto->id = $proyecto_id;

				if($this->request->data['Proyecto']['thumbnail']['name'] != ''){
					
					$thumbnail = $this->request->data['Proyecto']['thumbnail']['name'];
					$arr = explode(".", $thumbnail);
					$extension = strtolower(array_pop($arr));
					$new_file_name = time().'.'.$extension;
					
					$this->request->data['Proyecto']['thumbnail'] = $new_file_name;
						
					//$image_tmp = $this->request->data['Proyecto']['thumbnail']['tmp_name'];
					
					
					$uploaddir = APP.WEBROOT_DIR.'/files/thumb-proy/';
					$uploadfile = $uploaddir . basename($new_file_name);
				
					move_uploaded_file($_FILES['data']['tmp_name']['Proyecto']['thumbnail'], $uploadfile);
				
				}else{
					unset($this->request->data['Proyecto']['thumbnail']);
				}

				/* EDITAR IMAGEN SECCIÓN 1*/
				if($this->request->data['Proyecto']['sect1_img']['name'] != ''){
					
					$thumbnail = $this->request->data['Proyecto']['sect1_img']['name'];
					$arr = explode(".", $thumbnail);
					$extension = strtolower(array_pop($arr));
					$new_file_name = time().'.'.$extension;
					
					$this->request->data['Proyecto']['sect1_img'] = $new_file_name;
						
					//$image_tmp = $this->request->data['Proyecto']['thumbnail']['tmp_name'];
					
					
					$uploaddir = APP.WEBROOT_DIR.'/files/sect1-img/';
					$uploadfile = $uploaddir . basename($new_file_name);
				
					move_uploaded_file($_FILES['data']['tmp_name']['Proyecto']['sect1_img'], $uploadfile);
				
				}else{
					unset($this->request->data['Proyecto']['sect1_img']);
				}
				/* FIN EDITAR IMAGEN SECCIÓN 1*/
	
				if ($this->Proyecto->save($this->request->data)) {
					echo json_encode(array('success'=>true,'msg'=>__('Guardado con &eacute;xito.'),'Proyecto_id'=>$proyecto_id));
					exit();
				}else{
					echo json_encode(array('success'=>false,'msg'=>__('Su informaci&oacute;n es incorrecta'),'validation'=>$this->Proyecto->validationErrors));
					exit();
				}
			}else{
				//insert

				if($this->request->data['Proyecto']['thumbnail']['name'] != ''){
					$this->request->data['Proyecto']['thumbnail'] = $this->request->data['Proyecto']['thumbnail']['name'];
					
					//$image_tmp = $this->request->data['Proyecto']['thumbnail']['tmp_name'];
					$uploaddir = APP.WEBROOT_DIR.'/files/thumb-proy/';
					$uploadfile = $uploaddir . basename($_FILES['data']['name']['Proyecto']['thumbnail']);
				
					move_uploaded_file($_FILES['data']['tmp_name']['Proyecto']['thumbnail'], $uploadfile);
				
				}else{
					unset($this->request->data['Proyecto']['thumbnail']);
				}

				/* NUEVA IMAGEN SECCIÓN 1 */

				if($this->request->data['Proyecto']['sect1_img']['name'] != ''){
					$this->request->data['Proyecto']['sect1_img'] = $this->request->data['Proyecto']['sect1_img']['name'];
					
					//$image_tmp = $this->request->data['Proyecto']['thumbnail']['tmp_name'];
					$uploaddir = APP.WEBROOT_DIR.'/files/sect1-img/';
					$uploadfile = $uploaddir . basename($_FILES['data']['name']['Proyecto']['sect1_img']);
				
					move_uploaded_file($_FILES['data']['tmp_name']['Proyecto']['sect1_img'], $uploadfile);
				
				}else{
					unset($this->request->data['Proyecto']['sect1_img']);
				}
				
				/* FIN NUEVA IMAGEN SECCIÓN 1 */
				

				$this->request->data['Proyecto']['estado'] = 1;

				$this->Proyecto->create();
				if ($this->Proyecto->save($this->request->data)) {
					$proyecto_id = $this->Proyecto->id;
					echo json_encode(array('success'=>true,'msg'=>__('La Acci&oacute; fue agregada con &eacute;xito.'),'Proyecto_id'=>$proyecto_id));
					exit();
				}else{
					$proyecto_id = '';
					echo json_encode(array('success'=>false,'msg'=>__('Su informaci&oacute;n es incorrecta'),'validation'=>$this->Proyecto->validationErrors));
					exit();
				}
			}
		}else{
			if(isset($proyecto_id)){
				$obj_proyecto = $this->Proyecto->findById($proyecto_id);
				
				$this->request->data = $obj_proyecto->data;
				$this->set(compact('proyecto_id','obj_proyecto'));
			}
		}
	}
	
	public function delete_proyecto(){
		$this->layout = 'ajax';
	
		$this->loadModel('Proyecto');
	
		if($this->request->is('post')){
			$proyecto_id = $this->request->data['proyecto_id'];
			
			$obj_proyecto = $this->Proyecto->findById($proyecto_id);
			if($obj_proyecto->saveField('estado', 0)){
				echo json_encode(array('success'=>true,'msg'=>__('Eliminado con &eacute;xito.')));
				exit();
			}else{
				echo json_encode(array('success'=>false,'msg'=>__('Error inesperado.')));
				exit();
			}
			/*if($this->Proyecto->deleteProyecto($proyecto_id)){
				echo json_encode(array('success'=>true,'msg'=>__('Eliminado con &eacute;xito.')));
				//exit();
			}else{
				echo json_encode(array('success'=>false,'msg'=>__('Error inesperado.')));
				//exit();
			}
			exit();*/
		}
	
	}	
}