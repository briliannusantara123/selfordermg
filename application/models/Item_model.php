<?php 
	class Item_model extends CI_model {
		public function getData($tipe,$sub_category)
		{
			$ic = $this->session->userdata('id');
			// echo $tipe; echo $sub_category; exit();
			if ($sub_category == "rekomendasi") {
				$where = "sub_category = 'Chef Recommendation'";
				$where .=" and is_active = 1 and is_sold_out = 0 and (monitor1 !=0 or monitor2 !=0 or monitor3 !=0 or monitor4 !=0 or monitor5 !=0 or monitor6 !=0 or monitor7 !=0 or monitor8 !=0 or monitor9 !=0 or monitor10 !=0 or monitor11 !=0 or monitor12 !=0 or monitor13 !=0 or monitor14 !=0 or monitor15 !=0 or monitor16 !=0 or monitor17 !=0 or monitor18 !=0 or monitor19 !=0 or monitor20 !=0 or monitor21 !=0 or monitor22 !=0 or monitor23 !=0 or monitor24 !=0 or monitor25 !=0 or monitor26 !=0) ";
				$this->db->where($where);
				$this->db->order_by('i.description asc');
			}else if($sub_category == "all"){
				$where ="is_active = 1 and is_sold_out = 0 and (monitor1 !=0 or monitor2 !=0 or monitor3 !=0 or monitor4 !=0 or monitor5 !=0 or monitor6 !=0 or monitor7 !=0 or monitor8 !=0 or monitor9 !=0 or monitor10 !=0 or monitor11 !=0 or monitor12 !=0 or monitor13 !=0 or monitor14 !=0 or monitor15 !=0 or monitor16 !=0 or monitor17 !=0 or monitor18 !=0 or monitor19 !=0 or monitor20 !=0 or monitor21 !=0 or monitor22 !=0 or monitor23 !=0 or monitor24 !=0 or monitor25 !=0 or monitor26 !=0) ";
				$where .= "and category = 'MAKANAN'";
				$this->db->where($where);
				$this->db->order_by('i.description asc');
			}else if($sub_category == "all_minuman"){
				$where ="is_active = 1 and is_sold_out = 0 and (monitor1 !=0 or monitor2 !=0 or monitor3 !=0 or monitor4 !=0 or monitor5 !=0 or monitor6 !=0 or monitor7 !=0 or monitor8 !=0 or monitor9 !=0 or monitor10 !=0 or monitor11 !=0 or monitor12 !=0 or monitor13 !=0 or monitor14 !=0 or monitor15 !=0 or monitor16 !=0 or monitor17 !=0 or monitor18 !=0 or monitor19 !=0 or monitor20 !=0 or monitor21 !=0 or monitor22 !=0 or monitor23 !=0 or monitor24 !=0 or monitor25 !=0 or monitor26 !=0) ";
				$where .= "and category = 'MINUMAN'";
				$this->db->where($where);
				$this->db->order_by('i.description asc');
			}else{
			if($tipe == 'Makanan'){
		$where = " category IN ('SIAP SAJI','PROSES')";
	}else if($tipe == 'Minuman'){
		$where = " category = 'MINUMAN'";
	}

	$where .=" and is_active = 1 and (monitor1 !=0 or monitor2 !=0 or monitor3 !=0 or monitor4 !=0 or monitor5 !=0 or monitor6 !=0 or monitor7 !=0 or monitor8 !=0 or monitor9 !=0 or monitor10 !=0 or monitor11 !=0 or monitor12 !=0 or monitor13 !=0 or monitor14 !=0 or monitor15 !=0 or monitor16 !=0 or monitor17 !=0 or monitor18 !=0 or monitor19 !=0 or monitor20 !=0 or monitor21 !=0 or monitor22 !=0 or monitor23 !=0 or monitor24 !=0 or monitor25 !=0 or monitor26 !=0) ";

	if($sub_category !=''){
		
		$where .= " and LOWER(sub_category_so) = '".strtolower(urldecode($sub_category))."'";
	}
	// $this->db->where('c.id_customer',$ic);
	
	$this->db->join('sh_cart c', 'i.no = c.item_code', 'left');
	$this->db->join('sh_t_transaction_details d', 'i.no = d.item_code', 'left');
	$this->db->select('i.description,i.image_path,i.id,i.harga_weekday,i.harga_weekend,i.harga_holiday,i.no,i.product_info,i.need_stock,i.is_sold_out,c.qty,c.id_customer,i.with_option,i.sub_category,i.stock,d.qty');
	$this->db->where($where);
	$this->db->group_by("i.description");
	$this->db->order_by('i.description asc');
}
	return $this->db->get('sh_m_item i')->result();
		}
public function get_stock($cabang, $item_code=null)
	{
		//Load database
		$db2 = $this->load->database("alacarte", TRUE);

		if($cabang !='0'){
			$db2->where(["i.cabang"=> $cabang]);
		}

		if($item_code !=null) {
			$where = "i.no = '".$item_code."'";
			$db2->where($where);
		}

		//$db2->where(["i.stock_update_date"=> date('Y-m-d H:i:s')]);
		$db2->select("i.*")
			->from("sh_m_item i")
			->order_by("i.id", "asc");
		return $db2->get();
	}
public function getDataC($item_code)
{
	// $array = array('apple', 'banana', 'orange');
	// $array_with_quotes = array_map(function($val) { return "'" . $val . "'"; }, $name);
	// $nama = implode(", ", $array_with_quotes);
	// $test = "$nama";
	// $n = stripslashes($test);
	// echo $n;exit();
	$date = date('Y-m-d');
	$where ="left(c.entry_date,10) ='".$date."'";
	$this->db->join('sh_m_item i', 'c.item_code = i.no', 'left');
	$this->db->select('i.stock,i.need_stock,c.*');
	$this->db->where($where);
	$this->db->where_in('c.item_code',$item_code);

	return $this->db->get('sh_cart c')->result();
}

	public function get_holiday($tanggal='all')
{
	if($tanggal != 'all'){
		$this->db->where(["h.holiday_date"=> $tanggal]);
	}

	$this->db->select("h.*")
		->from("sh_m_holiday h")
		->order_by("h.id", "asc");
	return $this->db->get()->row();
}
public function get_promo($tanggal)
{
	if($tanggal !='0'){
		$where = "'".$tanggal."' between p.promo_start_date and p.promo_end_date ";
		$this->db->where($where);
	}
 
	$this->db->select("p.*")
		->from("sh_m_promo p")
		->order_by("p.id", "asc");
	return $this->db->get();
}

//item info promo
public function get_info_item($item_code, $data)
{
	$filter = $data["promo_filter"];
	$filter_value = $data["filter_value"];
	$filter_value1 = $data["filter_value1"];
	$filter_value2 = $data["filter_value2"];
	$where = "i.no = '".$item_code."'";
	if($filter != ''){
		if($filter_value != '' && $filter_value1 != '' && $filter_value2 != ''){
			$where .= " and i.".$filter." in ('".$filter_value."','".$filter_value1."','".$filter_value2."')";
		}else if($filter_value != '' && $filter_value1 != '' && $filter_value2 == ''){
			$where .= " and i.".$filter." in ('".$filter_value."','".$filter_value1."')";
		}else if($filter_value != '' && $filter_value1 == '' && $filter_value2 != ''){
			$where .= " and i.".$filter." in ('".$filter_value."','".$filter_value2."')";
		}else if($filter_value == '' && $filter_value1 != '' && $filter_value2 != ''){
			$where .= " and i.".$filter." in ('".$filter_value1."','".$filter_value2."')";
		}else if($filter_value != '' && $filter_value1 == '' && $filter_value2 == ''){
			$where .= " and i.".$filter." in ('".$filter_value."')";
		}else if($filter_value == '' && $filter_value1 != '' && $filter_value2 == ''){
			$where .= " and i.".$filter." in ('".$filter_value1."')";
		}else if($filter_value == '' && $filter_value1 == '' && $filter_value2 != ''){
			$where .= " and i.".$filter." in ('".$filter_value2."')";
		}
		
	}
	$this->db->where($where);
	$this->db->select("i.*")
		->from("sh_m_item i")
		->order_by("i.id", "asc");
	return $this->db->get();
}

		public function sub_category()
		{
			$this->db->select('i.sub_category_so');
	        $this->db->from('sh_m_item i');
	        $this->db->join('sh_m_item_sub_category s', 's.description = i.sub_category_so', 'inner');
	        $this->db->where('s.is_active',1);
	        $this->db->where_in('s.category', array('SIAP SAJI','PROSES'));
	        $this->db->group_by('i.sub_category_so');
	        $this->db->order_by('s.description','desc');
	              
	        $query = $this->db->get()->result_array();
	        return $query;
		}
		public function sub_category_minuman()
		{
			$this->db->select('i.sub_category_so');
	        $this->db->from('sh_m_item i');
	        $this->db->join('sh_m_item_sub_category s', 's.description = i.sub_category_so', 'inner');
	        $this->db->where('s.is_active',1);
	        $this->db->where('s.category','MINUMAN');
	        $this->db->group_by('i.sub_category_so');
	        $this->db->order_by('s.description','desc');
	               
	        $query = $this->db->get()->result_array();
	        return $query;
		}
		public function getDatatype($type)
		{
			$this->db->select('*');
	        $this->db->from('sh_m_item');
	        $this->db->where('category',$type);
	              
	        $query = $this->db->get()->result_array();
	        return $query;
		}
		public function get_paket($nomeja) {
			$this->db->select('tipe_paket');
			$this->db->where(['id_table'=> $nomeja,'status'=> 'Dining']);
			$this->db->limit(1);
			return $this->db->get('sh_rel_table')->row();
		}
		public function get_order_paket($nomeja,$id_customer) {
			$this->db->select('sum(d.qty) as jml_paket');
			$this->db->join('sh_m_item m', 'm.no = d.item_code', 'inner');
			$this->db->join('sh_t_transactions t', 't.id = d.id_trans', 'inner');
			$where = "t.id_customer = '".$id_customer."' and left(t.create_date,10) = left(sysdate(),10) and m.category in ('DEWASA','SENIOR','ANAK') and d.selected_table_no = '".$nomeja."'";
			$this->db->where($where);
			$this->db->group_by('d.id_trans,d.selected_table_no');
			return $this->db->get('sh_t_transaction_details d')->row();
		}
		public function get_order_kuah($nomeja,$id_customer) {
			$this->db->select('sum(d.qty) as jml_kuah');
			$this->db->join('sh_m_item m', 'm.no = d.item_code', 'inner');
			$this->db->join('sh_t_transactions t', 't.id = d.id_trans', 'inner');
			$where = "t.id_customer = '".$id_customer."' and left(t.create_date,10) = left(sysdate(),10) and m.category in ('SOUP') and d.selected_table_no = '".$nomeja."'";
			$this->db->where($where);
			$this->db->group_by('d.id_trans,d.selected_table_no');
			return $this->db->get('sh_t_transaction_details d')->row();
		}
		public function get_kuah() {
			$this->db->select('*');
			$this->db->where(['category'=> 'SOUP','is_active'=> 1]);
			$this->db->order_by('no asc');
			return $this->db->get('sh_m_item')->result();
		}
		public function get_spesial($nomeja) {
			$q = "select tipe_paket from sh_rel_table where id_table='".$nomeja."' and status='Dining' limit 1";
			$paket = $this->db->query($q)->row();
			$sub = "";
			if($paket->tipe_paket == 'Shabu Only'){
			   $sub = "and sub_category='Shabu' ";
			}else if($paket->tipe_paket == 'Yakiniku Only'){
			   $sub = "and sub_category='Yakiniku' ";
			}

			$this->db->select('*');
			$this->db->where(['category'=> 'SPESIAL','is_active'=> 1]);
			$this->db->order_by('no asc');
			return $this->db->get('sh_m_item')->result();
		}
		public function nomeja($cs)
		{
			return $this->db->get_where('sh_rel_table',['id_customer' => $cs, 'status' => 'Dining'])->row_array();
		}
		public function getDataOrder($id_customer)
		{
			// $this->db->select('*');
	  //       $this->db->from('sh_t_transaction_details');
	  //       $this->db->where('entry_by',$uc);
	  //       $this->db->where('is_paid',0);
	              
	  //       $query = $this->db->get()->result_array();
	  //       return $query;
			/*query history order*/
//trans
			$q1 = "select * from sh_t_transactions where id_customer = '".$id_customer."' limit 1";
			$trans = $this->db->query($q1)->row();
			$notrans = $trans->id;

			//order line
			$query = "select * from sh_t_transaction_details where id_trans='".$notrans."' and is_paid = 0 and is_cancel = 0 order by start_time_order,item_code asc";
			return $this->db->query($query);
			
		}
		public function getOrderCustomer()
		{
			$date = date('Y-m-d');
			$query = "select t.id,c.customer_name,d.id_trans,r.id_table,r.status,count(d.id) as jml_item,d.* from sh_t_transactions t 
			inner join sh_t_transaction_details d on d.id_trans = t.id 
			inner join sh_m_customer c on c.id = t.id_customer 
			inner join sh_rel_table r on r.id_customer = c.id 
			inner join sh_m_item i on i.no = d.item_code 
			where d.selforder = 1
			and d.is_paid = 0 
			and d.is_cancel = 0
			and d.is_printed_so = 0
			and left(d.created_date,10) ='".$date."'
			group by d.cekdata
			order by d.id desc";
			return $this->db->query($query);
			
		}
		public function getOrderCustomerLine($id,$datake)
		{
			$date = date('Y-m-d');
			$query = "select i.image_path,i.description,d.* from sh_t_transactions t 
			inner join sh_t_transaction_details d on d.id_trans = t.id
			inner join sh_m_item i on i.no = d.item_code 
			where d.selforder = 1
			and d.is_paid = 0 
			and d.is_cancel = 0
			and d.is_printed_so = 0
			and d.id_trans = '".$id."'
			and d.cekdata = '".$datake."'
			and left(d.created_date,10) ='".$date."'
			order by d.item_code desc";
			return $this->db->query($query);
			
		}
		public function getCustomer($id)
		{
			$date = date('Y-m-d');
			$query = "select i.image_path,d.entry_by,d.selected_table_no,i.description,d.* from sh_t_transactions t 
			inner join sh_t_transaction_details d on d.id_trans = t.id
			inner join sh_m_item i on i.no = d.item_code 
			where d.selforder = 1
			and d.is_paid = 0 
			and d.is_cancel = 0 
			/*and d.id = '".$id."'*/
			and t.id = '".$id."'
			and left(d.created_date,10) ='".$date."'
			LIMIT 1";
			return $this->db->query($query);
		}

		public function getHistoryprints()
		{
			$date = date('Y-m-d');
			$query = "select t.id,c.customer_name,d.id_trans,r.id_table,r.status,count(d.id) as jml_item from sh_t_transactions t 
				inner join sh_t_transaction_details d on d.id_trans = t.id 
				inner join sh_m_customer c on c.id = t.id_customer 
				inner join sh_rel_table r on r.id_customer = c.id 
				inner join sh_m_item i on i.no = d.item_code 
				where d.selforder = 1
				and d.is_paid = 0 
				and d.is_cancel = 0 
				and d.is_printed_so = 1
				and r.status = 'Dining'
				and left(d.created_date,10) ='".$date."'
				group by d.id_trans,d.selected_table_no 
				order by d.id_trans desc";
			return $this->db->query($query);
			
		}
		public function getHistoryprint()
		{
			$date = date('Y-m-d');
			$query = "select d.id,c.customer_name,d.id_trans,r.id_table,r.status,d.* from sh_t_transactions t 
			inner join sh_t_transaction_details d on d.id_trans = t.id 
			inner join sh_m_customer c on c.id = t.id_customer 
			inner join sh_rel_table r on r.id_customer = c.id 
			inner join sh_m_item i on i.no = d.item_code 
			where d.selforder = 1
			and d.is_paid = 0 
			and d.is_cancel = 0
			and d.is_printed_so = 1
			and left(d.created_date,10) ='".$date."'
			group by d.cekdata,d.selected_table_no
			order by d.id desc";

			return $this->db->query($query);
		}
		public function cekprint($id_trans)
		{
			$date = date('Y-m-d');
			$query = "select t.id,c.customer_name,d.id_trans,r.id_table,r.status,d.* from sh_t_transactions t 
			inner join sh_t_transaction_details d on d.id_trans = t.id
			inner join sh_m_customer c on c.id = t.id_customer 
			inner join sh_rel_table r on r.id_customer = c.id 
			inner join sh_m_item i on i.no = d.item_code  
			where d.selforder = 1
			and d.is_paid = 0 
			and d.is_cancel = 0
			and d.is_printed_so = 0
			and d.id_trans = '".$id_trans."'
			and left(d.created_date,10) ='".$date."'
			order by d.item_code desc";
			return $this->db->query($query);
		}
		public function getHistoryprintLine($id_trans,$datake)
		{
			$date = date('Y-m-d');
			$query = "select i.image_path,i.description,d.* from sh_t_transactions t 
			inner join sh_t_transaction_details d on d.id_trans = t.id
			inner join sh_m_item i on i.no = d.item_code 
			where d.selforder = 1
			and d.is_paid = 0 
			and d.is_cancel = 0
			and d.is_printed_so = 1
			and d.id_trans = '".$id_trans."'
			and d.cekdata = '".$datake."'
			and left(d.created_date,10) ='".$date."'
			order by d.item_code desc";
			return $this->db->query($query);
			
		}
		public function cekdatatrans($id_customer)
		{
			$date = date('Y-m-d');
			$query = "select * from sh_t_transactions t 
			where t.id_customer = '".$id_customer."'
			and left(t.create_date,10) ='".$date."'";
			return $this->db->query($query);
		}
		public function cekdatacart($no,$uoi)
		{
			$date = date('Y-m-d');
			$ic = $this->session->userdata('id');
			$query = "select * from sh_cart c 
			where c.item_code = '".$no."'
			and left(c.entry_date,10) ='".$date."' and c.id_customer = '".$ic."' and c.user_order_id = '".$this->session->userdata('user_order_id')."' ";
			return $this->db->query($query);
		}
		public function cekdatatransdetail($id_trans)
		{
			$date = date('Y-m-d');
			$query = "select * from sh_t_transaction_details d 
			where d.id_trans = '".$id_trans."'
			and left(d.created_date,10) ='".$date."'
			order by d.id desc 
			LIMIT 1";
			return $this->db->query($query);
		}
		public function billsementara($id_customer)
		{
			$q = "select * from sh_m_setup ";
			$setup = $this->db->query($q)->row();
			$scPercent = $setup->sc_percent;
			$taxPercent = $setup->tax_percent;

			//trans
			$q1 = "select * from sh_t_transactions where id_customer = '".$id_customer."' limit 1";
			$trans = $this->db->query($q1)->row();
			$notrans = $trans->id;
			$cabang = $trans->cabang;

			//bill header
			$query = "select c.customer_name, a.id_trans, c.total_pax as totalpax_reservasi, (select sum(t.qty) as ttl from (select d.qty from sh_t_transaction_details d inner join sh_m_item m on d.item_code = m.no where d.id_trans = ".$notrans." and m.category in ('DEWASA','SENIOR','ANAK') group by d.selected_table_no,d.seat_id) as t) as totalpax_actual, 
							(select sum(d.unit_price * d.qty) as total from sh_t_transaction_details d where d.is_paid = 0 and d.is_cancel = 0 and d.id_trans = ".$notrans." group by d.id_trans) as total, ((select sum(d.unit_price * d.qty) as total from sh_t_transaction_details d where d.is_paid = 0 and d.is_cancel = 0 and d.id_trans = ".$notrans." group by d.id_trans) * (".$scPercent."/100)) as sc, ((((select sum(d.unit_price * d.qty) as total from sh_t_transaction_details d where d.is_paid = 0 and d.is_cancel = 0 and d.id_trans = ".$notrans." group by d.id_trans) * (".$scPercent."/100)) * (".$taxPercent."/100)) + ((select sum(d.unit_price * d.qty) as total from sh_t_transaction_details d where d.is_paid = 0 and d.is_cancel = 0 and d.id_trans = ".$notrans." group by d.id_trans) * (".$taxPercent."/100))) as ppn, (select group_concat(xx.id_table) from sh_rel_table xx inner join sh_trans_reltable strx on strx.id_rel_table = xx.id inner join sh_t_transactions tx on tx.id = strx.id_trans where tx.id = ".$notrans.") as no_table, b.bill_printed_count as print_count 
								  from sh_t_transaction_details a inner join sh_t_transactions b on a.id_trans = b.id 
								  inner join sh_m_customer c on c.id = b.id_customer where a.is_paid = 0 and a.is_cancel = 0 and b.cabang = ".$cabang." and b.id= ".$notrans." and Left(b.create_date, 10) = Left(SYSDATE(), 10) limit 1";
			$header = $this->db->query($query)->row();

			//bill line
			$query1 = "select  a.description, case when a.unit_price > 0 then a.unit_price else 'FREE' end as unit_price, case when sum(a.qty*a.unit_price) > 0 then sum(a.qty*a.unit_price) else 'FREE' end as sub_total 
								  from sh_t_transaction_details a 
								  inner join sh_t_transactions b on a.id_trans = b.id 
								  inner join sh_m_customer c on c.id = b.id_customer where a.is_paid = 0 and a.is_cancel = 0 and b.cabang = ".$cabang." and b.id= ".$notrans." group by a.item_code,a.id_trans order by a.item_code asc";
			return $this->db->query($query1);
		}
		public function getDataSubOrder($uc)
		{
			$this->db->select('*');
	        $this->db->from('sh_t_sub_transactions');
	        $this->db->where('entry_by',$uc);
	              
	        $query = $this->db->get()->result_array();
	        return $query;
		}
		public function getDataCek($ic)
		{
			$this->db->select('*');
	        $this->db->from('sh_cart');
	        $this->db->where('id_customer',$ic);
	              
	        $query = $this->db->get()->result_array();
	        return $query;
		}
		public function get_Cart($ic,$table,$itemCode,$uoi)
		{
			$this->db->select('*');
	        $this->db->from('sh_cart');
	        $this->db->where(['id_customer'=>$ic,'id_table'=>$table,'item_code'=>$itemCode,'user_order_id' => $uoi]);
	        $query = $this->db->get();
	        return $query;
		}
		public function save($table,$data, $where='') {
			if ($where == '') {
				$this->db->insert($table, $data);
				return $this->db->insert_id();
			}
			return $this->db->update($table, $data, $where);			
		}
		public function cart($ic)
		{
			$date = date('Y-m-d');
			$uoi = $this->session->userdata('user_order_id');
			$this->db->select('m.image_path,m.need_stock,d.*');
	        $this->db->from('sh_cart d');
	        $this->db->join('sh_m_item m', 'm.no = d.item_code');
	        $where = "left(entry_date,10) ='".$date."' and id_customer = '".$ic."' and user_order_id = '".$uoi."'";
	        $this->db->where($where);
	              
	        $query = $this->db->get();
	        return $query;
		}
		public function total($uc){
      		$this->db->select('SUM(unit_price * qty) as total');
			$this->db->from('sh_t_transaction_details');
			$this->db->where('entry_by',$uc);
			return $this->db->get()->row()->total;
   		}
   		public function totalSubOrder($uc){
      		$this->db->select('SUM(unit_price * qty) as total');
			$this->db->from('sh_t_sub_transactions');
			$this->db->where('entry_by',$uc);
			return $this->db->get()->row()->total;
   		}
   		public function log($nomeja)
   		{
   			// print_r($date);die();
   			$sql = "select R.*,C.customer_name from sh_rel_table R inner join sh_m_customer C on C.id = R.id_customer where R.id_table = '$nomeja' and left(C.create_date,10) = left(sysdate(),10) and R.status in ('Order','Dining','Billing') limit 1";
	        return $this->db->query($sql);
   		}
   		public function order_bill($cabang,$notrans)
{
	//get setup
	$q = "select * from sh_m_setup ";
	$setup = $this->db->query($q)->row();
	$scP = $setup->sc_percent;
	$taxP = $setup->tax_percent;
	//get setup
	$query = "select c.customer_name, a.id_trans, c.total_pax as totalpax_reservasi, (select count(t.seat_id) as ttl from (select d.seat_id from sh_t_transaction_details d where d.id_trans = ".$notrans." group by d.selected_table_no,d.seat_id) as t) as totalpax_actual, (select (sum(d.unit_price * d.qty) - sum(d.unit_price * d.qty * (d.disc/100))) as total from sh_t_transaction_details d where d.is_paid = 0 and d.is_cancel = 0 and d.id_trans = ".$notrans." group by d.id_trans) as total, ((select (sum(d.unit_price * d.qty) - sum(d.unit_price * d.qty * (d.disc/100))) as total from sh_t_transaction_details d where d.is_paid = 0 and d.is_cancel = 0 and d.id_trans = ".$notrans." group by d.id_trans) * (".$scP."/100)) as sc, ((((select (sum(d.unit_price * d.qty) - sum(d.unit_price * d.qty * (d.disc/100))) as total from sh_t_transaction_details d where d.is_paid = 0 and d.is_cancel = 0 and d.id_trans = ".$notrans." group by d.id_trans) * (".$scP."/100)) * (".$taxP."/100)) + ((select (sum(d.unit_price * d.qty) - sum(d.unit_price * d.qty * (d.disc/100))) as total from sh_t_transaction_details d where d.is_paid = 0 and d.is_cancel = 0 and d.id_trans = ".$notrans." group by d.id_trans) * (".$taxP."/100))) as ppn, (select group_concat(xx.id_table) from sh_rel_table xx inner join sh_trans_reltable strx on strx.id_rel_table = xx.id inner join sh_t_transactions tx on tx.id = strx.id_trans where tx.id = ".$notrans.") as no_table, b.bill_printed_count as print_count 
						  from sh_t_transaction_details a inner join sh_t_transactions b on a.id_trans = b.id 
						  inner join sh_m_customer c on c.id = b.id_customer where a.is_paid = 0 and a.is_cancel = 0 and b.cabang = ".$cabang." and b.id= ".$notrans." and Left(b.create_date, 10) = Left(SYSDATE(), 10) limit 1";
	return $this->db->query($query)->row();
}
public function order_bill_co($cabang,$notrans)
{
	//get setup
	$q = "select * from sh_m_setup ";
	$setup = $this->db->query($q)->row();
	$scP = $setup->sc_percent;
	$taxP = $setup->tax_percent;
	//get setup
	$query = "select c.customer_name, a.id_trans, c.total_pax as totalpax_reservasi, (select count(t.seat_id) as ttl from (select d.seat_id from sh_t_sub_transactions d where d.id_trans = ".$notrans." group by d.selected_table_no,d.seat_id) as t) as totalpax_actual, (select (sum(d.unit_price * d.qty) - sum(d.unit_price * d.qty * (d.disc/100))) as total from sh_t_sub_transactions d where d.is_paid = 0 and d.is_cancel = 0 and d.id_trans = ".$notrans." group by d.id_trans) as total, ((select (sum(d.unit_price * d.qty) - sum(d.unit_price * d.qty * (d.disc/100))) as total from sh_t_sub_transactions d where d.is_paid = 0 and d.is_cancel = 0 and d.id_trans = ".$notrans." group by d.id_trans) * (".$scP."/100)) as sc, ((((select (sum(d.unit_price * d.qty) - sum(d.unit_price * d.qty * (d.disc/100))) as total from sh_t_sub_transactions d where d.is_paid = 0 and d.is_cancel = 0 and d.id_trans = ".$notrans." group by d.id_trans) * (".$scP."/100)) * (".$taxP."/100)) + ((select (sum(d.unit_price * d.qty) - sum(d.unit_price * d.qty * (d.disc/100))) as total from sh_t_sub_transactions d where d.is_paid = 0 and d.is_cancel = 0 and d.id_trans = ".$notrans." group by d.id_trans) * (".$taxP."/100))) as ppn, (select group_concat(xx.id_table) from sh_rel_table xx inner join sh_trans_reltable strx on strx.id_rel_table = xx.id inner join sh_t_transactions tx on tx.id = strx.id_trans where tx.id = ".$notrans.") as no_table, b.bill_printed_count as print_count 
						  from sh_t_sub_transactions a inner join sh_t_transactions b on a.id_trans = b.id 
						  inner join sh_m_customer c on c.id = b.id_customer where a.is_paid = 0 and a.is_cancel = 0 and b.cabang = ".$cabang." and b.id= ".$notrans." and Left(b.create_date, 10) = Left(SYSDATE(), 10) limit 1";
	return $this->db->query($query)->row();
}

public function order_bill_line($cabang,$notrans) 
{
	$query = "select a.item_code,sum(a.qty) as qty, a.description, case when a.unit_price > 0 then a.unit_price else 'FREE' end as unit_price, case when (sum(a.qty*a.unit_price) - sum(a.qty*a.unit_price * (a.disc/100))) > 0 then (sum(a.qty*a.unit_price) - sum(a.qty*a.unit_price * (a.disc/100))) else 'FREE' end as sub_total 
					  from sh_t_transaction_details a 
					  inner join sh_t_transactions b on a.id_trans = b.id 
					  inner join sh_m_customer c on c.id = b.id_customer where a.is_paid = 0 and a.is_cancel = 0 and b.cabang = ".$cabang." and b.id= ".$notrans." group by a.item_code,a.id_trans order by a.id asc";
	return $this->db->query($query)->result();
}

	// 	function hapus_qty($where,$table){
	// 	$this->db->where($where);
	// 	$this->db->delete($table);
	// }

	public function get_keyword($keyword)
			{
				$this->db->select('*');
				$this->db->from('sh_m_item');
				$where = "category IN ('SIAP SAJI','PROSES') and is_active = 1 and sub_category_so !='Chef Recommendation' and sub_category_so != '' and (monitor1 !=0 or monitor2 !=0 or monitor3 !=0 or monitor4 !=0 or monitor5 !=0 or monitor6 !=0 or monitor7 !=0 or monitor8 !=0 or monitor9 !=0 or monitor10 !=0 or monitor11 !=0 or monitor12 !=0 or monitor13 !=0 or monitor14 !=0 or monitor15 !=0 or monitor16 !=0 or monitor17 !=0 or monitor18 !=0 or monitor19 !=0 or monitor20 !=0 or monitor21 !=0 or monitor22 !=0 or monitor23 !=0 or monitor24 !=0 or monitor25 !=0 or monitor26 !=0)";
				$this->db->where($where);
				$this->db->like('description',$keyword);
				return $this->db->get()->result();
			}
	public function get_keyword_minuman($keyword)
			{
				$this->db->select('*');
				$this->db->from('sh_m_item');
				$where = "category = 'MINUMAN' and is_active = 1 and sub_category_so != '' and (monitor1 !=0 or monitor2 !=0 or monitor3 !=0 or monitor4 !=0 or monitor5 !=0 or monitor6 !=0 or monitor7 !=0 or monitor8 !=0 or monitor9 !=0 or monitor10 !=0 or monitor11 !=0 or monitor12 !=0 or monitor13 !=0 or monitor14 !=0 or monitor15 !=0 or monitor16 !=0 or monitor17 !=0 or monitor18 !=0 or monitor19 !=0 or monitor20 !=0 or monitor21 !=0 or monitor22 !=0 or monitor23 !=0 or monitor24 !=0 or monitor25 !=0 or monitor26 !=0)";
				$this->db->where($where);
				$this->db->like('description',$keyword);
				return $this->db->get()->result();
			}
	public function hitungcart($nomeja)
			{
				$date = date('Y-m-d');
				$idc = $this->session->userdata('id');
				$this->db->select('*');
				$this->db->from('sh_cart');
	        	$where = "left(entry_date,10) ='".$date."' and id_customer = '".$idc."' and id_table = '".$nomeja."'";
	        	$this->db->where($where);

				return $this->db->count_all_results();
			}
			public function cart_count($ic,$nomeja)
		{
			$date = date('Y-m-d');
			$uoi = $this->session->userdata('user_order_id');
			$this->db->select('sum(d.qty) as total_qty');
	        $this->db->from('sh_cart d');
	        $where = "left(entry_date,10) ='".$date."' and id_customer = '".$ic."' and id_table = '".$nomeja."' and user_order_id = '".$uoi."'";
	        $this->db->where($where);
	        $this->db->group_by('d.id_trans,d.id_table');      
	        $query = $this->db->get();
	        return $query;
		}
		public function count_cart_qty($ic,$nomeja)
		{
			$date = date('Y-m-d');
			$this->db->select('sum(d.qty) as total_qty_cart');
	        $this->db->from('sh_cart d');
	        $where = "left(entry_date,10) ='".$date."' and id_customer = '".$ic."' and id_table = '".$nomeja."'";
	        $this->db->where($where);
	        $this->db->group_by('d.id_trans,d.id_table');      
	        $query = $this->db->get();
	        return $query;
		}

		public function updatecart($where,$data,$table)
		{
			$this->db->where($where);
			$this->db->update($table,$data);
		}
		public function option($item_code)
		{
				$this->db->select('o.*');
				$this->db->from('sh_m_item_option o');
				$this->db->join('sh_m_item m', 'm.no = o.item_code');
				$this->db->where('o.item_code',$item_code);
				$this->db->where('o.option',1);
				return $this->db->get()->result();
		}
		public function option2($item_code)
		{
				$this->db->select('o.*');
				$this->db->from('sh_m_item_option o');
				$this->db->join('sh_m_item m', 'm.no = o.item_code');
				$this->db->where('o.item_code',$item_code);
				$this->db->where('o.option',2);
				return $this->db->get()->result();
		}
		public function cekpesan($item_code)
		{
		  $id_customer = $this->session->userdata('id');
		  $q1 = "select * from sh_t_transactions where id_customer = '".$id_customer."' limit 1";
			$trans = $this->db->query($q1)->row();
			$notrans = $trans->id;
			$cabang = $trans->cabang;
		  // $wh = "item_code = '".$item_code."' and id_trans = '".$notrans."' and left(created_date,10) = left(sysdate(),10)";
		  // $co = $this->db
  		// 	->where($wh)
  		// 	->get('sh_t_transaction_details')
  		// 	->num_rows();
				// $this->db->select('*');
				// $this->db->from('sh_t_transaction_details');
				// $this->db->where($wh);
				// return $this->db->get()->result();

				$query = "select a.item_code,sum(a.qty) as qty, a.description, case when a.unit_price > 0 then a.unit_price else 'FREE' end as unit_price, case when (sum(a.qty*a.unit_price) - sum(a.qty*a.unit_price * (a.disc/100))) > 0 then (sum(a.qty*a.unit_price) - sum(a.qty*a.unit_price * (a.disc/100))) else 'FREE' end as sub_total 
					  from sh_t_transaction_details a 
					  inner join sh_t_transactions b on a.id_trans = b.id 
					  inner join sh_m_customer c on c.id = b.id_customer where a.is_paid = 0 and a.is_cancel = 0 and b.cabang = ".$cabang." and b.id= ".$notrans." and item_code = '".$item_code."' and id_trans = '".$notrans."' and selforder = 1 and user_order_id = '".$this->session->userdata('user_order_id')."' and left(created_date,10) = left(sysdate(),10) group by a.item_code,a.id_trans order by a.id asc";
			return $this->db->query($query)->result();
		}
		public function cekcart($item_code)
		{
		  $id_customer = $this->session->userdata('id');
		  $q1 = "select * from sh_cart where id_customer = '".$id_customer."' limit 1";
			$trans = $this->db->query($q1)->row();
			$notrans = $trans->id;
			$cabang = $trans->cabang;
		  // $wh = "item_code = '".$item_code."' and id_trans = '".$notrans."' and left(created_date,10) = left(sysdate(),10)";
		  // $co = $this->db
  		// 	->where($wh)
  		// 	->get('sh_t_transaction_details')
  		// 	->num_rows();
				// $this->db->select('*');
				// $this->db->from('sh_t_transaction_details');
				// $this->db->where($wh);
				// return $this->db->get()->result();

				$query = "select a.item_code,sum(a.qty) as qty, a.description, case when a.unit_price > 0 then a.unit_price else 'FREE' end as unit_price, case when (sum(a.qty*a.unit_price) - sum(a.qty*a.unit_price * (a.disc/100))) > 0 then (sum(a.qty*a.unit_price) - sum(a.qty*a.unit_price * (a.disc/100))) else 'FREE' end as sub_total 
					  from sh_cart a 
					  where a.cabang = ".$cabang." and a.item_code = '".$item_code."' and a.id_trans = '".$notrans."' and left(created_date,10) = left(sysdate(),10) group by a.item_code,a.id_trans order by a.id asc";
			return $this->db->query($query)->result();
		}
		public function kode($nomeja)
		{
			$date = date('Y-m-d');
			$this->db->select('RIGHT(u.user_order_id,2) as code', FALSE);
			$where = "left(u.created_date,10) ='".$date."' and u.id_table = '".$nomeja."'";
			$this->db->where($where);
			$this->db->order_by('u.user_order_id','DESC');    
			$this->db->limit(1);    
			$query = $this->db->get('sh_log_user u');  //cek dulu apakah ada sudah ada kode di tabel.    
			if($query->num_rows() <> 0){      
				 //cek kode jika telah tersedia    
				 $data = $query->row();      
				 $kode = intval($data->code) + 1; 
			}
			else{      
				 $kode = 1;  //cek jika kode belum terdapat pada table
			}
			// $tgl = date('dmY'); 
			$batas = str_pad($kode, 4, "0", STR_PAD_LEFT);    
			$kodetampil = $nomeja.$batas;  //format kode
			return $kodetampil;
		}
		// public function get_qty()
		// {
		// 	$ic = $this->session->userdata('id');
		// 	$this->db->select('*');
	 //        $this->db->from('sh_cart');
	 //        $this->db->where('id_customer',$ic);
	              
	 //        $query = $this->db->get()->row('qty');
	 //        return $query;
		// }				
	}
 ?>