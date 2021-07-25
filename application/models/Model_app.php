<?php
class Model_app extends CI_Model{
    public $username;
    public $password;
    
    // =============================================LOGIN=======================================================
    public function log_id(){
        return $this->session->userdata('username');
    }
    
    function ceklogin(){
        $sql = sprintf("SELECT COUNT(*) AS hitung FROM login WHERE username='%s' AND password='%s'",
            $this->username,
            $this->password);
        $query = $this->db->query($sql);
        $row  = $query->row_array();
        return $row['hitung'] == 1;
    }
    
    function level_user($user){
        $query = $this->db->select('level as level')->from('login')->where('username', $user)->get();
        return $query->row()->level;
    }

    function id_us($user){        
        $query = $this->db->select('id_login as id')->from('login')->where('username', $user)->get();
        return $query->row()->id;
    }


    function ambil_id(){
        $this->db->select('id_login');
        $this->db->from('login');
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get();
        return $query->result();
    }

}