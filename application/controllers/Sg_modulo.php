<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sg_modulo extends CI_Controller {

	
	public function __construct() {
         parent::__construct();
         //$this->load->model(array('configmodel', 'usuariomodel', 'menumodel'));
    }


	public function index()
	{
		
		$data=array(
			'accion'=>1
		);
		
	    $this->load->view('header');
		$this->load->view('menu');
		$this->load->view('seguridad/modulo/actModulo',$data);
		$this->load->view('footer/footer', $data);
		$this->load->view('seguridad/modulo/footer_modulo', $data);	
		$this->load->view('footer/lib_numerica');	
		
	}
	
	function ajax_datatable($id){
		$this->load->model('Sg_modulo_mdl');
		$row = $this->Sg_modulo_mdl->obtModulo();
		$this->generarDatatable($row);
	}	
	

	function ajax_incluir($parametro){
		$arreglo = explode('xx',$parametro);
		$nombre = $arreglo[0];
		$orden = $arreglo[1];
		$data = array(
		  'nombre'=>$nombre,
		  'orden'=>$orden
		);
		$this->Sg_modulo_mdl->insertModelo($data);
		$row = $this->Sg_modulo_mdl->obtModulo();
		$this->generarDatatable($row);
	}	
	
	
	
	
	
	
	function generarDatatable($row){
		//obtener la información de la tabla seleccionada
		$modificar = base_url() . "assets/images/modificar02.jpeg";
		$eliminar = base_url() . "assets/images/eliminar.jpeg";
		$reactivar = base_url() . "assets/images/reactivar.jpeg";
		
        $html = '<table id="basic-datatables" class="display table table-striped table-hover">';
        $html.= '    <thead>';
        $html.= '        <tr>';
        $html.= '           <th width="80%">Nombre</th>';
		$html.= '           <th width="10%">Orden</th>';	        
        $html.= '           <th width="10%">Acción</th>';
        $html.= '        </tr>';
        $html.= '    </thead>';
        $html.= '    <tfoot>';
        $html.= '        <tr>';
        $html.= '           <th width="80%">Nombre</th>';
		$html.= '           <th width="10%">Orden</th>';	        
        $html.= '           <th width="10%">Acción</th>';
        $html.= '        </tr>';
        $html.= '    </tfoot>';
        $html.= '    <tbody>';
        if($row==false){
			$html.= '      <tr>';
			$html.= '          <td colspan="3">La Tabla no posee registros asociados</td>';
			$html.= '      </tr>';
		}else{
		    foreach($row as $key){ 
				$html.= '  <tr>';
				$html.= '      <td>' . $key->nombre.'</td>';
				$html.= '      <td style="text-align:center">' . $key->orden.'</td>';
				$html.= '      <td>';				
				if($key->activo=='t'){

					$html.= '<a href="javascript:void(0)" onclick="javascript:modificar_form('.$key->id.')">';
					$html.= '<img src="'.$modificar.'" style="width:30px; height:30px" alt="Modificar"></a>';
					$html.= '&nbsp;<a href="javascript:void(0)" onclick="javascript:eliminar_form('.$key->id.')">';
					$html.= '<img src="'.$eliminar.'" style="width:30px; height:30px" alt="Desactivar"></a>';
				}else{
					$html.= '<a href="javascript:void(0)" onclick="javascript:reactivar_form('.$key->id.')">';
					$html.= '<img src="'.$reactivar.'" style="width:30px; height:30px" alt="Activar"></a>';
				}	
				$html.= '       </td>';				
				$html.= '</tr>';
			}
		}	
		$html.= '    </tbody>';
		$html.= '</table>';    				
		$data = array(
		    "registro"=>$html);
        echo json_encode($data);	
	}


	function ajax_validar_duplicidad($nombre){
		$nombre = str_replace("aaa"," ",$nombre);
		$this->load->model('Sg_modulo_mdl');
		$nro = $this->Sg_modulo_mdl->valNombre($nombre);		

		$status = 0;
		if($nro>0){
		    $status = 1;	
		}
		$data = array(
		    "status"=>$status);
        echo json_encode($data);	
	}
	

}
