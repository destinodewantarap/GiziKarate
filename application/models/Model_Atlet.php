<?php
class Model_Atlet extends CI_Model {

	function tampil_atlet(){
		$this->db->select('*');
    	$this->db->from('login');
    	$this->db->join('tbl_uji', 'tbl_uji.id_login = login.id_login');
    	$query = $this->db->get();
		return $query->result();
	}
	function kesimpulan($get_id){
		$query = $this->db->query("SELECT * FROM tbl_kesimpulan JOIN login ON tbl_kesimpulan.id_login = login.id_login JOIN tbl_uji ON tbl_uji.id_user=tbl_kesimpulan.id_user WHERE tbl_kesimpulan.id_login='$get_id'");
		return $query->result();
	}

	function tampil_nama(){
		$query = $this->db->query("SELECT DISTINCT login.id_login, login.nama_lengkap FROM login JOIN tbl_uji ON tbl_uji.id_login = login.id_login");
		return $query->result();
	}

	function nama_user($get_id){
		$query = $this->db->query("SELECT DISTINCT login.nama_lengkap FROM login JOIN tbl_uji ON login.id_login = tbl_uji.id_login WHERE tbl_uji.id_login= '$get_id'");
		return $query->result();
		 
	}
	function grafik_user($get_id){
		$query = $this->db->query("SELECT * FROM tbl_uji JOIN login ON tbl_uji.id_login = login.id_login WHERE tbl_uji.id_login= '$get_id' ");

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}

	}


}