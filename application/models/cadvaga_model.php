<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Cadvaga_model extends CI_Model 
{ 
	public function buscaCursos(){
		$query = $this->db->get('cursos');
		return $query->result();
	}

	public function buscaEmpresas(){
		$this->db->select('id,nome_fantasia');
		$query = $this->db->get('empresas');
		return $query->result();
	}

	public function buscaBeneficios(){
		$query = $this->db->get('beneficios');
		return $query->result();
	}

	public function inserirVaga($vaga,$cursos){
		var_dump($cursos);

		$this->db->insert('vagas',$vaga);
		$vagaId = $this->db->insert_id();

		$dados = array();
		foreach ($cursos as $curso) {
			$dados1 = array(
				'cursos_id' => $curso,
				'vagas_id' => $vagaId
				);
			array_push($dados, $dados1);
		}

		$this->db->insert_batch('cursos_vagas',$dados);

	}


}

?>