<?php
class Model_Perhitungan extends CI_Model {

	function get_user(){
    	$this->db->select('*');
    	$this->db->from('tbl_pelatihan');
    	$query = $this->db->get();
		return $query->result();
	}
	function tambah($data) {
		$this->db->insert('tbl_uji', $data);
		return TRUE;
		// return $this->db->insert_id();
	}

	function tambah_demo($data) {
		$this->db->insert('tbl_demo', $data);
		return TRUE;
		// return $this->db->insert_id();
	}

	function get_berat(){
		$this->db->select('bb');
		$this->db->from('tbl_pelatihan');
		$query = $this->db->get();
		return $query->result();
	}

	function tampil($data){
		$this->db->select('*');
		$this->db->from('tbl_pelatihan, tbl_uji');
		$query = $this->db->get();
		return $query->result();
	}

	function get_id(){
	    $this->db->select('RIGHT(tbl_uji.id_user,3) as kode', FALSE);
	    $this->db->order_by('id_user','DESC');    
	    $this->db->limit(1);    
	    $query = $this->db->get('tbl_uji');     
	    if($query->num_rows() <> 0){      
	  
	     $data = $query->row();      
	     $kode = intval($data->kode) + 1;    
	    }
	    else {      
	     //jika kode belum ada      
	     $kode = 1;    
	    }
	    $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT); 
	    $kodejadi = "ID".$kodemax;  
	    return $kodejadi;
	  }

	  function id_demo(){
	    $this->db->select('RIGHT(tbl_demo.id,3) as kode', FALSE);
	    $this->db->order_by('id','DESC');    
	    $this->db->limit(1);    
	    $query = $this->db->get('tbl_demo');     
	    if($query->num_rows() <> 0){      
	  
	     $data = $query->row();      
	     $kode = intval($data->kode) + 1;    
	    }
	    else {      
	     //jika kode belum ada      
	     $kode = 1;    
	    }
	    $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT); 
	    $kodejadi = "DE".$kodemax;  
	    return $kodejadi;
	  }

	  function get_data($id){
	    $this->db->select('*');
	    $this->db->from('tbl_uji');
	    $this->db->where('id_user', $id);
	    $query = $this->db->get();
	    return $query->result();
	  }

	  function get_demo($id){
	    $this->db->select('*');
	    $this->db->from('tbl_demo');
	    $this->db->where('id', $id);
	    $query = $this->db->get();
	    return $query->result();
	  }


}