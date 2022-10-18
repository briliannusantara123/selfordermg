<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Selforder extends CI_Controller {
public function __construct() {
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
		$cs = $this->session->userdata('id');
		$data['no_meja'] = $this->Item_model->nomeja($cs);
		$this->load->view('self_index',$data);
	}
	public function home($nomeja)
	{
		$cs = $this->session->userdata('id');
		$data['no_meja'] = $nomeja;
		$data['cart_count'] = $this->Item_model->hitungcart($nomeja);
		$data['sub_category'] = "ayam";
		$data['sub_category_minuman'] = "Cold Drink";
		// var_dump($test);exit();
		$this->load->view('self_index',$data);
	}
}
