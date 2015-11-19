<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Principal extends CI_Controller 
{ 
	function index() { 
		$this->load->view('layout/topo');
		$this->load->view('cliente/principal');
		$this->load->view('layout/rodape');
	} 
}

?>