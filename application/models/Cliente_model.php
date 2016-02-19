<?php
class Cliente_model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	function get_clientes() 
	{
		$this->db->select('*');	
		
		return $this->db->get('cliente')->result();
	}

	public function cadastrar()
	{
		$data['nome'] = $this->input->post('nome');
		$data['cpf_cnpj'] = $this->input->post('cpf_cnpj');
		$data['rg_ie'] = $this->input->post('rg_ie');
		$data['logradouro'] = $this->input->post('logradouro');
		$data['numero'] = $this->input->post('numero');
		$data['complemento'] = $this->input->post('complemento');
		$data['bairro'] = $this->input->post('bairro');
		$data['cidade'] = $this->input->post('cidade');
		$data['cep'] = $this->input->post('cep');
		$data['uf'] = $this->input->post('uf');
		$data['data_nascimento'] = $this->input->post('data_nascimento');
		$data['data_cadastro'] = $this->input->post('data_cadastro');
		$data['status'] = $this->input->post('status');
		$data['telefone'] = $this->input->post('telefone');
		$data['celular'] = $this->input->post('celular');
		$data['email'] = $this->input->post('email');
		$data['observacao'] = $this->input->post('observacao');
		$data['nome_mae'] = $this->input->post('nome_mae');
		$data['ctps'] = $this->input->post('ctps');
		$data['nit'] = $this->input->post('nit');
		$data['data_admissao'] = $this->input->post('data_admissao');
		$data['data_demissao'] = $this->input->post('data_demissao');
		$data['estado_civil'] = $this->input->post('estado_civil');
		$data['profissao'] = $this->input->post('profissao');
		$data['salario'] = $this->input->post('salario');
		$data['data_atendimento'] = $this->input->post('data_atendimento');
		$data['tipo_beneficio'] = $this->input->post('tipo_beneficio');
		$data['numero_beneficio'] = $this->input->post('numero_beneficio');
			
		return $this->db->insert('cliente', $data);
	}

	public function excluir($id = null)
	{			
		$this->db->where('id_cliente', $id);

		return $this->db->delete('cliente');
	}

	public function salvar_atualizacao()
	{
		$id = $this->input->post('id_cliente');

		$data['nome'] = $this->input->post('nome');
		$data['cpf_cnpj'] = $this->input->post('cpf_cnpj');
		$data['rg_ie'] = $this->input->post('rg_ie');
		$data['logradouro'] = $this->input->post('logradouro');
		$data['numero'] = $this->input->post('numero');
		$data['complemento'] = $this->input->post('complemento');
		$data['bairro'] = $this->input->post('bairro');
		$data['cidade'] = $this->input->post('cidade');
		$data['cep'] = $this->input->post('cep');
		$data['uf'] = $this->input->post('uf');
		$data['data_nascimento'] = $this->input->post('data_nascimento');
		$data['data_cadastro'] = $this->input->post('data_cadastro');
		$data['status'] = $this->input->post('status');
		$data['telefone'] = $this->input->post('telefone');
		$data['celular'] = $this->input->post('celular');
		$data['email'] = $this->input->post('email');
		$data['observacao'] = $this->input->post('observacao');
		$data['nome_mae'] = $this->input->post('nome_mae');
		$data['ctps'] = $this->input->post('ctps');
		$data['nit'] = $this->input->post('nit');
		$data['data_admissao'] = $this->input->post('data_admissao');
		$data['data_demissao'] = $this->input->post('data_demissao');
		$data['estado_civil'] = $this->input->post('estado_civil');
		$data['profissao'] = $this->input->post('profissao');
		$data['salario'] = $this->input->post('salario');
		$data['data_atendimento'] = $this->input->post('data_atendimento');
		$data['tipo_beneficio'] = $this->input->post('tipo_beneficio');
		$data['numero_beneficio'] = $this->input->post('numero_beneficio');
		
		$this->db->where('id_cliente', $id);

		return $this->db->update('cliente', $data);
	}

}