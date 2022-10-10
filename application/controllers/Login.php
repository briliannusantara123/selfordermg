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
	public function log($nomeja)
	{
		$this->form_validation->set_rules('passcode','passcode','trim|required');
		$data['nomeja'] = $nomeja;
		$nm = $this->session->userdata('nomeja');
		$log = $this->Item_model->log($nomeja)->result();
		if ($log) {
			if ($this->form_validation->run() == FALSE) {
			$this->load->view('login',$data);	
		}else{
			$this->_login($nomeja);
		}
		}else{
			$this->session->set_flashdata('error','Status Meja Sudah Payment Tidak Dapat Mengakses Halaman Menu.');
			$this->load->view('login',$data);
			
		}
		
		
	}
	public function _login($nomeja)
	{
		$passcode = $this->input->post('passcode');
		$date = date('Y-m-d');
		$user = $this->db->get_where('sh_m_customer',['passcode' => $passcode,'create_date' => $date])->row_array();
		// var_dump($user);exit();
		$meja = $this->db->get_where('sh_rel_table',['id_customer' => $user['id'], 'id_table' => $nomeja ])->row_array();
		// var_dump($meja);die();
		if ($user) {
			if ($user['passcode'] == $passcode && $meja['id_table'] == $nomeja) {
				$data = [
					'username' => $user['member_name'],
					'no_telp' => $user['no_telp'],
					'id' => $user['id'],
					'nomeja' => $nomeja
				];
				$a = $nomeja;
				$this->session->set_userdata($data);
				$this->session->set_flashdata('success','Anda Berhasil Login,Silahkan Pesan !');
				redirect('selforder/home/'.$a);
			}else{
				$a = $nomeja;
				$this->session->set_flashdata('error','Passcode yang Anda Masukan Salah !');
				redirect('login/log/'.$a);
			}
		}else{
			$a = $nomeja;
			$this->session->set_flashdata('error','Passcode yang Anda Masukan Salah !');
			redirect('login/log/'.$a);
		}
	}
	public function logout()
	{
		$cs = $this->session->userdata('id');
		$nm = $this->session->userdata('nomeja');
		$nomeja = $this->Item_model->nomeja($cs);
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('no_telp');

		$this->session->set_flashdata('error','Anda Telah Logout!, Silahkan Login Terlebih Dahulu Untuk Mengakses Halaman Menu');
			// echo "<div class='container' style='margin-top:360px;margin-left:30px;margin-right:30px;font-size:50px;'><h3 style='text-align:center;background-color:#198754;color:white;padding-top:500px;padding-bottom:500px;border-radius:5%'>SELF ORDER TIDAK TERSEDIA !!</h3></div>";
		redirect('login/log/'.$nm);
	}
}
 ?>
