<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrar extends CI_Controller {

	function __construct(){
		
		parent::__construct();
        // $this->load->helper('form');
        // $this->load->helper('url');
		$this->load->model('Gestion');

        $this->getSession();
		
	}

	public function index()
	{
		// ini_set('memory_limit', '2000M');
		ini_set('memory_limit', '8192M'); 
		$data['title'] = 'Mis Registrados';
		$data['image'] = 'logo-fp.png';
		$data['content'] = 'registrar/index';
		$this->load->library('SmartGrid/Smartgrid');
		$id = $_SESSION['user']->id;
		//where user_id = $id 

		$query = $this->db->query("SELECT * FROM sub_coordinadores where user_id = $id");
		$m= $query->result();
		$data['total'] = count($m);

		$sql = "SELECT cedula,nombre,apellido,celular,recinto_nombre,codigo_colegio,mesa,date FROM sub_coordinadores where user_id = $id"; 

		// Column settings
		$columns = array(
		// "cedula"=>array("header"=>"Cédula", "type"=>"label"),
		"nombre"=>array("header"=>"Nombre", "type"=>"label"),
		"apellido"=>array("header"=>"Apellido", "type"=>"label"),
		"celular"=>array("header"=>"Célular", "type"=>"label"),
		"recinto_nombre"=>array("header"=>"Recinto", "type"=>"label"),
		// "codigo_colegio"=>array("header"=>"Colegio", "type"=>"label"),
		"mesa"=>array("header"=>"Mesa", "type"=>"label"),
		// "date"=>array("header"=>"Fecha de Registro", "type"=>"label")
		);   
        $config = array("page_size"=> 20,  "toolbar_position"=> 'bottom');
		$this->smartgrid->set_grid($sql, $columns, $config);
		$data['grid_html'] = $this->smartgrid->render_grid(); 

 		$this->load->view('home/plantilla', $data);
	}

	public function indexOld()
	{
		// ini_set('memory_limit', '2000M');
		ini_set('memory_limit', '8192M'); 
		$data['title'] = 'Mis Registrados';
		$data['image'] = 'logo-fp.png';
		$data['content'] = 'registrar/index';
		$this->load->library('SmartGrid/Smartgrid');
		$id = $_SESSION['user']->id;
		require_once("application/libraries/phpGrid/conf.php");
		$data['phpgrid'] = new C_DataGrid("SELECT * FROM sub_coordinadores", "id", "sub_coordinadores");
		$data['phpgrid']-> set_query_filter("user_id = 2");

		$data['total'] = 0; 

 		$this->load->view('plantilla', $data);
	}

	public function subcoordinador(){

		$post = $_POST;
		$data['title'] = 'Registrar Sub Coordinador';
		$data['image'] = 'logo-fp.png';
		$data['content'] = 'registrar/registro';
		$this_url = base_url('registrar/subcoordinador');

		if ($post) {
			$cedula = str_replace('-', '', trim($_POST['cedula']));

			if (!$this->Gestion->get_subcoordinador($cedula)) {

				if ($result = $this->Gestion->get_person_padron($cedula)) {
					$this->Gestion->save_subcoordinador($result, $post);
					$this->session->set_flashdata('success','Sub Coordinador Registrado Correctamente');
					header("Location: $this_url");
				}else{
					$this->session->set_flashdata('error','Cédula Inválida');
					header("Location: $this_url");
				}
				
			}else{
				$this->session->set_flashdata('alert','Esta persona ya se encuentra registrada');
				header("Location: $this_url");
			}

			
		}

 		$this->load->view('home/plantilla', $data);

	}

	function getSession(){
		if (!$_SESSION['user']) {
			redirect(base_url('auth'));
		} 
	}
}
