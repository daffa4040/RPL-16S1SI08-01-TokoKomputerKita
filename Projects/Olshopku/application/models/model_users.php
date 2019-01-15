<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_users extends CI_Model {

	public function check_credential()
	{
		$username = set_value('username');
		$password = set_value('password');
		
		$hasil = $this->db->where('username', $username)
						  ->where('password', $password)
						  ->limit(1)
						  ->get('users');
		
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}
	
	public function all(){
		//query semua record di table users
		$hasil = $this->db->get('users');
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
						  ->get('users');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}
	
	public function create($data_users){
		//Query INSERT INTO
		$this->db->insert('users', $data_users);
	}

	public function update($id, $data_users){
		//Query UPDATE FROM ... WHERE id=...
		$this->db->where('id', $id)
				 ->update('users', $data_users);
	}
	
	public function delete($id){
		//Query DELETE ... WHERE id=...
		$this->db->where('id', $id)
				 ->delete('users');
	}

}