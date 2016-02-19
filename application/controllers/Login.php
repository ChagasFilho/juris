<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/html_header');
		$this->load->view('login');
		$this->load->view('includes/html_footer');
	}

	public function logar() 
	{		
		$email = $this->input->post('email');
		/* $senha = md5($this->input->post('senha')); */
		$senha = $this->input->post('senha');

		$this->db->where('email', $email);
		$this->db->where('senha', $senha);
		$this->db->where('status', 1);

		$data['usuario'] = $this->db->get('usuario')->result();

		if (count($data['usuario'])==1) 
		{
			$dados['nome'] = $data['usuario'][0]->nome;
			$dados['id'] = $data['usuario'][0]->id_usuario;
			$dados['logado'] = true;

			$this->session->set_userdata($dados);
			
			redirect('Dashboard', 'refresh');
		}
		else 
		{
			redirect('Login', 'refresh');
		}
	}

}