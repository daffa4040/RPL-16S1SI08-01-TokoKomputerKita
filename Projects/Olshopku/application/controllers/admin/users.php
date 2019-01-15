<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct(){
		parent::__construct();

		if($this->session->userdata('groups') != '1'){
			$this->session->set_flashdata('error','Sorry, you are not logged in!');
			redirect('login');
		}

		$this->load->model('model_users');
	}

	public function index()
	{
		$data['users'] = $this->model_users->all();
		$this->load->view('back/Users/Users_list', $data);
	}

	public function create(){
		$data['users'] = $this->model_users->all();
		//form validation sebelum mengeksekusi QUERY INSERT
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('groups', 'Usertype', 'required|integer');
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('back/Users/Users_add');
		}  else {
				
				//file berhasil diupload -> lanjutkan ke query INSERT
				// eksekusi query INSERT
				$data_users =	array(
				'username'			=> set_value('username'),
				'password'			=> set_value('password'),
				'groups'			=> set_value('groups'),
				);
				$this->model_users->create($data_users);
				redirect('admin/users');
			}
		}

		public function update($id){
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('groups', 'Usertype', 'required|integer');

			if ($this->form_validation->run() == FALSE)
			{
				$data['user'] = $this->model_users->find($id);
				$this->load->view('back/Users/Users_edit', $data);
			} else {
						$data_users =	array(
						'username'			=> set_value('username'),
						'password'			=> set_value('password'),
						'groups'			=> set_value('groups'),
						);
						$this->model_users->update($id, $data_users);
						redirect('admin/users');
					}
				} 

	public function delete($id){
		$this->model_users->delete($id);
		redirect('admin/users');
	}
}
