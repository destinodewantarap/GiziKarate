<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GrafikUser extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model('Model_app');
        $this->load->model('Model_Atlet');
        $this->load->library('session');
        $this->load->helper('url');

        if(!$this->session->userdata('username')){
            redirect('Login');
        }

    }
	
	public function index(){
        $user = $this->session->userdata('username');
        $ceklevel  = $this->Model_app->level_user($user);
        if ($ceklevel == 1) {
            $title=array(
                'title'=>'Beranda',
                'active_beranda'=>'active'
            );
            $this->load->view('element/css',$title);
            $this->load->view('element/v_headerAdmin');
            $this->load->view('v_beranda');
            $this->load->view('element/v_footer');
        } else {
            $title=array(
                    'title'=>'Grafik',
                    'active_grafik'=>'active'
                );

            $user = $this->session->userdata('username');
            $get_id = $this->Model_app->id_us($user);
            $data['data'] = $this->Model_Atlet->grafik_user($get_id);   
            $data['data2'] = $this->Model_Atlet->nama_user($get_id); 

            $cek = $this->db->query("SELECT * FROM  tbl_uji WHERE id_login='$get_id' ")->num_rows();  
            if ($cek>0) {
                $this->load->view('element/css',$title);
                $this->load->view('element/v_header');
                $this->load->view('v_user',$data);
                $this->load->view('element/v_footer');
            } else {
                $this->load->view('element/css',$title);
                $this->load->view('element/v_header');
                $this->load->view('v_user2');
                $this->load->view('element/v_footer');
            }
        }
	}
}
