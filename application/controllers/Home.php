<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		
		parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
		
	}

	public function index()
	{
		$data['title'] = 'Inicio';
		$data['image'] = 'logo.png';
		$data['content'] = 'home/index';
 		$this->load->view('plantilla', $data);
	}

	function getSession(){
		if (!$this->session->userdata('login')) {
			redirect(base_url('auth'));
		} 
	}
}
