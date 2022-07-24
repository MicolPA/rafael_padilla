<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestion extends CI_Model{


	function get_user($cedula=null, $id=null){

		
		if ($id) {
			$query = $this->db->query("SELECT * FROM user where id = $id");
		}else{
			$cedula = str_replace('-', '', $cedula);
			$query = $this->db->query("SELECT * FROM user where username = $cedula");
		}

		if ($query->result()) {
			return $query->first_row();
		}else{
			return false;
		}
	}

	function updateUser($cedula, $clave, $celular){

		if ($clave) {
			$clave = password_hash($clave, PASSWORD_DEFAULT);
			$user = array(
				'clave' => $clave,
				'celular' => $celular
			);
		}else{
			$user = array(
				'celular' => $celular
			);
		}

		


		$this->db->where('username', $cedula);
		$this->db->update('user', $user);

	}

	function updateCoordinador($cedula, $celular, $mesa=null){

		$user = array(
			'celular' => $celular,
			'mesa' => $mesa,
		);
		$this->db->where('cedula', $cedula);
		$this->db->update('coordinadores', $user);

	}

	function updateSubCoordinador($cedula, $celular, $mesa=null){

		$user = array(
			'celular' => $celular,
			'mesa' => $mesa,
		);
		$this->db->where('cedula', $cedula);
		$this->db->update('sub_coordinadores', $user);

	}

	function get_coordinador($cedula){

		$cedula = str_replace('-', '', $cedula);
		$query = $this->db->query("SELECT * FROM coordinadores where cedula = $cedula");

		if ($query->result()) {
			return $query->first_row();
		}else{
			return false;
		}
	}

	function get_person_padron($cedula){

		$query = $this->db->query("SELECT * FROM padron where Cedula = $cedula");
		if ($query->result()) {
			return $query->first_row();
		}else{
			return false;
		}
	}

	function get_subcoordinador($cedula){

		$query = $this->db->query("SELECT * FROM sub_coordinadores where cedula = $cedula");
		if ($query->result()) {
			return $query->first_row();
		}else{
			return false;
		}
	}

	function get_provincia_name($id){

		$query = $this->db->query("SELECT Descripcion FROM provincia where id = $id limit 1");
		if ($query->result()) {
			return $query->first_row()->Descripcion;
		}else{
			return false;
		}
	}

	function get_municipio_name($id){

		$query = $this->db->query("SELECT Descripcion FROM municipio where id = $id limit 1");
		if ($query->result()) {
			return $query->first_row()->Descripcion;
		}else{
			return false;
		}
	}

	function get_recinto_name($id){

		$query = $this->db->query("SELECT descripcionColegio FROM colegios where IdColegio = $id limit 1");
		if ($query->result()) {
			return $query->first_row()->descripcionColegio;
		}else{
			return false;
		}
	}

	function save_coordinador($person, $user, $mesa=null){


		$person = array(

			'cedula' => $person->Cedula,
			'nombre' => $person->nombres,
			'apellido' => $person->apellido1 . " " . $person->apellido2,
			'provincia_id' => $person->IdProvincia,
			'provincia_nombre' => $this->get_provincia_name($person->IdProvincia),
			'municipio_id' => $person->IdMunicipio,
			'municipio_nombre' => $this->get_municipio_name($person->IdMunicipio),
			'circunscripcion' => $person->CodigoCircunscripcion,
			'recinto_nombre' => $this->get_recinto_name($person->IdColegio),
			'codigo_recinto' => $person->CodigoRecinto,
			'codigo_colegio' => $person->CodigoColegio,
			'celular' => $user['celular'],
			'correo' => $user['email'],
			'cargo' => 'Coordinador',
			'mesa' => $mesa,
			'date' => date('Y-m-d H:i:s'),
		);

		$this->db->insert('coordinadores', $person);
	}

	function save_subcoordinador($person, $data){

		$user = $_SESSION['user'];

		$person = array(

			'cedula' => $person->Cedula,
			'nombre' => $person->nombres,
			'apellido' => $person->apellido1 . " " . $person->apellido2,
			'provincia_id' => $person->IdProvincia,
			'provincia_nombre' => $this->get_provincia_name($person->IdProvincia),
			'municipio_id' => $person->IdMunicipio,
			'municipio_nombre' => $this->get_municipio_name($person->IdMunicipio),
			'circunscripcion' => $person->CodigoCircunscripcion,
			'recinto_nombre' => $this->get_recinto_name($person->IdColegio),
			'codigo_recinto' => $person->CodigoRecinto,
			'codigo_colegio' => $person->CodigoColegio,
			'celular' => $data['celular'],
			'user_id' => $user->id,
			'cargo' => 'Sub Coordinador',
			'mesa' => null,
			'date' => date('Y-m-d H:i:s'),
		);

		$this->db->insert('sub_coordinadores', $person);
	}

}

 ?>