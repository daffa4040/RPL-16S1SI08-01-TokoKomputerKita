00<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_category extends CI_Model {

	public function all(){
		//query semua record di table products
		$hasil = $this->db->get('category');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else {
			return array();
		}
	}
	
	public function find($id){
		//Query mencari record berdasarkan ID-nya
		$hasil = $this->db->where('id', $id)
						  ->limit(1)
						  ->get('category');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}
	
	public function create($data_category){
		//Query INSERT INTO
		$this->db->insert('category', $data_category);
	}

	public function update($id, $data_category){
		//Query UPDATE FROM ... WHERE id=...
		$this->db->where('id', $id)
				 ->update('category', $data_category);
	}
	
	public function delete($id){
		//Query DELETE ... WHERE id=...
		$this->db->where('id', $id)
				 ->delete('category');
	}
	
}