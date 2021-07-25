<?php
class Model_Range extends CI_Model {
	public $range1;
	public $range2;

	function get_range(){
		$this->db->select('*');
    	$this->db->from('tbl_range');
    	$query = $this->db->get();
		return $query->result();
	}

	function get_idrange(){
	    $this->db->select('RIGHT(tbl_range.id_range,1) as kode', FALSE);
	    $this->db->order_by('id_range','DESC');    
	    $this->db->limit(1);    
	    $query = $this->db->get('tbl_range');     
	    if($query->num_rows() <> 0){      
	  
	     $data = $query->row();      
	     $kode = intval($data->kode) + 1;    
	    }
	    else {      
	     //jika kode belum ada      
	     $kode = 1;    
	    }
	    $kodemax = str_pad($kode, 1, "0", STR_PAD_LEFT); 
	    $kodejadi = "M".$kodemax;  
	    return $kodejadi;
	  }

	function tambah_range($data){
	    $this->db->insert('tbl_range', $data);
	    return TRUE;
	}

	function update_range($data,$id){
	    $this->db->where('id_range', $id);
	    $this->db->update('tbl_range', $data);
	    
	    return TRUE;
	}

	function delete_range($id){
		$this->db->where('id_range', $id);
        return $this->db->delete('tbl_range');
	}

	function cek_range(){
        $sql = sprintf("SELECT COUNT(*) AS hitung FROM tbl_range WHERE range1 ='%s' AND range2 = '%s'",
            $this->range1,
            $this->range2);
        $query = $this->db->query($sql);
        $row  = $query->row_array();
        if ($row['hitung'] > 0){
        	return TRUE;
        }else{
        	return FALSE;
        }
    }
}