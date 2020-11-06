<?php
class Sg_usuario_modulo_mdl extends CI_Model {

	
	public function __construct(){
        parent::__construct();
       
    }

   
   
   function obtPermiso($id){
        $sql = "select um.*, sg_modulo.nombre, sg_modulo.icono_fas_fa "; 
        $sql.= "from sg_usuario_modulo as um ";
        $sql.= "inner join sg_modulo on um.id_modulo = sg_modulo.id ";
        $sql.= "where um.id_usuario = ".$id;
        $sql.= " and um.activo = 't' ";
        $sql.= " order by sg_modulo.orden ";
        $rows = $this->db->query($sql);
        
        return $rows->result();   		
   }
   
   
   function obtPermisoSM($id){
        $sql = "select sm.* from sg_sub_modulo as sm ";
        $sql.= "inner join sg_usuario_modulo um on um.id_usuario=".$id. " and um.activo = 't' ";
        $sql.= "inner join sg_modulo on sg_modulo.id = um.id_modulo ";
        $sql.= "where sm.id_modulo = um.id_modulo and sm.activo = 't' order by sg_modulo.orden, sm.orden";	   
        
                
        $rows = $this->db->query($sql);
        return $rows->result();   		
	   
   }
   

   
   
}
