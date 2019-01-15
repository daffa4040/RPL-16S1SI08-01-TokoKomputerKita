<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_customer');
	}

	public function index()
	{
		//nothing on index(yet)
	}


	public function payment_confirmation($invoice_id = 0)
	{
		$this->form_validation->set_rules('invoice_id','Invoice ID','required|integer');
		$this->form_validation->set_rules('amount','Amount Transfered','required|integer');
		
		if($this->form_validation->run() == FALSE)
		{
			if($this->input->post('invoice_id')){
				$data['invoice_id'] = set_value('invoice_id');
			} else {
				$data['invoice_id'] = $invoice_id;
			}
			$this->load->view('customer/form_payment_confirmation', $data);
		} else {
			$isValid = $this->model_customer->mark_invoice_confirmed(set_value('invoice_id'), set_value('amount'));

			if($isValid){
				$this->session->set_flashdata('massage','Thank you.. We will check on your payment confirmation');
				redirect('customer/shopping_history');
			} else {
				$this->session->set_flashdata('error' , 'Wrong amount or Invoice ID, please try again');
				redirect('customer/payment_confirmation/'.set_value('invoice_id'));
			}
		}

	}

	public function shopping_history()
	{
		$user = $this->session->userdata('username');
		$data['history'] = $this->model_customer->get_shopping_history($user);
		$this->load->view('customer/shopping_history_list', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */