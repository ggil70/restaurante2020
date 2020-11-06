<?php
class TablaGenerica_mdl extends CI_Model {

	
	public function __construct(){
        parent::__construct();
       
    }

	function obtTabla(){
  		$this->db->select('*');
		$this->db->where('activo',true);
		$this->db->order_by('nombre');
		$row = $this->db->get('cf_generica')->result();
		return $row;
   }
   
   
   function obtRegistro($id){
		$this->db->where('id',$id);
		$rowTabla = $this->db->get('cf_generica')->row();
		$tabla = $rowTabla->tabla;
		$titulo = $rowTabla->nombre;
		
        //obtener informacion tabla seleccionada
		$this->db->where('activo',true);
		$query = $this->db->get($tabla);
		$nro = $query->num_rows(); 

		$this->db->select('*');
		$this->db->where('activo',true);
		$this->db->order_by('nombre','desc');
		$row = $this->db->get($tabla)->result();
		$arreglo[0]=$tabla;
		$arreglo[1]=$titulo;
		$arreglo[2]=$nro;
		$arreglo[3]=$row;
		return $arreglo;            
   }
   
}
