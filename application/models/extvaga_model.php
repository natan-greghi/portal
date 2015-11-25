<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Extvaga_model extends CI_Model 
{ 
	public function consultaVagasNaoAprovadas(){

		$this->db->select('v.id, titulo, numero_vagas, group_concat(c.sigla) AS "sigla_curso", ci.nome as cidade, u.sigla');
		$this->db->from('vagas v');
		$this->db->join('cursos_vagas cv', 'v.id = cv.vagas_id');
		$this->db->join('cursos c', 'c.id = cv.cursos_id');
		$this->db->join('empresas e', 'e.id = v.empresas_id');
		$this->db->join('cidade ci', 'ci.id = e.cidade_id');
		$this->db->join('uf u', 'u.id = ci.uf_id');
		$this->db->where('v.aprovado=', 'false');
		$this->db->group_by('v.id');
		$query1 = $this->db->get();

		return $query1->result();	
	}

	public function aprovarVaga($idVaga){

		$dados = array(
			'aprovado' => 1 
			);
		$this->db->where('id', $idVaga);
		$this->db->update('vagas', $dados);
	}

}

?>