<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

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
			redirect('Dashboard/login');
		}
	}

	public function index($indice = null)
	{
		$this->verificar_sessao();
		
		$this->load->model('usuario_model', 'usuario');

		$dados['usuarios'] = $this->usuario->get_usuarios();

		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		
		if ($indice==1) {
			$data['msg'] = "Usuário cadastrado com sucesso!";
			$this->load->view('includes/msg_sucesso', $data);
		}
		else if ($indice==2) {
			$data['msg'] = "Não foi possível cadastrar o usuário!";
			$this->load->view('includes/msg_erro', $data);
		}
		else if ($indice==3) {
			$data['msg'] = "Usuário excluido com sucesso!";
			$this->load->view('includes/msg_sucesso', $data);
		}
		else if ($indice==4) {
			$data['msg'] = "Não foi possível excluir o usuário!";
			$this->load->view('includes/msg_erro', $data);
		}
		else if ($indice==5) {
			$data['msg'] = "Usuário atualizado com sucesso!";
			$this->load->view('includes/msg_sucesso', $data);
		}
		else if ($indice==6) {
			$data['msg'] = "Não foi possível atualizar o usuário!";
			$this->load->view('includes/msg_erro', $data);
		}

		$this->load->view('listar_usuario', $dados);
		$this->load->view('includes/html_footer');
	}

	public function cadastro()
	{
		$this->verificar_sessao();

		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		$this->load->view('cadastro_usuario');
		$this->load->view('includes/html_footer');
	}

	public function cadastrar()
	{
		$this->load->model('usuario_model', 'usuario');

		if ($this->usuario->cadastrar()) {
			redirect('Usuario/1');
		} 
		else {
			redirect('Usuario/2');
		}
	}

	public function excluir($id = null)
	{	
		$this->load->model('usuario_model', 'usuario');

		if ($this->usuario->excluir($id)) {
			redirect('Usuario/3');
		} 
		else {
			redirect('Usuario/4');
		}
	}

	public function atualizar($id = null, $indice = null)
	{
		$this->verificar_sessao();

		//$data['cidades'] = $this->db->get('cidade')->result();

		$this->db->where('id_usuario', $id);
		$data['usuario'] = $this->db->get('usuario')->result();
		
		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');

		if ($indice==1) {
			$data['msg'] = "Senha atualizada com sucesso!";
			$this->load->view('includes/msg_sucesso', $data);
		}
		else if ($indice==2) {
			$data['msg'] = "Não foi possível atualizar a senha do usuário!";
			$this->load->view('includes/msg_erro', $data);
		}

		$this->load->view('editar_usuario', $data);
		$this->load->view('includes/html_footer');
	}

	public function salvar_atualizacao()
	{
		$this->load->model('usuario_model', 'usuario');

		if ($this->usuario->salvar_atualizacao()) {
			redirect('Usuario/5');
		} 
		else {
			redirect('Usuario/6');
		}
	}

	public function salvar_senha()
	{
		$this->load->model('usuario_model', 'usuario');

		$id = $this->input->post('id_usuario');

		if ($this->usuario->salvar_senha()) {
			redirect('Usuario/atualizar/'.$id.'/1');
		}
		else {
			redirect('Usuario/atualizar/'.$id.'/2');
		}
	}

}
