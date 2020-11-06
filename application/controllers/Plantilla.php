<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plantilla extends CI_Controller {

	
	public function __construct() {
         parent::__construct();
         //$this->load->model(array('configmodel', 'usuariomodel', 'menumodel'));
    }


	public function index()
	{
		  $data = array(
		      'accion'=>0
		  );
		
		
		  $this->load->view('header');
		  $this->load->view('menu');
		  
		  //$this->load->view('plantilla');
		  $this->load->view('footer/footer',$data);
	}
}
