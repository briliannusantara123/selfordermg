<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Billsementara extends CI_Controller {

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
		$data['item'] = $this->Item_model->billsementara($id_customer)->result();
		$data['total'] = $this->Item_model->total($id_customer);
		$this->load->view('billsementara',$data);
	}
	public function home($nomeja)
	{
		$id_customer = $this->session->userdata('id');
		$data['sub_category'] = "ayam";
		$data['sub_category_minuman'] = "Cold Drink";
		$cabang = $this->db->order_by('id',"desc")
  			->limit(1)
  			->get('sh_m_cabang')
  			->row('id');
  		$notrans = $this->db->order_by('id',"desc")->where('id_customer',$id_customer)
  			->limit(1)
  			->get('sh_t_transactions')
  			->row('id');
  		// echo $cabang; echo "<br>";echo $notrans;exit();
		$uc = $this->session->userdata('username');
		$data['item'] = $this->Item_model->billsementara($id_customer)->result();
		$data['total'] = $this->Item_model->total($uc);
		$data['nomeja'] = $nomeja;
		$data['notrans'] = $notrans;
		$data['order_bill'] = $this->Item_model->order_bill($cabang,$notrans);
		$data['order_bill_line'] = $this->Item_model->order_bill_line($cabang,$notrans);
		$this->load->view('billsementara',$data);
	}
}
