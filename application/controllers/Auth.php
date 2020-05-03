<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct(){

		parent::__construct();
		// $this->load->helper('form');
		// $this->load->library('form_validation');
		// $this->load->library('session');
		$this->load->model('Gestion');
	}

	public function registro()
	{
		$post = $_POST;
		$data['title'] = 'Regístrarse como Coordinador';
		$data['image'] = 'logo.png';
		$data['content'] = 'auth/registro';
		$this_url = base_url('auth/registro');

		if ($post) {

			$cedula = str_replace('-', '', trim($_POST['cedula']));
			if (!$this->Gestion->get_user($cedula)) {
				
				if ($result = $this->Gestion->get_person_padron($cedula)) {
					
					$this->save_user($result, $post);
					$url = base_url('auth/login');
					header("Location: $url");
					$this->session->set_flashdata('success','Usuario Creado Correctamente');
				}else{
					header("Location: $this_url");
					$this->session->set_flashdata('error','Cédula Inválida');
				}
			}else{
				header("Location: $this_url");
				$this->session->set_flashdata('alert','Ya existe un usuario con esta cédula');
			}
		}

 		$this->load->view('plantilla', $data);
	}

	function save_user($person, $data){

		$clave = password_hash($data['clave'], PASSWORD_DEFAULT);

		$user = array(

			'username' => $person->Cedula,
			'nombre' => $person->nombres,
			'apellido' => $person->apellido1 . " " . $person->apellido2,
			'celular' => $data['celular'],
			'clave' => $clave,
			'email' => $data['correo'],
			'date' => date('Y-m-d H:i:s'),
		);

		$this->db->insert('user', $user);

		$this->Gestion->save_coordinador($person, $user, $data['mesa']);

	}

	function login(){

		$post = $_POST;
		$data['title'] = 'Iniciar Sesión';
		$data['image'] = 'logo.png';
		$data['content'] = 'auth/login';

		if ($post) {
			$this->checkUser($post);
		}

		$this->load->view('plantilla', $data);

	}

	function logout(){

		$_SESSION['user'] = false;
		$url = base_url('/');
		header("Location: $url");

	}

	function checkUser($data){

		$data['cedula'] = str_replace('-', '', $data['cedula']);
		$result = $this->Gestion->get_user($data['cedula']);
		$this_url = base_url('auth/login');

		if ($result) {
			// print_r($data['clave']);
			// print_r($result->clave);
			$verify = password_verify($data['clave'], $result->clave);
			if ($verify) {
				$_SESSION['user'] = $result;
				$url = base_url('registrar/subcoordinador');
				header("Location: $url");
			}else{
				$this->session->set_flashdata('error','Usuario y/o contraseña incorrecto');
				header("Location: $this_url");
			}
		}else{
			$this->session->set_flashdata('error','Usuario y/o contraseña incorrecto');
			header("Location: $this_url");
		}
	}
}
