<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
function __construct()
		{
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
	public function testing()
	{
		$this->load->library('user_agent');

		if ($this->agent->is_mobile()) {
		    $device = $this->agent->mobile();
		   
		} else {
		    $device = "DEKSTOP";
		}
		$browser = $this->agent->browser();
		$version = $this->agent->version();
		$platform = $this->agent->platform();
		$robot = $this->agent->robot();
		$ip_address = $this->input->ip_address();
		echo "IP address pengguna adalah: " . $ip_address . "<br>";
		echo "Browser yang digunakan: " . $browser . "<br>";
		echo "Versi browser yang digunakan: " . $version . "<br>";
		echo "Platform yang digunakan: " . $platform . "<br>";
		echo "Device yang digunakan: " . $device . "<br>";
		echo "Apakah user agent adalah robot: " . ($robot ? 'Ya' : 'Tidak') . "<br>";
	}
	public function index()
	{
		$id_customer = $this->session->userdata('id');
		$data['item'] = $this->Item_model->getDataOrder($id_customer)->result();
		
		$this->load->view('ordersementara',$data);
	}
	public function home($nomeja,$cek=NULL,$sub=NULL,$no=NULL)
	{
		$id_customer = $this->session->userdata('id');
		// $data['total'] = $this->Item_model->totalSubOrder($uc);
		$data['item'] = $this->Item_model->cart($id_customer)->result();
		$data['nomeja'] = $nomeja;
		
		if ($cek == 'Makanan') {
			$log = 'ordermakanan/menu/Makanan/'.$sub.'#'.preg_replace('/%20/', '_', $sub);;
		}elseif ($cek == 'Minuman') {
			$log = 'orderminuman/menu/Minuman/'.$sub.'#'.preg_replace('/%20/', '_', $sub);
		}else{
			$log = 'selforder/home/'.$nomeja;
		}

		$data['log'] = $log;
		$data['cek'] = $cek;
		$data['sub'] = $sub;
		$data['no'] = $no;
		$this->load->view('cart',$data);
	}
	public function create($nomeja,$cek,$sub)
	{
		$ic = $this->session->userdata('id');
		$qty = $this->input->post('qty');
		$ata = $this->input->post('cek');
		$qta = $this->input->post('qta');
		$nama = $this->input->post('nama');
		$pesan = $this->input->post('pesan');
		$harga = $this->input->post('harga');
		$item_code = $this->input->post('no');
		$table = $this->session->userdata('nomeja');
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
		// if($check_promo > 0){
		// 	$item_check = $this->Item_model->get_info_item($request['item_code'],$get_promo)->num_rows();
		// 	if($item_check > 0){
		// 		$item_data = $this->Item_model->get_info_item($request['item_code'],$get_promo)->row_array();
		// 		if($get_promo["promo_type"] == 'Discount'){
		// 			if($get_promo["promo_criteria"] == 'Weekday'){ //Weekday
		// 				if($cekWeekEnd !== "Sat" || $cekWeekEnd !== "Sun" || $cekWeekEnd !== "Sab" || $cekWeekEnd !== "Min"){
		// 					if($curTime[0] >= $get_promo["promo_from"] && $curTime[0] <= $get_promo["promo_to"]){
		// 						$discount = $get_promo["promo_value"];		
		// 					}else{
		// 						$discount = 0;
		// 					}
		// 				}else{
		// 					$discount = 0;
		// 				}	
		// 			}else if($get_promo["promo_criteria"] == 'Weekend'){ //Weekend
		// 				if($cekWeekEnd === "Sat" || $cekWeekEnd === "Sun" || $cekWeekEnd === "Sab" || $cekWeekEnd === "Min"){
		// 					if($curTime[0] >= $get_promo["promo_from"] && $curTime[0] <= $get_promo["promo_to"]){
		// 						$discount = $get_promo["promo_value"];		
		// 					}else{
		// 						$discount = 0;
		// 					}
		// 				}else{
		// 					$discount = 0;
		// 				}	
		// 			}else{ //Full Week
		// 				if($curTime[0] >= $get_promo["promo_from"] && $curTime[0] <= $get_promo["promo_to"]){
		// 					$discount = $get_promo["promo_value"];		
		// 				}else{
		// 					$discount = 0;
		// 				}
		// 			}
		// 		}else{
		// 			$discount = 0;	
		// 		}
		// 	}else{
		// 		$discount = 0;
		// 	}
		// }
		$cabang = $this->db->order_by('id',"desc")
  			->limit(1)
  			->get('sh_m_cabang')
  			->row('outlet_id');
		$nomer = 1;
		for ($i = 0; $i < count($qty); $i++) {
			if ($qty[$i] != 0) {
				$n = $nomer++ . "<br>"; 
				$data[] = [
				'id_trans' => $id_trans->id,
				'id_customer' => $ic,
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
			];
			 }
    
	}
	// var_dump($data);exit();
	$result = $this->db->insert_batch('sh_t_sub_transactions',$data);
			if ($result) {
				
    			$this->session->set_flashdata('success','Order Menu/Paket Berhasil Di Tambahkan');
				redirect('ordermakanan/subcreate/'.$nomeja.'/'.$cek.'/'.$sub);
				// $where = array('qty' => 0);
				// $this->Item_model->hapus_qty($where,'testing');
			}else{
				echo "gagal order";
			}

		
	}
	public function batal($nomeja,$cek,$sub)
	{
		$ic = $this->session->userdata('id');
		$this->db->where('id_customer',$ic);
    	$this->db->delete('sh_t_sub_transactions');
    	redirect('cart/home/'.$nomeja.'/'.$cek.'/'.$sub);
	}
	public function validasi_order($table,$cek=NULL,$sub=NULL)
	{
		$table = $this->session->userdata('nomeja');
		$qty = $this->input->post('qty');
		$ata = $this->input->post('cek');
		$qta = $this->input->post('qta');
		$nama = $this->input->post('nama');
		$pesan = $this->input->post('pesan');
		$harga = $this->input->post('harga');
		$item_code = $this->input->post('no');
		$need_stock = $this->input->post('need_stock');
		$id_customer = $this->session->userdata('id');
		$id_trans = $this->db->get_Where('sh_t_transactions', array('id_customer'=> $id_customer))->row();
		$id_table = $this->db->get_Where('sh_rel_table', array('id_customer'=> $id_customer))->row();
		$st = $id_table->status;

		

			$array_with_quotes = array_map(function($val) { return "'" . $val . "'"; }, $qty);
			$q = implode('', $qty);
			$itemc = implode(',', $item_code);
			
			 $cekdata = $this->Item_model->getDataC($item_code);
			for ($i=0;$i<count($cekdata);$i++) {
			  if ($cekdata[$i]->need_stock == 1) {
			  		if ($q[$i] > $cekdata[$i]->stock) {
						$status = "kurang";
					 }else{
					 	$status = "cukup";
					 } 

					 if ($status == "kurang") {
					 	$data = ['qty' => $cekdata[$i]->stock];
						$this->db->where('id_customer',$id_customer);
						$this->db->where('item_code',$cekdata[$i]->item_code);
	    				$this->db->update('sh_cart',$data);
					 	$this->session->set_flashdata('error', $cekdata[$i]->description.' menu stock is not fulfilled');
						 redirect('cart/home/'.$this->session->userdata('nomeja'));
					 	echo $cekdata[$i]->description." KURANG";
					 }else{
					 	$this->order($table,$cek,$sub);
					 }
			  	}else{
			  		$this->order($table,$cek,$sub);
			  	}	
				
				 echo "<br>";

				
			}
			// foreach($cekdata as $cd){
			// 	$test = $cd->no;
				
			// 	if ($q > $cd->stock) {
			// 		$data = ['qty' => $cd->stock];
			// 		$this->db->where('id_customer',$id_customer);
			// 		$this->db->where('item_code',$cd->no);
   //  				$this->db->update('sh_cart',$data);
   //  				$this->session->set_flashdata('error', $cd->description.' menu stock is not fulfilled');
			// 		 redirect('cart/home/'.$this->session->userdata('nomeja'));
			// 	}else{
			// 		echo "STOCK MENCUKUPI";
			// 		// $this->order($table);
			// 	}


			// 	// echo $cd->description;
				
			// }
	}
	public function order($table,$cek=NULL,$sub=NULL)
	{
		$table = $this->session->userdata('nomeja');
		$qty = $this->input->post('qty');
		$ata = $this->input->post('cek');
		$qta = $this->input->post('qta');
		$nama = $this->input->post('nama');
		$pesan = $this->input->post('pesan');
		$harga = $this->input->post('harga');
		$item_code = $this->input->post('no');
		$need_stock = $this->input->post('need_stock');
		$id_customer = $this->session->userdata('id');
		$id_trans = $this->db->get_Where('sh_t_transactions', array('id_customer'=> $id_customer))->row();
		$id_table = $this->db->get_Where('sh_rel_table', array('id_customer'=> $id_customer))->row();
		$st = $id_table->status;

			$date = date('Y-m-d');
			$ctime = date('H:i:s');
			$this->db->from('sh_set_time_cekdata');
			$this->db->order_by('id', 'DESC'); // urutkan berdasarkan id secara descending
			$this->db->limit(1); // ambil hanya satu baris terakhir
			$query = $this->db->get();
			$no = $query->row('seconds');
			$seconds = " +".$no." seconds";
			// echo $seconds;exit(); 
			
			// echo $time;exit();
			$this->db->select('*');
			$where = "left(t.created_date,10) ='".$date."' and t.selected_table_no = '".$table."' and t.selforder = 1 and user_order_id = '".$this->session->userdata('user_order_id')."'";
			$this->db->where($where);
			$this->db->where_in('t.item_code',$item_code);
			$this->db->where_in('t.qty',$qty);
			$this->db->order_by('t.id','DESC');    
			$query = $this->db->get('sh_t_transaction_details t');  //cek dulu apakah ada sudah ada kode di tabel.   
			
			for ($i = 0; $i < count($qty); $i++) {
				$this->db->from('sh_t_transaction_details');
			$where = "left(created_date,10) ='".$date."' and selected_table_no = '".$table."' and selforder = 1 and user_order_id = '".$this->session->userdata('user_order_id')."'";
			$this->db->where($where);
			$this->db->where_in('item_code',$item_code[$i]);
			// $this->db->where_in('qty',$qty);
			$this->db->order_by('id','DESC'); 
			 $this->db->limit(1); // ambil hanya satu baris terakhir
			$query = $this->db->get();
			$q = $query->row();
			}


			

			if ($q) {
				$time = date('H:i:s', strtotime($q->start_time_order . $seconds));
				for ($i = 0; $i < count($qty); $i++) {
				if (date('H:i:s') <= $q->timeout_order_so || $q->item_code == $item_code[$i]) {
					$ic = $this->session->userdata('id');
					$where = "left(entry_date,10) ='".$date."' and id_customer = '".$ic."' and id_trans  = '".$id_trans->id."' and user_order_id = '".$this->session->userdata('user_order_id')."'";
					$this->db->where($where);
					$this->db->where_in('item_code',$item_code);
	    			$this->db->delete('sh_cart');
	    			$cabang = $this->db->order_by('id',"desc")
		  			->limit(1)
		  			->get('sh_m_cabang')
		  			->row('outlet_id');
		  			$ip_address = $this->input->ip_address();

	    			$nomer = 1;
					
						if ($qty[$i] != 0) {
							$n = $nomer++ . "<br>"; 
							$data[] = [
							'event_type' => 'Duplicate Order',
							'cabang' => $cabang,
							'id_trans' => $id_trans->id,
							'id_customer' => $this->session->userdata('id'),
							'event_date' => date('Y-m-d H:i:s'),
							'user_by' => $this->session->userdata('username'),
							'description' => $item_code[$i].' '.$nama[$i].' Qty :'.$qty[$i].' IP :'.$ip_address,
							'created_date' => date('Y-m-d'),
						];
						 }
					
					$result = $this->db->insert_batch('sh_event_log',$data);

					$this->session->set_flashdata('error','Duplicate Order, Please Check Bill Preview');
					redirect('selforder/home/'.$table);
				}else{
					$this->order_post($table,$cek,$sub);
				}
			}
			}else{
				$time = date('H:i:s', strtotime($ctime . $seconds));
				$this->order_post($table,$cek,$sub);
			}
	}
	public function order_post($table,$cek=NULL,$sub=NULL)
	{
		$table = $this->session->userdata('nomeja');
		$qty = $this->input->post('qty');
		$ata = $this->input->post('cek');
		$qta = $this->input->post('qta');
		$nama = $this->input->post('nama');
		$pesan = $this->input->post('pesan');
		$harga = $this->input->post('harga');
		$item_code = $this->input->post('no');
		$need_stock = $this->input->post('need_stock');
		$id_customer = $this->session->userdata('id');
		$id_trans = $this->db->get_Where('sh_t_transactions', array('id_customer'=> $id_customer))->row();
		$id_table = $this->db->get_Where('sh_rel_table', array('id_customer'=> $id_customer))->row();
		$st = $id_table->status;

			$date = date('Y-m-d');
			$ctime = date('H:i:s');
			$this->db->from('sh_set_time_cekdata');
			$this->db->order_by('id', 'DESC'); // urutkan berdasarkan id secara descending
			$this->db->limit(1); // ambil hanya satu baris terakhir
			$query = $this->db->get();
			$no = $query->row('seconds');
			$seconds = " +".$no." seconds";
			
			$this->db->from('sh_t_transaction_details');
			$where = "left(created_date,10) ='".$date."' and selected_table_no = '".$table."' and selforder = 1 and user_order_id = '".$this->session->userdata('user_order_id')."'";
			$this->db->where($where);
			$this->db->where_in('item_code',$item_code);
			$this->db->where_in('qty',$qty);
			$this->db->order_by('id','DESC'); 
			$this->db->limit(1); // ambil hanya satu baris terakhir
			$query = $this->db->get();
			$q = $query->row();
			

			if ($q) {
				$time = date('H:i:s', strtotime($ctime . $seconds));
			}else{
				$time = date('H:i:s', strtotime($ctime . $seconds));
			}

							  		

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
		// if($check_promo > 0){
		// 	$item_check = $this->Item_model->get_info_item($request['item_code'],$get_promo)->num_rows();
		// 	if($item_check > 0){
		// 		$item_data = $this->Item_model->get_info_item($request['item_code'],$get_promo)->row_array();
		// 		if($get_promo["promo_type"] == 'Discount'){
		// 			if($get_promo["promo_criteria"] == 'Weekday'){ //Weekday
		// 				if($cekWeekEnd !== "Sat" || $cekWeekEnd !== "Sun" || $cekWeekEnd !== "Sab" || $cekWeekEnd !== "Min"){
		// 					if($curTime[0] >= $get_promo["promo_from"] && $curTime[0] <= $get_promo["promo_to"]){
		// 						$discount = $get_promo["promo_value"];		
		// 					}else{
		// 						$discount = 0;
		// 					}
		// 				}else{
		// 					$discount = 0;
		// 				}	
		// 			}else if($get_promo["promo_criteria"] == 'Weekend'){ //Weekend
		// 				if($cekWeekEnd === "Sat" || $cekWeekEnd === "Sun" || $cekWeekEnd === "Sab" || $cekWeekEnd === "Min"){
		// 					if($curTime[0] >= $get_promo["promo_from"] && $curTime[0] <= $get_promo["promo_to"]){
		// 						$discount = $get_promo["promo_value"];		
		// 					}else{
		// 						$discount = 0;
		// 					}
		// 				}else{
		// 					$discount = 0;
		// 				}	
		// 			}else{ //Full Week
		// 				if($curTime[0] >= $get_promo["promo_from"] && $curTime[0] <= $get_promo["promo_to"]){
		// 					$discount = $get_promo["promo_value"];		
		// 				}else{
		// 					$discount = 0;
		// 				}
		// 			}
		// 		}else{
		// 			$discount = 0;	
		// 		}
		// 	}else{
		// 		$discount = 0;
		// 	}
		// }
		$cabang = $this->db->order_by('id',"desc")
  			->limit(1)
  			->get('sh_m_cabang')
  			->row('outlet_id');
  		$t = $this->Item_model->cekdatatrans($id_customer)->row();

  		if ($t) {
  		 $td = $this->Item_model->cekdatatransdetail($t->id)->row();
  		  $cd = $td->cekdata + 1;
  		}else{
  		  $cd = 1;
  		}
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
				'created_date' => date('Y-m-d H:i:s'),
				'order_type' => $order_stat,
				'selforder' => 1,
				'is_printed_so' => 0,
				'cekdata' => $cd,
				'user_order_id' => $this->session->userdata('user_order_id'),
				'timeout_order_so' => $time,
			];
			 }
			 // $cekdata = $this->Item_model->getDataC($item_code);
			 $cekdata[$i] = $this->db->where_in('no',$item_code[$i])
		  			->order_by('id',"desc")
		  			->get('sh_m_item')
		  			->row();
    		var_dump($item_code[$i]);
    				$datacart = array();
			 if ($cekdata[$i]->need_stock == 1) {
					 	$total[$i] = $cekdata[$i]->stock - $qty[$i];
						echo $cekdata[$i]->stock - $qty[$i];
						if ($total[$i] == 0) {
							$datacart[] = [
		    					'no' => $item_code[$i],
		    					'stock' => $total[$i],
		    					'is_sold_out' => 1,
		    					'stock_update_date' => date('Y-m-d H:i:s'),
		    					'stock_update_by' => $this->session->userdata('username'),
		    				];
						}else{
							$datacart[] = [
		    					'no' => $item_code[$i],
		    					'stock' => $total[$i],
		    					'stock_update_date' => date('Y-m-d H:i:s'),
		    					'stock_update_by' => $this->session->userdata('username'),
		    				];
						}
						$this->db->update_batch('sh_m_item',$datacart,'no');
					 }

			 $stok[$i] = $this->db->where('no',$item_code[$i])
		  			->order_by('id',"desc")
		  			->get('sh_m_item')
		  			->row('stock');
		  		 	if ($need_stock[$i] != 0) {
						$n = $nomer++ . "<br>"; 
						$datastok[] = [
						'log_type' => 'Update Stock',
						'cabang' => $cabang,
						'item_code' => $item_code[$i],
						'stock_before' =>$stok[$i]+$qty[$i],
						'stock_after' =>$stok[$i]+$qty[$i]-$qty[$i], 
						'difference' =>$qty[$i],
						'stock_entry' => date('Y-m-d H:i:s'),
						'username' => $this->session->userdata('username'),
						'description' => 'Stock Used '.$qty[$i],
					];
					 }else{
					 	$n = $nomer++ . "<br>"; 
						$datastok[] = [
						'log_type' => 'Update Stock',
						'cabang' => $cabang,
						'item_code' => $item_code[$i],
						'stock_before' =>$stok[$i],
						'stock_after' =>$stok[$i], 
						'difference' =>$stok[$i],
						'stock_entry' => date('Y-m-d H:i:s'),
						'username' => $this->session->userdata('username'),
						'description' => 'Stock Used '.$qty[$i],
					];
					 }
		if ($qty[$i] == 0) {
			$status = 'gagal';
		}else{
			$status= 'berhasil';
		}
    
	}

	// var_dump($cekdata);exit();
		if ($status == "berhasil") {
			
			$rslt = $this->db->insert_batch('sh_stok_logs',$datastok);
			$result = $this->db->insert_batch('sh_t_transaction_details',$data);
			if ($result) {
				$ic = $this->session->userdata('id');
				 $data = ['status' => 'Dining'];
				$this->db->where('id_customer',$ic);
    			$this->db->update('sh_rel_table',$data);
    			$ic = $this->session->userdata('id');
				$where = "left(entry_date,10) ='".$date."' and id_customer = '".$ic."' and id_trans  = '".$id_trans->id."' and user_order_id = '".$this->session->userdata('user_order_id')."'";
				$this->db->where($where);
				$this->db->where_in('item_code',$item_code);
	    		$this->db->delete('sh_cart');
	    		$cabang = $this->db->order_by('id',"desc")
	  			->limit(1)
	  			->get('sh_m_cabang')
	  			->row('outlet_id');
	  			
	    		$nomer = 1;
				
				
    			
					echo "<br>";

    		
    			$this->db->query("update sh_t_transactions set date_order_menu='".date('Y-m-d H:i:s')."',is_order_menu_active=1,start_time_order='".date('H:i:s')."',checker_printed = 1 where id = '".$id_trans->id."' and id_customer = '".$ic."'");
    			$this->session->set_flashdata('successcart','Menu Sent to Kitchen');
				redirect('selforder/home/'.$table);
				// $where = array('qty' => 0);
				// $this->Item_model->hapus_qty($where,'testing');
			}else{
				echo "gagal order";
			}
		}else{
			$this->session->set_flashdata('error','stock is not fulfilled');
			if ($cek == 'Makanan') {
			$log = 'Cart/home/'.$table.'/Makanan/'.$sub.'#'.preg_replace('/%20/', '_', $sub);;
			}elseif ($cek == 'Minuman') {
				$log = 'Cart/home/'.$table.'/Minuman/'.$sub.'#'.preg_replace('/%20/', '_', $sub);
			}else{
				$log = 'Cart/home/'.$table;
			}
			redirect(base_url().$log);
		}

	}
	public function delete($id,$nomeja,$cek,$sub,$no)
	{
		$this->db->where('id',$id);
    	$this->db->delete('sh_cart');
    	$this->session->set_flashdata('success','Menu Has Been Removed');

    	if ($cek == 'Makanan') {
			$log = 'Cart/home/'.$nomeja.'/Makanan/'.$sub.'#'.preg_replace('/%20/', '_', $sub);;
		}elseif ($cek == 'Minuman') {
			$log = 'Cart/home/'.$nomeja.'/Minuman/'.$sub.'#'.preg_replace('/%20/', '_', $sub);
		}else{
			$log = 'Cart/home/'.$nomeja;
		}
		redirect(base_url().$log);
	}
	public function ubah($id,$nomeja,$cek,$sub)
	{
		// echo $id;exit();
		$qty = $this->input->post('qty');
		$extra_notes = $this->input->post('extra_notes');
		$data = [
			'qty' => $qty,
			'extra_notes' => $extra_notes,
		];
		$this->db->where('id',$id);
		if ($qty != 0) {
			$this->db->update('sh_cart',$data);
			$this->session->set_flashdata('success','Menu Has Been Updated');
		}else{
			$this->db->delete('sh_cart');
			$this->session->set_flashdata('error','Menu Has Been Removed');
		}
    	
    	if ($cek == 'Makanan') {
			$log = 'Cart/home/'.$nomeja.'/Makanan/'.$sub.'#'.preg_replace('/%20/', '_', $sub);;
		}elseif ($cek == 'Minuman') {
			$log = 'Cart/home/'.$nomeja.'/Minuman/'.$sub.'#'.preg_replace('/%20/', '_', $sub);
		}else{
			$log = 'Cart/home/'.$nomeja;
		}
		redirect(base_url().$log);
		
	}
}
