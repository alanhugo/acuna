<?php
class AcunaController extends AppController{
	public $name = 'Acuna';
	
	public function beforeFilter(){
		parent::beforeFilter();
	}
	
	public function index() {
        
		$this->layout = "wescon";
	}
	
	
}