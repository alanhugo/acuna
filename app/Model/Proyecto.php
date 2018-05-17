<?php
App::uses('AppModel','Model');
  class Proyecto extends AppModel {
    public $name = 'Proyecto';
    //public $displayField = 'nombre_usuario';
    
    //public $virtualFields = array('captcha' => 0);
    
    function beforeFilter() {
        /*$this->Auth->authenticate = ClassRegistry::init('Proyecto');*/
        parent::beforeFilter();
    }
    
    public $belongsTo = array(
            'TipoVivienda' => array(
                    'className' => 'TipoVivienda',
                    'foreignKey' => 'tipo_vivienda_id',
                    'conditions' => '',
                    'fields' => '',
                    'order' => ''
            ),
            'Banco' => array(
                    'className' => 'Banco',
                    'foreignKey' => 'bco_id',
                    'conditions' => '',
                    'fields' => '',
                    'order' => ''
            )
    );
    

    public $validate = array(
        'proyectoname'    => array(
            'required' => array(
                'rule' => array('notEmpty','isUnique'),
                'message' => 'Nombre de usuario es requerido'
            )
        ),
        'password'     => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'La clave es requerida'
            )
        )
    );
    
    public function beforeSave($options = array()) {
    
        /* password hashing */
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }
    
    
    public function listAllProyectos($order_by='Proyecto.created', $search_proyectoname='',$order='DESC') {
        $arr_obj_proyecto = $this->findObjects('all',array(
                'conditions'=>array(
                        'AND' => array(
                                'Proyecto.proyectoname LIKE'=> '%'.$search_proyectoname.'%',
                                'Proyecto.estado != ' => 0
                        )
                ),
                'order'=> array($order_by.' '.$order)
        )
        );
        return $arr_obj_proyecto;
    }
    
    public function listFindProyectos($order_by='Proyecto.estado', $search_proyectoname='',$order='DESC', $start=0, $per_page=10) {
        $arr_obj_proyecto = $this->findObjects('all',array(
                'conditions'=>array(
                        'AND' => array(
                                'Proyecto.proyectoname LIKE'=> '%'.$search_proyectoname.'%',
                                //'Proyecto.estado != ' => 0
                        )
                ),
                //'page'=> $start,
                'limit'=> $per_page,
                'offset'=> $start,
                'order'=> array('Proyecto.estado DESC'),
        )
        );
        return $arr_obj_proyecto;
    }
    
    /* Contar los usuarios usado para el Dashboard */
    public function TotalUsuarios() {
        return $this->find('list',
                array(
                        /*'fields' => array('id','proyectoname'),*/
                        'conditions'=>array(
                                'Proyecto.estado != '=> 0
                        ),
                        'order' => array('Proyecto.proyectoname ASC')
                ));
    }
    
    /**
     * Delete proyectos
     * @param int $proyecto_id
     * @return boolean
     * @author Vladimir
     * @version 17 Marzo 2015
     */
    public function deleteProyecto($proyecto_id){
        if($this->deleteAll(array('Proyecto.id' => $proyecto_id), $cascada = false)){
            return true;
        }else{
            return false;
        }
    }
    
    public function listarInfoPersonalUsuario(){
        $arr_obj_info_usuarios = $this->findObjects('all',array(
                /*'joins' => array(
                        array(
                                'table' => 'tipo_usuarios',
                                'alias' => 'TipoUsuarioJoin',
                                'type' => 'INNER',
                                'conditions' => array(
                                        'TipoUsuarioJoin.id = Usuario.tipo_usuario_id'
                                )
                        ),
                        array(
                                'table' => 'personas',
                                'alias' => 'PersonaJoin',
                                'type' => 'INNER',
                                'conditions' => array(
                                        'PersonaJoin.id = Usuario.id'
                                )
                        )
                        array(
                                'table' => 'personas',
                                'alias' => 'PersonaJoin',
                                'type' => 'INNER',
                                'conditions' => array(
                                        'PersonaJoin.id = Usuario.id'
                                )
                        )
                        ),*/
                'order'=> array('Proyecto.created ASC'),
        )
        );
        return $arr_obj_info_usuarios;
    }
    
    
    public function checkPasswordForProyecto($proyecto_id, $current_pass = null){
        $obj_proyecto = $this->findById($proyecto_id);

        $old_pass = $obj_proyecto ->getAttr('password');
        $current_pass_hash = AuthComponent::password($current_pass);

    
        if($current_pass_hash == $old_pass){
            return true;
        }
        return false;
    }
    
    
    public function hashPasswords($data) {
        if (isset($data['Proyecto']['clave'])) {
            $data['Proyecto']['clave'] = md5($data['Proyecto']['clave']);
            return $data;
        }
        return $data;
    }
    
  }
?>