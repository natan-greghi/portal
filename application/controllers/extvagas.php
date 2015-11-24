<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Extvagas extends CI_Controller 
{ 

	public function __construct(){
		parent::__construct();

		$this->load->model('extvaga_model');
	}

	public function index() { 
		$dados = array(
			'vagasNaoAprovadas' => $this->extvaga_model->consultaVagasNaoAprovadas()
			);

		$this->load->view('layout/topoADM');
		$this->load->view('cliente/extensaoVagas', $dados);
		$this->load->view('layout/rodape');

	}

	public function aprovarVaga($idVaga){
		$this->extvaga_model->aprovarVaga($idVaga);

		redirect('extvagas','refresh');
		//$this->index();
	}
}
?>