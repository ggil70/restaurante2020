<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TablaGenerica extends CI_Controller {

	
	public function __construct() {
         parent::__construct();
         //$this->load->model(array('configmodel', 'usuariomodel', 'menumodel'));
    }


	public function index()
	{
        
        
        $this->load->model('TablaGenerica_mdl');
		$rowGenerica = $this->TablaGenerica_mdl->obtTabla();
		$primerTabla = 0;
		foreach($rowGenerica as $key){ 
			$primerTabla = $key->id;
			break;
		}	
		
		$data=array(
			'rowGenerica'=>$rowGenerica,
			'primerTabla'=>$primerTabla,
			'accion'=>1
		);
		
	    $this->load->view('header');
		$this->load->view('menu');
		$this->load->view('configuracion/generico/actGenerico',$data);
		$this->load->view('footer/footer', $data);
		$this->load->view('footer/footer_tablaGenerica', $data);
	}
	
	
	function ajax_datatable($id){
		//obtener la información de la tabla seleccionada
		$this->load->model('TablaGenerica_mdl');
		$arregloTabla = $this->TablaGenerica_mdl->obtRegistro($id);
		
		//armar el data table
		$tabla = $arregloTabla[0];
		$titulo = $arregloTabla[1];
		$nroRegistro = $arregloTabla[2];
		$rowTabla = $arregloTabla[3];
		
		//Armar bod del data table
		
        $html = '<table id="basic-datatables" class="display table table-striped table-hover">';
        $html.= '    <thead>';
        $html.= '        <tr>';
        $html.= '           <th width="80%">Nombre</th>';
        $html.= '           <th width="20%">Acción</th>';
        $html.= '        </tr>';
        $html.= '    </thead>';
        $html.= '    <tfoot>';
        $html.= '        <tr>';
        $html.= '           <th width="80%">Nombre</th>';
        $html.= '           <th width="20%">Acción</th>';
        $html.= '        </tr>';
        $html.= '    </tfoot>';
        $html.= '    <tbody>';
        if($nroRegistro==0){
			$html.= '      <tr>';
			$html.= '          <td>La Tabla no posee registros asociados</td>';
			$html.= '          <td></td>';
			$html.= '      </tr>';
		}else{
		    foreach($rowTabla as $key){ 
				$html.= '  <tr>';
				$html.= '      <td>' . $key->nombre.'</td>';
				$html.= '      <td>' . $key->id.'</td>';
				$html.= '  </tr>';
			}	
		}
		$html.= '    </tbody>';
		$html.= '</table>';    				
		
		
		$data = array(
		    "nroRegistro"=>$nroRegistro,
		    "titulo"=>$titulo,
		    "registro"=>$html);
        echo json_encode($data);	
	}
	
}
