<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_customer extends CI_Model {

	public function get_shopping_history($user)
	{
		//get all invoices indentified by $user
		$hasil = $this->db->select('i.*, SUM(o.qty * o.price) AS total')
							->from('invoices i, users u, orders o')
							->where('u.username', $user)
							->where('u.id = i.user_id')
							->where('o.invoice_id = i.id')
							->group_by('o.invoice_id')
							->get();
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else {
			return false; //if there are no matching records
		}
	}

	public function mark_invoice_confirmed ($invoice_id, $amount)
	{
		$invoice = $this->db->where('id', $invoice_id)->limit(1)->get('invoices');
		if($invoice->num_rows() == 0){
			$ret = $ret && false;
		} else {
			$total = $this->db->select('SUM(qty * price) as total')
						->where('invoice_id',$invoice_id)
						->get('orders');
			if($total->row()->total > $amount){
				$ret = $ret && false;
			} else {
				$this->db->where('id',$invoice_id)->update('invoices',array('status'=>'confirmed'));
			}
		}
		return $ret;
	}

}