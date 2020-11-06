<?php
/**
 * Controlador del inicio 
 * @author sistemaweb21. 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
/*---------------------------------------------------------------------*/
    public function __construct() {
         parent::__construct();
         //$this->load->model(array('configmodel', 'usuariomodel', 'menumodel'));
    }
/*---------------------------------------------------------------------*/
	public function index(){

		 //$row = $this->configmodel->get();

		 //$datos = [
	     //	'imagen' => $row->imagen,
	     //	'banner' => $row->cintillo,
	     //	'titulo' => $row->titulo,
        //'logo' => $row->logo,
	     //];

		  $this->load->view('login/header');
		  //$this->load->view('login/login_1',$datos);
		  $this->load->view('login/login_1');
		  $this->load->view('login/footer');
      
	}// fin index


	/*---------------------------------------------------------------------*/
	public function logueo(){

		 //VERIFICAR
    if ($this->input->post()) 
     {      
        
        $username = strtoupper($this->input->post('email'));

        $password = $this->input->post('pass');
       // $username = $username.$this->input->post('username');

        $check_user = $this->usuariomodel->login_usuario($username, $password);

        if ($check_user) {

           if ($check_user->correo_activo == 'f')
            {
                $this->session->set_flashdata('type','danger');
                $this->session->set_flashdata('message','Debe activar su cuenta '.$username);
                redirect(base_url() . 'index.php/login', 'refresh');
            }
            else
            {

              if ($check_user->usuario_activo == 'f')
              {
                $this->session->set_flashdata('type','danger');
                $this->session->set_flashdata('message','Su usuario esta desactivado temporalmente');
                redirect(base_url() . 'index.php/login', 'refresh');
              }

            }
	      }

        //bajar menu
        //construir menu


      $menuData = $this->menumodel->menu($check_user->id_permiso);

       $menu_usuario =  "<li>
           <a title='Landing Page' href='".base_url()."index.php/admin/' aria-expanded='false'><span class='educate-icon educate-home icon-wrap'></span>
           <span class='mini-click-non'>Inicio</span></a>
           </li>";


         $aux = 0;
           
        foreach ($menuData as $row) {

        if ($row->padre == 0)
        {

          if ($aux == 0){

            $menu_usuario.= "<li>
            <a class='has-arrow' href='#' aria-expanded='false'><span class='$row->icono'></span> <span class='mini-click-non'>$row->nombre</span></a>";

            $aux = 1;
          }else
          {
             $menu_usuario.= "</li><li>
            <a class='has-arrow' href='#' aria-expanded='false'><span class='$row->icono'></span> <span class='mini-click-non'>$row->nombre</span></a>";
          }
        }else
        {
          $menu_usuario.= "<ul class='submenu-angle' aria-expanded='false'>
                <li><a title='$row->nombre' href='".base_url()."$row->links'><span class='mini-sub-pro'>$row->nombre</span></a></li>
            </ul> ";
        }

      } 
      $menu_usuario.= "</li>"; 
     
       $data = array(
              'is_logued_in' => TRUE,
              'id_usuario' => $check_user->id,
              'id_permiso' => $check_user->id_permiso,
              'nombre_u' => $check_user->nombre,
              'apellido_u' => $check_user->apellido,
              'cedula_u' => $check_user->cedula,
              'bpass' => $check_user->password_activo,
              'menu_usuario' => $menu_usuario
          );

          $this->session->set_flashdata('type','success');
          $this->session->set_flashdata('message','Ha iniciado sesión Correctamente');

          $this->session->set_userdata($data);	
          $this->usuariomodel->registro_ultimo_logueo();

          //$this->redirect_login();

          redirect(base_url() . 'index.php/admin', 'refresh');
	   }

	   	 redirect(base_url() . 'index.php/login', 'refresh');

	  } 	 




     public function salir ()
    {
        $this->session->set_userdata('is_logued_in', FALSE);
        $this->session->sess_destroy();

        $this->session->set_flashdata('type','success');
        $this->session->set_flashdata('message','Ha cerrado sesión Correctamente');

        redirect(base_url() . 'index.php/login', 'refresh');
    }

}
