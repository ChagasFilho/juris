<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function verificar_sessao() 
	{
		if ($this->session->userdata('logado') == false) {
			redirect('Login');
		}
	}

	public function index($indice = null)
	{
		$this->verificar_sessao();
		
		$this->load->model('cliente_model', 'cliente');

		$dados['clientes'] = $this->cliente->get_clientes();

		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		
		if ($indice==1) {
			$data['msg'] = "Cliente cadastrado com sucesso!";
			$this->load->view('includes/msg_sucesso', $data);
		}
		else if ($indice==2) {
			$data['msg'] = "Não foi possível cadastrar o cliente!";
			$this->load->view('includes/msg_erro', $data);
		}
		else if ($indice==3) {
			$data['msg'] = "Cliente excluido com sucesso!";
			$this->load->view('includes/msg_sucesso', $data);
		}
		else if ($indice==4) {
			$data['msg'] = "Não foi possível excluir o cliente!";
			$this->load->view('includes/msg_erro', $data);
		}
		else if ($indice==5) {
			$data['msg'] = "Cliente atualizado com sucesso!";
			$this->load->view('includes/msg_sucesso', $data);
		}
		else if ($indice==6) {
			$data['msg'] = "Não foi possível atualizar o cliente!";
			$this->load->view('includes/msg_erro', $data);
		}

		$this->load->view('listar_cliente', $dados);
		$this->load->view('includes/html_footer');
	}

	public function cadastro()
	{
		$this->verificar_sessao();

		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		$this->load->view('cadastro_cliente');
		$this->load->view('includes/html_footer');
	}

	public function cadastrar()
	{
		$this->load->model('cliente_model', 'cliente');

		if ($this->cliente->cadastrar()) {
			redirect('Cliente/1');
		} 
		else {
			redirect('Cliente/2');
		}
	}

	public function excluir($id = null)
	{	
		$this->load->model('cliente_model', 'cliente');

		if ($this->cliente->excluir($id)) {
			redirect('Cliente/3');
		} 
		else {
			redirect('Cliente/4');
		}
	}

	public function salvar_atualizacao()
	{
		$this->load->model('cliente_model', 'cliente');

		if ($this->cliente->salvar_atualizacao()) {
			redirect('Cliente/5');
		} 
		else {
			redirect('Cliente/6');
		}
	}

}
