<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acceso extends CI_Controller {
	

	
	public function __construct() {
         parent::__construct();
         //$this->load->model(array('configmodel', 'usuariomodel', 'menumodel'));
    }


	public function index()
	{
		  $this->load->model('Sg_usuario_modulo_mdl');
		  $idUsuario = 1;
		  $rowPermiso = $this->Sg_usuario_modulo_mdl->obtPermiso($idUsuario);
		  
		  /*Permiso sub Modulo*/
		  $rowPermisoSM = $this->Sg_usuario_modulo_mdl->obtPermisoSM($idUsuario);
		  
		  

		  /* construir arreglo de permiso de los modulos usuario */
		  if($rowPermiso){
			  $i = 0;
		      foreach($rowPermiso as $key){
				  $arregloPermiso[$i][0] = $key->id_modulo;
				  $arregloPermiso[$i][1] = $key->nombre;
				  $arregloPermiso[$i][2] = $key->icono_fas_fa;
				  $permiso = $key->read . "," . $key->create . "," . $key->update . "," . $key->delete;
				  $arregloPermiso[$i][3] = $permiso;
				  $i+=1;			  
			  }	  
			  $i=$i-1;
			  
			  
			  /* construir arreglo de permiso de los sub modulos usuario */			  
			  $j = 0;
		      foreach($rowPermisoSM as $key){
				  $arregloPermisoSM[$j][0] = $key->id;
				  $arregloPermisoSM[$j][1] = $key->nombre;
				  $arregloPermisoSM[$j][2] = $key->url_sub_modulo;
				  $arregloPermisoSM[$j][3] = $key->id_modulo;
				  $j+=1;			  
			  }	  
			  $j=$j-1;

			  $dataPermiso = array(
				  'arregloPermisoModulo'=>$arregloPermiso,
				  'nroFilaModulo'=>$i,
				  'arregloPermisoSM'=>$arregloPermisoSM,
				  'nroFilaSM'=>$j,
				  'idUsuario'=>1
				  
			  );
			  $this->session->set_userdata($dataPermiso);		  		  
			  
			  
			  $data = array(
				  'accion'=>0,
			  );
			  
			  $this->load->view('header');
			  $this->load->view('menu',$data);
			  
			  //$this->load->view('plantilla');
			  $this->load->view('footer/footer',$data);
		  }else{
			  
			 /*Remitirlo a una pantalla de que no tiene permiso*/ 
		     die("No Tiene Permiso");			  
		  }   
	}
	
	

	
}
