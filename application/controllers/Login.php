<?php 
class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Item_model');
	}
	public function index()
	{
		$this->form_validation->set_rules('passcode','passcode','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');	
		}else{
			$this->_login($nomeja);
		}
		
	}
	public function log($nomeja=NULL)
	{
		$this->form_validation->set_rules('passcode','passcode','trim|required');
		if ($nomeja != NULL) {
			$data['nomeja'] = $nomeja;
		}else{
			$data['nomeja'] = $this->session->userdata('nomeja');
		}
		$idc = $this->session->userdata('id');
		$session = $this->db->order_by('id',"desc")->where('id_table',$nomeja)
  			->limit(1)
  			->get('sh_rel_table')
  			->row('status');
		$nm = $this->session->userdata('nomeja');
		$log = $this->Item_model->log($nomeja)->result();
		if ($session == 'Payment') {
			$this->session->set_flashdata('error','Table Status Has Been Paid Can`t Access Menu Page.');
			$this->load->view('login',$data);
		}elseif ($session == 'Cleaning') {
			$this->session->set_flashdata('error','Table Status Has Been Cleaning Can`t Access Menu Page.');
			$this->load->view('login',$data);
		}else{
		if ($log) {
			if ($this->form_validation->run() == FALSE) {
			$this->load->view('login',$data);	
		}else{
			$this->_login($nomeja);
		}
		}else{

			$this->load->view('login',$data);
			
		}
		}
		
		
	}
	public function _login($nomeja)
	{
		// $user_order_id = $this->Item_model->kode($nomeja);
		$user_order_id = $this->input->ip_address();
		// var_dump($user_order_id);exit();
		$passcode = $this->input->post('passcode');
		$date = date('Y-m-d');
		$where = "sh_rel_table.id_table = '".$nomeja."' and SUBSTRING_INDEX(sh_m_customer.customer_name, ' ',1) = '".$passcode."' and left(created_date,10) ='".$date."' and status in('Order','Dining','Billing')";
		$this->db->select('*');
		$this->db->from('sh_rel_table');
		$this->db->join('sh_m_customer', 'sh_m_customer.id = sh_rel_table.id_customer');
		$this->db->where($where);
		$log = $this->db->get()->row_array();
		// $user = $this->db->get_where('sh_m_customer',['passcode' => $passcode,'left(create_date,10) = ' => $date])->row_array();
		// // var_dump($user);exit();
		
		// $meja = $this->db->get_where('sh_rel_table',$where)->row_array();
		// var_dump($meja);die();
		if ($log) {
			if ($log) {
				$data = [
					'username' => $log['customer_name'],
					'no_telp' => $log['no_telp'],
					'id' => $log['id'],
					'nomeja' => $nomeja,
					'user_order_id' => $user_order_id
				];
				$a = $nomeja;
				// $d = [
				// 		'created_date' => date('Y-m-d'),
				// 		'id_table' => $nomeja,
				// 		'user_order_id' =>$user_order_id
				// 	 ];
				// $this->db->insert('sh_log_user',$d);
				$this->session->set_userdata($data);
				$this->session->set_flashdata('success','Login Successfully, Please Order !');
				redirect('selforder/home/'.$a);
			}else{
				$a = $nomeja;
				$this->session->set_flashdata('error','Wrong Passcode !');
				redirect('login/log/'.$a);
			}
		}else{
			$a = $nomeja;
			$this->session->set_flashdata('error','Wrong Passcode !');
			redirect('login/log/'.$a);
		}
	}
	public function logout($nm,$pm=NULL)
	{

		
			// echo "<div class='container' style='margin-top:360px;margin-left:30px;margin-right:30px;font-size:50px;'><h3 style='text-align:center;background-color:#198754;color:white;padding-top:500px;padding-bottom:500px;border-radius:5%'>SELF ORDER TIDAK TERSEDIA !!</h3></div>";
		
		$cs = $this->session->userdata('id');
		$nomeja = $this->Item_model->nomeja($cs);
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('no_telp');
		$this->session->set_flashdata('error','Please Scan the QR Code to Login Again');
		 // $this->session->set_flashdata('error','Due to inactivity, you have been logout please kindly login again using your passcode');

		redirect('login/log/'.$nm);
	}
	public function log_out($nm)
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('no_telp');
			$this->session->set_flashdata('error','You have logged out because you changed tables');
		
		redirect('login/log/'.$nm);
	}
}
 ?>
