<?php
class Model_Waktu extends CI_Model {
	public $waktu;

	function get_waktu(){
		$this->db->select('*');
    	$this->db->from('tbl_waktu');
    	$query = $this->db->get();
		return $query->result();
	}

	function get_idwaktu(){
	    $this->db->select('RIGHT(tbl_waktu.id_waktu,1) as kode', FALSE);
	    $this->db->order_by('id_waktu','DESC');    
	    $this->db->limit(1);    
	    $query = $this->db->get('tbl_waktu');     
	    if($query->num_rows() <> 0){      
	  
	     $data = $query->row();      
	     $kode = intval($data->kode) + 1;    
	    }
	    else {      
	     //jika kode belum ada      
	     $kode = 1;    
	    }
	    $kodemax = str_pad($kode, 1, "0", STR_PAD_LEFT); 
	    $kodejadi = "W".$kodemax;  
	    return $kodejadi;
	  }

	function tambah_waktu($data){
	    $this->db->insert('tbl_waktu', $data);
	    return TRUE;
	}

	function update_waktu($data,$id){
	    $this->db->where('id_waktu', $id);
	    $this->db->update('tbl_waktu', $data);
	    
	    return TRUE;
	}

	function delete_waktu($id){
		$this->db->where('id_waktu', $id);
        return $this->db->delete('tbl_waktu');
	}

	function cek_waktu(){
        $sql = sprintf("SELECT COUNT(*) AS hitung FROM tbl_waktu WHERE waktu ='%s'",
            $this->waktu);
        $query = $this->db->query($sql);
        $row  = $query->row_array();
        if ($row['hitung'] > 0){
        	return TRUE;
        }else{
        	return FALSE;
        }
    }
}