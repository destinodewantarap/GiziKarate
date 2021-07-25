<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('Model_app');
        $this->load->library('session');
        $this->load->helper('url');
    }
	public function index(){
		if($this->Model_app->log_id())
            {
              $user = $this->session->userdata('username');
              $ceklevel  = $this->Model_app->level_user($user);
                if ($ceklevel == 1) {
                  redirect('menuAtlet');
            }
		}else{
              $data=array(
                    'title'=>'Login Page'
                );
              $this->load->view('element/css',$data);
              $this->load->view('v_login');
         }
	}
	function cek_login() {
        if(isset($_POST['btn_log'])){
            $this->Model_app->username = $_POST['username'];
            $this->Model_app->password = $_POST['password'];
            if($this->Model_app->ceklogin()==TRUE){
                $this->session->set_userdata('username', $this->Model_app->username);
                $user = $this->Model_app->username;
                $ceklevel  = $this->Model_app->level_user($user);
                if ($ceklevel == 1) {
                  redirect('../Beranda');
                }else if($ceklevel == 2) {
                  redirect('../Beranda'); 
                }else if ($ceklevel == 3) {
                  redirect('../Beranda');
                }
            }else{
              $data=array(
                    'title'=>'Login Page'
                );
                $this->session->set_flashdata('notif', 'USERNAME ATAU PASSWORD YANG DIMASUKKAN SALAH');
                $this->load->view('element/css',$data);
                $this->load->view('v_login');
            }
        }else{
            
              $this->load->view('element/css');
              $this->load->view('v_login');
     	   }
    	
    }
    public function Logout(){
        $this->session->sess_destroy();
        redirect('../Login');
    
    } 
}

