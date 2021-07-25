<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model('Model_Pendaftaran');
        $this->load->model('Model_app');

        $this->load->library('session');
        $this->load->helper('url');

        //  if(!$this->session->userdata('username')){
        //     redirect('Login');
        // }

    }
	
	public function index(){
		$title=array(
                    'title'=>'Pendaftaran',
                    'active_pendaftaran'=>'active'
                );

		$this->load->view('element/css',$title);
		$this->load->view('v_pendaftaran');
		$this->load->view('element/v_footer');
	}

    public function inputData(){

        if(isset($_POST['daftar'])){
            $this->Model_Pendaftaran->user = $_POST['user'];
            if($this->Model_Pendaftaran->cek_daftar()==TRUE){   

                $this->session->set_flashdata('notif', 'USERNAME SUDAH ADA, GANTI YANG LAIN');
                redirect('Pendaftaran');
            }else{
                $id = $this->Model_Pendaftaran->get_id();
                $data = array(
                    'id_login' => $id,
                    'username' => $this->input->post('user'),
                    'password' => $this->input->post('pass'),
                    'nama_lengkap' => $this->input->post('nama_lengkap'),
                    'alamat' => $this->input->post('alamat'),
                    'no_telp' => $this->input->post('no_telp'),
                    'level' => $this->input->post('level')
                );
                $this->Model_Pendaftaran->daftar($data);
               
                redirect('Login');              
            }
        } else {redirect('Pendaftaran');}
    }
}
