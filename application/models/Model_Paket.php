<?php
class Model_Paket extends CI_Model {
	public $paket;

	function get_paket(){
		$this->db->select('*');
    	$this->db->from('tbl_paket');
    	$query = $this->db->get();
		return $query->result();
	}

	function get_idpaket(){
	    $this->db->select('RIGHT(tbl_paket.id_paket,1) as kode', FALSE);
	    $this->db->order_by('id_paket','DESC');    
	    $this->db->limit(1);    
	    $query = $this->db->get('tbl_paket');     
	    if($query->num_rows() <> 0){      
	  
	     $data = $query->row();      
	     $kode = intval($data->kode) + 1;    
	    }
	    else {      
	     //jika kode belum ada      
	     $kode = 1;    
	    }
	    $kodemax = str_pad($kode, 1, "0", STR_PAD_LEFT); 
	    $kodejadi = "P".$kodemax;  
	    return $kodejadi;
	  }

	function tambah_paket($data){
	    $this->db->insert('tbl_paket', $data);
	    return TRUE;
	}

	function update_paket($data,$id){
	    $this->db->where('id_paket', $id);
	    $this->db->update('tbl_paket', $data);
	    
	    return TRUE;
	}

	function delete_paket($id){
		$this->db->where('id_paket', $id);
        return $this->db->delete('tbl_paket');
	}

	function cek_paket(){
        $sql = sprintf("SELECT COUNT(*) AS hitung FROM tbl_paket WHERE paket ='%s'",
            $this->paket);
        $query = $this->db->query($sql);
        $row  = $query->row_array();
        if ($row['hitung'] > 0){
        	return TRUE;
        }else{
        	return FALSE;
        }
    }
}