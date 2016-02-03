	<?php

		/**
		* 
		*/
		class Usuario_model extends CI_Model
		{
			
			function __construct()
			{
				parent::__construct();
			}

			function get_usuarios() 
			{
				$this->db->select('*');	
				return $this->db->get('usuario')->result();

			}

			public function cadastrar()
			{
				$data['nome'] = $this->input->post('nome');
				//$data['cpf'] = $this->input->post('cpf');
				$data['email'] = $this->input->post('email');
				$data['senha'] = md5($this->input->post('senha'));
				$data['status'] = $this->input->post('status');
				$data['nivel'] = $this->input->post('nivel');
				//$data['cidade_id_cidade'] = $this->input->post('cidade');

				return $this->db->insert('usuario', $data);
			}

			public function excluir($id = null)
			{			

				$this->db->where('id_usuario', $id);

				return $this->db->delete('usuario');
			}

			public function salvar_atualizacao()
			{
				$id = $this->input->post('id_usuario');

				$data['nome'] = $this->input->post('nome');
				//$data['cpf'] = $this->input->post('cpf');
				$data['email'] = $this->input->post('email');
				$data['status'] = $this->input->post('status');
				$data['nivel'] = $this->input->post('nivel');
				//$data['cidade_id_cidade'] = $this->input->post('cidade');		

				$this->db->where('id_usuario', $id);

				return $this->db->update('usuario', $data);
			}

			public function salvar_senha()
			{
				$id = $this->input->post('id_usuario');

				$senha_antiga = md5($this->input->post('senha_antiga'));
				$senha_nova = md5($this->input->post('senha_nova'));

				$this->db->select('senha');
				$this->db->where('id_usuario', $id);
				$data['senha'] = $this->db->get('usuario')->result();
				$dados['senha'] = $senha_nova;

				if ($data['senha'][0]->senha == $senha_antiga) {
					$this->db->where('id_usuario', $id);
					$this->db->update('usuario', $dados);
					return true;
				}
				else {
					return false;
				}
			}

		}