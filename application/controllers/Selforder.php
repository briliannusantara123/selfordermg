<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Selforder extends CI_Controller {
public function __construct() {
			parent::__construct();
			if($this->session->userdata('username') == ""){
           		$nomeja = $this->session->userdata('nomeja');
  				redirect('login/logout/'.$nomeja);
        	}
			$this->load->model('Item_model');
			$this->load->model('cekstatus_model');
			$this->load->helper('cookie');
			$session = $this->cekstatus_model->cek();

  		if ($session['status'] == 'Payment') {
  			$nomeja = $this->session->userdata('nomeja');
  			redirect('login/logout/'.$nomeja);
  		}else if($session['status'] == 'Cleaning'){
  			$nomeja = $this->session->userdata('nomeja');
  			redirect('login/logout/'.$nomeja);
  		}
  		if($session['id_table'] != $this->session->userdata('nomeja')){
  			$nomeja = $this->session->userdata('nomeja');
  			redirect('login/log_out/'.$nomeja);
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
		$id_customer = $this->session->userdata('id');
		$cs = $this->session->userdata('id');
		$data['no_meja'] = $nomeja;
		$data['cart_count'] = $this->Item_model->hitungcart($nomeja);
		$data['sub_category'] = "ayam";
		$data['sub_category_minuman'] = "Cold Drink";
		$cart_count = $this->Item_model->cart_count($id_customer,$nomeja)->num_rows();
		if($cart_count > 0){
			$cart = $this->Item_model->cart_count($id_customer,$nomeja)->row();//tambahan	
			$cart_total = $cart->total_qty;
		}else{
			$cart_total = 0;
		}
		$data['total_qty'] = $cart_total;
		// var_dump($test);exit();
		$this->load->view('self_index',$data);
	}
		function cekinternet()
	{
		$this->load->view('cekinternet');
	}
}
