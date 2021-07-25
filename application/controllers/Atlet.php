<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atlet extends CI_Controller {

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
        if ($ceklevel == 2) {
            $title=array(
                    'title'=>'Atlet',
                    'active_atlet'=>'active'
                );
            $data['data'] = $this->Model_Atlet->tampil_nama();
            $this->load->view('element/css',$title);
            $this->load->view('element/v_headerPelatih');
            $this->load->view('v_atlet',$data);
            $this->load->view('element/v_footer');
        } else if ($ceklevel == 1) {
            $title=array(
                'title'=>'Beranda',
                'active_beranda'=>'active'
            );
            $this->load->view('element/css',$title);
            $this->load->view('element/v_headerAdmin');
            $this->load->view('v_beranda');
            $this->load->view('element/v_footer');
        } else if ($ceklevel == 3) {
            $title=array(
                'title'=>'Beranda',
                'active_beranda'=>'active'
            );
            $this->load->view('element/css',$title);
            $this->load->view('element/v_header');
            $this->load->view('v_beranda');
            $this->load->view('element/v_footer');
        }
	}

    function grafik(){
        $user = $this->session->userdata('username');
        $ceklevel  = $this->Model_app->level_user($user);
        if ($ceklevel == 2) {
            $title=array(
                    'title'=>'Atlet',
                    'active_atlet'=>'active'
                );
            $get_id = $this->uri->segment(3);
            $data['data'] = $this->Model_Atlet->grafik_user($get_id);
            $data['data2'] = $this->Model_Atlet->nama_user($get_id);   
            $this->load->view('element/css', $title);
            $this->load->view('element/v_headerPelatih');
            $this->load->view('v_user',$data);
            $this->load->view('element/v_footer');
        } else if ($ceklevel == 1) {
            $title=array(
                'title'=>'Beranda',
                'active_beranda'=>'active'
            );
            $this->load->view('element/css',$title);
            $this->load->view('element/v_headerAdmin');
            $this->load->view('v_beranda');
            $this->load->view('element/v_footer');
        } else if ($ceklevel == 3) {
            $title=array(
                'title'=>'Beranda',
                'active_beranda'=>'active'
            );
            $this->load->view('element/css',$title);
            $this->load->view('element/v_header');
            $this->load->view('v_beranda');
            $this->load->view('element/v_footer');
        }
    }
}
