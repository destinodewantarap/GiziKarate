<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model('Model_app');
        $this->load->model('Model_Atlet');
        $this->load->model('Model_Menu');
        $this->load->library('session');
        $this->load->helper('url');

         if(!$this->session->userdata('username')){
            redirect('Login');
        }

    }
	
	public function index(){
        $user = $this->session->userdata('username');
        $ceklevel  = $this->Model_app->level_user($user);
        if ($ceklevel == 3) {
    		$title=array(
                        'title'=>'Hasil',
                        'active_hasil'=>'active'
                    );
            $user = $this->session->userdata('username');
            $get_id = $this->Model_app->id_us($user);

            $data['data'] = $this->Model_Atlet->grafik_user($get_id);   
            $data['data2'] = $this->Model_Atlet->kesimpulan($get_id); 

    		$this->load->view('element/css', $title);
    		$this->load->view('element/v_header');
    		$this->load->view('v_record',$data);
    		$this->load->view('element/v_footer');
        } else if ($ceklevel == 1) {
            $title=array(
                    'title'=>'Beranda',
                    'active_beranda'=>'active'
                );
            $this->load->view('element/css',$title);
            $this->load->view('element/v_headerAdmin');
            $this->load->view('v_berandaAdmin');
            $this->load->view('element/v_footer');
        } else if ($ceklevel == 2) {
            $title=array(
                'title'=>'Beranda',
                'active_beranda'=>'active'
            );
            $this->load->view('element/css',$title);
            $this->load->view('element/v_headerPelatih');
            $this->load->view('v_beranda');
            $this->load->view('element/v_footer');
        }
	}

    function menu(){
        $title=array(
                    'title'=>'Hasil',
                    'active_hasil'=>'active'
                );
        $id = $this->uri->segment(3);
        $data['a_range'] = $this->Model_Menu->ambil_range($id); 
        $data1['menu1'] = $this->Model_Menu->menu1($id);
        $data2['menu2'] = $this->Model_Menu->menu2($id);
        $data3['menu3'] = $this->Model_Menu->menu3($id);
        
        $this->load->view('element/css', $title);
        $this->load->view('element/v_header');
        $this->load->view('v_log_hasil', $data+$data1+$data2+$data3);  
        $this->load->view('element/v_footer');
    }

}
