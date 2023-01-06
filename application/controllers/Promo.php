<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promo extends CI_Controller {
function __construct()
		{
			parent::__construct();
			if($this->session->userdata('username') == ""){
            redirect('login/logout');
        }
			$this->load->model('Item_model');
			$ic = $this->session->userdata('id');
			$session = $this->db->order_by('id',"desc")->where('id_customer',$ic)
  			->limit(1)
  			->get('sh_rel_table')
  			->row('status');
  		if ($session == 'Payment') {
  			redirect('login/logout');
  		}
			
		}
	public function index()
	{
		$id_customer = $this->session->userdata('id');
		$data['item'] = $this->Item_model->getDataOrder($id_customer)->result();
		
		$this->load->view('ordersementara',$data);
	}
	public function home($nomeja)
	{
		$this->session->set_flashdata('error','No Promo at the Moment');
		redirect('selforder/home/'.$nomeja);
	}
	
}
