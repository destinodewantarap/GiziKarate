<?php
class Model_Pendaftaran extends CI_Model {
	public $user;

	function get_id(){
	    $this->db->select('RIGHT(login.id_login,3) as kode', FALSE);
	    $this->db->order_by('id_login','DESC');    
	    $this->db->limit(1);    
	    $query = $this->db->get('login');     
	    if($query->num_rows() <> 0){      
	  
	     $data = $query->row();      
	     $kode = intval($data->kode) + 1;    
	    }
	    else {      
	     //jika kode belum ada      
	     $kode = 1;    
	    }
	    $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT); 
	    $kodejadi = "US".$kodemax;  
	    return $kodejadi;
	  }

	function daftar($data){
		$this->db->insert('login', $data);
	    return TRUE;
	}

	function cek_daftar(){
        $sql = sprintf("SELECT COUNT(*) AS hitung FROM login WHERE username ='%s'",
            $this->user);
        $query = $this->db->query($sql);
        $row  = $query->row_array();
        if ($row['hitung'] > 0){
        	return TRUE;
        }else{
        	return FALSE;
        }
    }
}