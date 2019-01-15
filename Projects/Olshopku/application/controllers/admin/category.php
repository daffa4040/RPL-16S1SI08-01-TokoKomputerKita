<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('model_category');
	}

	public function index()
	{
		$data['category'] = $this->model_category->all();
		$this->load->view('back/Category/Category_list', $data);
	}

	public function create(){
		$data['category'] = $this->model_category->all();
		//form validation sebelum mengeksekusi QUERY INSERT
		$this->form_validation->set_rules('judul_category', 'Judul Kategori', 'required');
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('back/Category/Category_add');
	
			} else {
				
				//file berhasil diupload -> lanjutkan ke query INSERT
				// eksekusi query INSERT
				$data_category =	array(
				'judul_category'			=> set_value('judul_category')
			)
				$this->model_category->create($data_category);
				redirect('admin/category');
			}
		}

	public function update($id){
		$this->form_validation->set_rules('judul_category', 'Judul Kategori', 'required');

			if ($this->form_validation->run() == FALSE)
			{
				$data['category'] = $this->model_category->find($id);
				$this->load->view('back/Category/Category_edit', $data);
			}  else {
					$data_category =	array(
					'judul_category'			=> set_value('judul_category')
			)
						);
						$this->model_category->update($id, $data_category);
						redirect('admin/category');
					}
				} 
					$this->model_category->update($id, $data_category);
					redirect('admin/category');
				}
			}
		}

	public function delete($id){
		$this->model_category->delete($id);
		redirect('admin/category');
	}
}
