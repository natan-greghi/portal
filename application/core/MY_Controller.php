<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public $userID;
	public $usuario;
	public $email;
	public $empresaID;


	public $temChamada;
	public $donoChamada;


	public function __construct() {
		parent::__construct();

		if ($this->session->has_userdata('logado')){
			$this->userID = ($this->session->userdata['logado']['userID']);
			$this->usuario = ($this->session->userdata['logado']['nome']);
			$this->email = ($this->session->userdata['logado']['email']);
			$this->empresaID = ($this->session->userdata['logado']['empresaID']);

			$this->load->model('chamada_model');
			$this->temChamada = $this->chamada_model->receber_chamada($this->userID);
			$this->donoChamada = $this->chamada_model->busca_dono_sala($this->temChamada['dono_chamada']);
			if(is_null($this->temChamada)){
				$this->temChamada['entrou_chamada'] = 1;
				$this->temChamada['dono_chamada'] = '';
				$this->donoChamada = '';
			}

		} else {
			redirect('/login/', 'refresh');
		}
	}


}