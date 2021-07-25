<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model('Model_app');

        $this->load->library('session');
        $this->load->helper('url');

        if(!$this->session->userdata('username')){
            redirect('Login');
        }

    }
	
	public function index(){
		$title=array(
                    'title'=>'Beranda',
                    'active_beranda'=>'active'
                );

		$user = $this->session->userdata('username');
        $ceklevel  = $this->Model_app->level_user($user);
        if ($ceklevel == 1) {
            if($this->session->userdata('username')){

        
        $this->load->view('element/css',$title);
        $this->load->view('element/v_headerAdmin');
        $this->load->view('v_berandaAdmin');
        $this->load->view('element/v_footer');

        }else{
            redirect('Login');
           }
         }else if ($ceklevel == 2) {
            $title=array(
                'title'=>'Beranda',
                'active_beranda'=>'active'
            );
            $this->load->view('element/css',$title);
			$this->load->view('element/v_headerPelatih');
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
