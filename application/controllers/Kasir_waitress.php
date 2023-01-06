<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir_waitress extends CI_Controller {

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
	public function memanggil($nomeja)
	{
		$name = $this->session->userdata('username');
		$id_customer = $this->session->userdata('id');
		$date = date('Y-m-28');
		$this->load->database();
	$cabang = $this->db->order_by('id',"desc")
  	->limit(1)
  	->get('sh_m_cabang')
  	->row('id');
  	$query = "select R.* from sh_notification R where R.id_table = '$nomeja' and left(R.created_date,10) = left(sysdate(),10) and R.customer_name = '$name' and R.tipe = 'Waitress' ORDER BY id DESC limit 1";
  	$panggil = $this->db->query($query)->row();

  	 // var_dump($panggil);exit();
		$data = [
				'id_table' => $nomeja,
				'customer_name' => $name,
				'tipe' => 'waitress',
				'cabang' => $cabang,
				'created_date' => date('Y-m-d H:i:s')
			];
			if ($panggil == NULL) {
				$this->db->insert('sh_notification',$data);
			$this->session->set_flashdata('success','Please Wait a Moment,Waitress/Waiter Will Come to Serve You');
			redirect($_SERVER['HTTP_REFERER']);
			}elseif($panggil != NULL){
				if ($panggil->is_accepted == 0) {
				$this->session->set_flashdata('error','Please Wait a Moment,Waitress/Waiter is on the way');
			redirect($_SERVER['HTTP_REFERER']);
			}else{
			$this->db->insert('sh_notification',$data);
			$this->session->set_flashdata('success','lease Wait a Moment,Waitress/Waiter Will Come to Serve You');
			redirect($_SERVER['HTTP_REFERER']);
			}
			}
			
			
	}
	public function meminta($nomeja)
	{
		$name = $this->session->userdata('username');
		$id_customer = $this->session->userdata('id');
		$this->load->database();
		$cabang = $this->db->order_by('id',"desc")
	  	->limit(1)
	  	->get('sh_m_cabang')
	  	->row('id');
	  	$cekorder = $this->Item_model->billsementara($id_customer)->result();
	  	$query = "select R.* from sh_notification R where R.id_table = '$nomeja' and left(R.created_date,10) = left(sysdate(),10) and R.customer_name = '$name' and R.tipe = 'Kasir' ORDER BY id DESC limit 1";
  	$panggil = $this->db->query($query)->row();
  	
		$data = [
				'id_table' => $nomeja,
				'customer_name' => $name,
				'tipe' => 'kasir',
				'cabang' => $cabang,
				'created_date' => date('Y-m-d H:i:s')
			];
			if ($cekorder == NULL) {
				$this->session->set_flashdata('error','Lakukan Order Terlebih Dahulu Sebelum Meminta Bill,Terima Kasih');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				if ($panggil == NULL) {
					$this->db->insert('sh_notification',$data);
					$this->session->set_flashdata('success','Berhasil Meminta Bill,Harap Tunggu Sebentar.');
					redirect($_SERVER['HTTP_REFERER']);
				}elseif($panggil != NULL){
					if ($panggil->is_accepted == 0) {
						$this->session->set_flashdata('error','Permintaan Bill sudah diterima, mohon ditunggu terima kasih');
						redirect($_SERVER['HTTP_REFERER']);
					}else{
						$this->db->insert('sh_notification',$data);
						$this->session->set_flashdata('success','Berhasil Meminta Bill,Harap Tunggu Sebentar.');
						redirect($_SERVER['HTTP_REFERER']);
					}
				}
			}
	}
	
}
