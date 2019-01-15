 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
 class Register extends CI_Controller {
     
     public function index() {
 		
 		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('front/login');
		} else {
			$this->load->model('model_users');
			$valid_user = $this->model_users->check_credential();
		}

        if($this->form_validation->run() == FALSE) 
        {
             $this->load->view('front/login');
        } else { 
             $data_users['username'] =    $this->input->post('username');
             $data_users['password'] =    /*md5(*/$this->input->post('password')/*)*/;
             $data_users['groups'] = 2;
 
             $this->model_users->create($data_users);
             
             $pesan['message'] =    "Pendaftaran berhasil";
             
             $this->load->view('front/auth/login',$pesan);
         }
     }
 }