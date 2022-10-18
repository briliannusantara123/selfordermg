<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
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
		$id_customer = $this->session->userdata('id');
		// $data['total'] = $this->Item_model->totalSubOrder($uc);
		$data['item'] = $this->Item_model->cart($id_customer)->result();
		$data['nomeja'] = $nomeja;
		
		$this->load->view('cart',$data);
	}
	public function create($nomeja)
	{
		$uc = $this->session->userdata('username');
		$ic = $this->session->userdata('id');
		$qty = $this->input->post('qty');
		$ata = $this->input->post('cek');
		$qta = $this->input->post('qta');
		$nama = $this->input->post('nama');
		$pesan = $this->input->post('pesan');
		$harga = $this->input->post('harga');
		$item_code = $this->input->post('no');
		
		$nomer = 1;
		for ($i = 0; $i < count($qty); $i++) {
			if ($qty[$i] != 0) {
				$n = $nomer++ . "<br>"; 
				$data[] = [
				'qty' => $qty[$i],
				'harga' => $harga[$i],
				'nama' => $nama[$i],
				'pesan' => $pesan[$i],
				'entry_by' => $uc,
				'id_customer' => $ic,
				'item_code' => $item_code[$i],
				'as_take_away' => $ata[$i],
				'qty_take_away' => $qta[$i],
			];
			}
    
	}
	$result = $this->db->insert_batch('sh_t_sub_transactions',$data);
			if ($result) {
				redirect('ordermakanan/subcreate/'.$nomeja);
				// $where = array('qty' => 0);
				// $this->Item_model->hapus_qty($where,'testing');
			}else{
				echo "gagal order";
			}

		
	}
	public function batal($nomeja)
	{
		$ic = $this->session->userdata('id');
		$this->db->where('id_customer',$ic);
    	$this->db->delete('sh_t_sub_transactions');
    	redirect('cart/home/'.$nomeja);
	}
	public function order($table)
	{
		$qty = $this->input->post('qty');
		$ata = $this->input->post('cek');
		$qta = $this->input->post('qta');
		$nama = $this->input->post('nama');
		$pesan = $this->input->post('pesan');
		$harga = $this->input->post('harga');
		$item_code = $this->input->post('no');
		$id_customer = $this->session->userdata('id');
		$id_trans = $this->db->get_Where('sh_t_transactions', array('id_customer'=> $id_customer))->row();
		$id_table = $this->db->get_Where('sh_rel_table', array('id_customer'=> $id_customer))->row();
		$st = $id_table->status;
		if ($st == "Dining" || $st == "Order") {
			$order_stat = 1;
		}elseif ($st == "Billing") {
			$order_stat = 2;
		}
		$today = date('Y-m-d');
		$curTime = explode(':', date('H:i:s'));
		$cekWeekEnd = date('D', strtotime($today));
		$check_promo = $this->Item_model->get_promo($today)->num_rows();
		$get_promo = $this->Item_model->get_promo($today)->row_array();
		$discount = 0;
		if($check_promo > 0){
			$item_check = $this->Item_model->get_info_item($request['item_code'],$get_promo)->num_rows();
			if($item_check > 0){
				$item_data = $this->Item_model->get_info_item($request['item_code'],$get_promo)->row_array();
				if($get_promo["promo_type"] == 'Discount'){
					if($get_promo["promo_criteria"] == 'Weekday'){ //Weekday
						if($cekWeekEnd !== "Sat" || $cekWeekEnd !== "Sun" || $cekWeekEnd !== "Sab" || $cekWeekEnd !== "Min"){
							if($curTime[0] >= $get_promo["promo_from"] && $curTime[0] <= $get_promo["promo_to"]){
								$discount = $get_promo["promo_value"];		
							}else{
								$discount = 0;
							}
						}else{
							$discount = 0;
						}	
					}else if($get_promo["promo_criteria"] == 'Weekend'){ //Weekend
						if($cekWeekEnd === "Sat" || $cekWeekEnd === "Sun" || $cekWeekEnd === "Sab" || $cekWeekEnd === "Min"){
							if($curTime[0] >= $get_promo["promo_from"] && $curTime[0] <= $get_promo["promo_to"]){
								$discount = $get_promo["promo_value"];		
							}else{
								$discount = 0;
							}
						}else{
							$discount = 0;
						}	
					}else{ //Full Week
						if($curTime[0] >= $get_promo["promo_from"] && $curTime[0] <= $get_promo["promo_to"]){
							$discount = $get_promo["promo_value"];		
						}else{
							$discount = 0;
						}
					}
				}else{
					$discount = 0;	
				}
			}else{
				$discount = 0;
			}
		}
		$cabang = $this->db->order_by('id',"desc")
  			->limit(1)
  			->get('sh_m_cabang')
  			->row('id');
		$nomer = 1;
		for ($i = 0; $i < count($qty); $i++) {
			if ($qty[$i] != 0) {
				$n = $nomer++ . "<br>"; 
				$data[] = [
				'id_trans' => $id_trans->id,
				'item_code' => $item_code[$i],
				'qty' => $qty[$i],
				'cabang' => $cabang,
				'unit_price' => $harga[$i],
				'description' => $nama[$i],
				'start_time_order' => date('H:i:s'),
				'entry_by' => $this->session->userdata('username'),
				'disc' => $discount,
				'is_cancel' => 0,
				'session_item' => 0,
				'selected_table_no' => $table,
				'seat_id' => 0,
				'sort_id' => $n,
				'as_take_away' => 0,
				'qty_take_away' => 0,
				'extra_notes' => $pesan[$i],
				'checker_printed' => 1,
				'created_date' => date('Y-m-d'),
				'order_type' => $order_stat,
				'as_take_away' => $ata[$i],
				'qty_take_away' => $qta[$i],
			];
			 }
    
	}
	// var_dump($data);exit();
	$result = $this->db->insert_batch('sh_t_transaction_details',$data);
			if ($result) {
				$ic = $this->session->userdata('id');
				 $data = ['status' => 'Dining'];
				$this->db->where('id_customer',$ic);
    			$this->db->update('sh_rel_table',$data);
    			$this->db->where('id_customer',$ic);
    			$this->db->delete('sh_t_sub_transactions');
    			$this->db->where('id_customer',$ic);
    			$this->db->delete('sh_cart');

    			$this->db->query("update sh_t_transactions set date_order_menu='".date('Y-m-d H:i:s')."',is_order_menu_active=1,start_time_order='".date('H:i:s')."',checker_printed = 1 where id = '".$id_trans->id."' and id_customer = '".$ic."'");
    			$this->session->set_flashdata('success','Order Menu/Paket Berhasil Di Tambahkan');
				redirect('selforder/home/'.$table);
				// $where = array('qty' => 0);
				// $this->Item_model->hapus_qty($where,'testing');
			}else{
				echo "gagal order";
			}
	}
	public function delete($id,$nama,$nomeja)
	{
		// echo $id;exit();
		$nm = str_replace("%20"," ", $nama);
		$this->db->where('id',$id);
    	$this->db->delete('sh_cart');
    	$this->session->set_flashdata('success',$nm.' Berhasil Dihapus dari Cart');
		redirect('cart/home/'.$nomeja);
	}
	public function ubah($id,$nama,$nomeja)
	{
		// echo $id;exit();
		$qty = $this->input->post('qty');
		$extra_notes = $this->input->post('extra_notes');
		$nm = str_replace("%20"," ", $nama);
		$data = [
			'qty' => $qty,
			'extra_notes' => $extra_notes,
		];
		$this->db->where('id',$id);
    	$this->db->update('sh_cart',$data);
    	$this->session->set_flashdata('success',$nm.' Berhasil Di Ubah');
		redirect('cart/home/'.$nomeja);
	}
}
