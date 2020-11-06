<?php
class Sg_modulo_mdl extends CI_Model {

	
	public function __construct(){
        parent::__construct();
       
    }

   
   
    public function obtModulo(){
		$this->db->select('*');
		$this->db->order_by('orden','asc');
		return $this->db->get('sg_modulo')->result();
    }
   
    public function valNombre($nombre){
		$sql = "select * ";
		$sql.= "from sg_modulo ";
		$sql.= "where nombre = '" . $nombre . "' ";
		$sq= $this->db->query($sql);
		$nro = $sq->num_rows(); 		
		return $nro;
    }
    
    
    public function insertModelo($data){
	    $this->db->insert('sg_modulo', $data);
    }		
   
}
