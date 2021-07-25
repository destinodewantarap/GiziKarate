<?php
class Model_Menu extends CI_Model {
	public $nama_menu;
	public $bahan;
	public $menu;

	function get_tblmenu(){
		$this->db->select('*');
    	$this->db->from('tbl_menu');
    	$query = $this->db->get();
		return $query->result();
	}
	function get_tblwaktu(){
		$this->db->select('*');
    	$this->db->from('tbl_waktu');
    	$query = $this->db->get();
		return $query->result();
	}
	function get_tblrange(){
		$this->db->select('*');
    	$this->db->from('tbl_range');
    	$query = $this->db->get();
		return $query->result();
	}
	function get_tblpaket(){
		$this->db->select('*');
    	$this->db->from('tbl_paket');
    	$query = $this->db->get();
		return $query->result();
	}

	function get_menu(){
    	$query = $this->db->query("SELECT * FROM `detail_menu` JOIN tbl_menu ON detail_menu.id_menu = tbl_menu.id_menu JOIN tbl_range ON detail_menu.id_range = tbl_range.id_range JOIN tbl_paket ON detail_menu.id_paket = tbl_paket.id_paket JOIN tbl_waktu ON detail_menu.id_waktu = tbl_waktu.id_waktu JOIN tbl_bahan ON detail_menu.id_menu = tbl_bahan.id_menu");
		return $query->result();
	}

	function range($id_range){
		$query = $this->db->select('range1 as range')->from('tbl_range')->where('id_range', $id_range)->get();
    	return $query->row()->range;
	}

	function paket($id_paket){
		$query = $this->db->select('paket')->from('tbl_paket')->where('id_paket', $id_paket)->get();
    	return $query->row()->paket;
	}

	function waktu($id_waktu){
		$query = $this->db->select('waktu')->from('tbl_waktu')->where('id_waktu', $id_waktu)->get();
    	return $query->row()->waktu;
	}

	function tambah_menu($data1){
	    $this->db->insert('tbl_menu', $data1);
	    return TRUE;
	}
	function tambah_detail($data2){
	    $this->db->insert('detail_menu', $data2);
	    return TRUE;
	}
	function tambah_bahan($data3){
	    $this->db->insert('tbl_bahan', $data3);
	    return TRUE;
	}

	function delete_menu($id){
		$this->db->where('id_menu', $id);
        return $this->db->delete('tbl_menu');
	}
	
	function get_edit_menu($id_menu1){
		$query = $this->db->query("SELECT * FROM `detail_menu` JOIN tbl_menu ON detail_menu.id_menu = tbl_menu.id_menu JOIN tbl_range ON detail_menu.id_range = tbl_range.id_range JOIN tbl_paket ON detail_menu.id_paket = tbl_paket.id_paket JOIN tbl_waktu ON detail_menu.id_waktu = tbl_waktu.id_waktu JOIN tbl_bahan ON detail_menu.id_menu = tbl_bahan.id_menu WHERE tbl_menu.id_menu='$id_menu1'");
		return $query->result_array();
	}

	function update_menu($data = array(),$id_menu1){
		$this->db->where('id_menu',$id_menu1);
		return $this->db->update('detail_menu',$data);
	}

	function update_nama_menu($data = array(),$id_menu1){
		$this->db->where('id_menu',$id_menu1);
		return $this->db->update('tbl_menu',$data);
	}

	function update_menu_bahan($data = array(),$id_menu1){
		$this->db->where('id_menu',$id_menu1);
		return $this->db->update('tbl_bahan',$data);
	}

	function get_idmenu(){
	    $this->db->select('RIGHT(tbl_menu.id_menu,3) as kode', FALSE);
	    $this->db->order_by('id_menu','DESC');    
	    $this->db->limit(1);    
	    $query = $this->db->get('tbl_menu');     
	    if($query->num_rows() <> 0){      
	  
	     $data = $query->row();      
	     $kode = intval($data->kode) + 1;    
	    }
	    else {      
	     //jika kode belum ada      
	     $kode = 1;    
	    }
	    $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT); 
	    $kodejadi = "Me".$kodemax;  
	    return $kodejadi;
	  }

	function cek_menu(){
        $sql = sprintf("SELECT COUNT(*) AS hitung FROM tbl_menu WHERE nama_menu='%s'",
            $this->nama_menu);
        $query = $this->db->query($sql);
        $row  = $query->row_array();
        return $row['hitung'] == 1;
    }

    function cek_bahan(){
        $sql = sprintf("SELECT COUNT(*) AS hitung FROM tbl_bahan WHERE bahan ='%s' AND id_menu = '%s'",
            $this->bahan,
            $this->menu);
        $query = $this->db->query($sql);
        $row  = $query->row_array();
        if ($row['hitung'] > 0){
        	return TRUE;
        }else{
        	return FALSE;
        }
    }

    function ambil_range($id){
    	$query = $this->db->query("SELECT DISTINCT tbl_range.id_range, range1,range2 FROM tbl_kesimpulan JOIN detail_menu ON detail_menu.id_range = tbl_kesimpulan.id_range JOIN tbl_paket ON detail_menu.id_paket = tbl_paket.id_paket JOIN tbl_waktu ON tbl_waktu.id_waktu = detail_menu.id_waktu JOIN tbl_menu ON tbl_menu.id_menu = detail_menu.id_menu JOIN tbl_bahan ON tbl_bahan.id_menu = tbl_menu.id_menu JOIN tbl_range ON tbl_range.id_range = detail_menu.id_range WHERE id_user='$id'");
    	return $query->result();
    }

    function menu1($id){
    	$query = $this->db->query("SELECT * FROM tbl_kesimpulan JOIN detail_menu ON detail_menu.id_range = tbl_kesimpulan.id_range JOIN tbl_paket ON detail_menu.id_paket = tbl_paket.id_paket JOIN tbl_waktu ON tbl_waktu.id_waktu = detail_menu.id_waktu JOIN tbl_menu ON tbl_menu.id_menu = detail_menu.id_menu JOIN tbl_bahan ON tbl_bahan.id_menu = tbl_menu.id_menu JOIN tbl_range ON tbl_range.id_range = detail_menu.id_range WHERE id_user='$id' AND tbl_paket.id_paket = 'P1' ");
    	return $query->result();
    }
    function menu2($id){
    	$query = $this->db->query("SELECT * FROM tbl_kesimpulan JOIN detail_menu ON detail_menu.id_range = tbl_kesimpulan.id_range JOIN tbl_paket ON detail_menu.id_paket = tbl_paket.id_paket JOIN tbl_waktu ON tbl_waktu.id_waktu = detail_menu.id_waktu JOIN tbl_menu ON tbl_menu.id_menu = detail_menu.id_menu JOIN tbl_bahan ON tbl_bahan.id_menu = tbl_menu.id_menu JOIN tbl_range ON tbl_range.id_range = detail_menu.id_range WHERE id_user='$id' AND tbl_paket.id_paket = 'P2' ");
    	return $query->result();
    }
    function menu3($id){
    	$query = $this->db->query("SELECT * FROM tbl_kesimpulan JOIN detail_menu ON detail_menu.id_range = tbl_kesimpulan.id_range JOIN tbl_paket ON detail_menu.id_paket = tbl_paket.id_paket JOIN tbl_waktu ON tbl_waktu.id_waktu = detail_menu.id_waktu JOIN tbl_menu ON tbl_menu.id_menu = detail_menu.id_menu JOIN tbl_bahan ON tbl_bahan.id_menu = tbl_menu.id_menu JOIN tbl_range ON tbl_range.id_range = detail_menu.id_range WHERE id_user='$id' AND tbl_paket.id_paket = 'P3' ");
    	return $query->result();
    }


    function tampil_dikit(){    
	  $this->load->library('pagination');
	  $query = "SELECT * FROM `detail_menu` JOIN tbl_menu ON detail_menu.id_menu = tbl_menu.id_menu JOIN tbl_range ON detail_menu.id_range = tbl_range.id_range JOIN tbl_paket ON detail_menu.id_paket = tbl_paket.id_paket JOIN tbl_waktu ON detail_menu.id_waktu = tbl_waktu.id_waktu JOIN tbl_bahan ON tbl_menu.id_menu = tbl_bahan.id_menu"; 
	  $config['base_url'] = base_url('menuAtlet/index');   
	  $config['total_rows'] = $this->db->query($query)->num_rows();
	  $config['per_page'] = 5;
	  $config['uri_segment'] = 3;    
	  $config['num_links'] = 3;
	  $config['full_tag_open']   = '<ul class="pagination pagination-sm m-t-xs m-b-xs">';        
	  $config['full_tag_close']  = '</ul>';                
	  $config['first_link']      = 'First';         
	  $config['first_tag_open']  = '<li>';        
	  $config['first_tag_close'] = '</li>';                
	  $config['last_link']       = 'Last';         
	  $config['last_tag_open']   = '<li>';        
	  $config['last_tag_close']  = '</li>';                
	  $config['next_link']       = ' <i class="glyphicon glyphicon-menu-right"></i> ';         
	  $config['next_tag_open']   = '<li>';        
	  $config['next_tag_close']  = '</li>';                
	  $config['prev_link']       = ' <i class="glyphicon glyphicon-menu-left"></i> ';         
	  $config['prev_tag_open']   = '<li>';        
	  $config['prev_tag_close']  = '</li>';                
	  $config['cur_tag_open']    = '<li class="active"><a href="#">';        
	  $config['cur_tag_close']   = '</a></li>';                 
	  $config['num_tag_open']    = '<li>';       
	  $config['num_tag_close']   = '</li>';   
	  $this->pagination->initialize($config);  
	  $page = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;   
	  $query .= " LIMIT ".$page.", ".$config['per_page'];        
	  $data['limit'] = $config['per_page'];    
	  $data['total_rows'] = $config['total_rows'];    
	  $data['pagination'] = $this->pagination->create_links();  
	  $data['data'] = $this->db->query($query)->result();        
	  return $data;  
  }

}