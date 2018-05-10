<?php
class AcunaController extends AppController{
	public $name = 'Acuna';
	
	public function beforeFilter(){
		parent::beforeFilter();
	}
	
	public function index() {
        
		$this->layout = "wescon";
	}
	
	public function conocenos() {
        
		$this->layout = "wescon";
	}
	
	public function venta() {
        
		$this->layout = "wescon";
	}
	
	public function entregado() {
        
		$this->layout = "wescon";
	}
	
	public function contacto() {
        
		$this->layout = "wescon";
	}
}