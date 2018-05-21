<?php
App::uses('AppModel','Model');
  class Proyecto extends AppModel {
    public $name = 'Proyecto';

    
    public $validate = array(
            'thumb_titulo'    => array(
                    'notempty' => array(
                            'rule' => array('notEmpty'),
                            'message' => 'El titulo es requerida'
                    )
            )
    );
    
    
  public function listAllProyectos($order_by='Proyecto.created', $search_proyecto='',$order='DESC') {
            $arr_obj_proyecto = $this->findObjects('all',array(
                    'conditions'=>array(
                                    'Proyecto.thumb_titulo LIKE'=> '%'.$search_proyecto.'%',
                                    'Proyecto.estado != ' => 0
                    ),
                    'order'=> array($order_by.' '.$order)
            )
            );
        return $arr_obj_proyecto;
    }
    
    public function listFindProyectos($order_by='Trabajadore.created', $search_proyecto='',$order='DESC') {
            $arr_obj_proyecto = $this->findObjects('all',array(
                    'conditions'=>array(
                            'Proyecto.thumb_titulo LIKE'=> '%'.$search_proyecto.'%',
                            'Proyecto.estado != ' => 0
                    ),
                    /*'page'=> $start,
                    'limit'=> $per_page,
                    'offset'=> $start,*/
                    'order'=> array($order_by.' '.$order),
            )
            );
        return $arr_obj_proyecto;
    }
    
    /* Usado para ...*/    
    public function listProyectos() {
        return $this->find('list',
                array(
                        'fields' => array('id','proyecto'),
                        'conditions'=>array(
                                'Proyecto.estado != '=> 0
                        ),
                        'order' => array('Proyecto.created ASC')
                ));
    }
    
    /**
     * Delete actividades
     * @param int $actividad_id
     * @return boolean
     * @author Vladimir
     * @version 16 Marzo 2015
     */
    public function deleteProyecto($proyecto_id){
    
        if($this->deleteAll(array('Proyecto.id' => $proyecto_id), $cascada = true)){
            return true;
        }else{
            return false;
        }
    }
    
  }
?>
