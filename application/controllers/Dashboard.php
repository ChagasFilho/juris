<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function verificar_sessao() 
	{
		if ($this->session->userdata('logado') == false) {
			redirect('Login');
		}
	}

	public function index()
	{
		$this->verificar_sessao();

		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		$this->load->view('dashboard');
		$this->load->view('includes/html_footer');
	}

	public function logout() 
	{
		$this->session->sess_destroy();
		redirect('Login');
	}

}