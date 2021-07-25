<?php

class Paket extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model('Model_Paket');
        $this->load->model('Model_app');

        $this->load->library('session');
        $this->load->helper('url');

        if(!$this->session->userdata('username')){
            redirect('Login');
        }

    }

    public function index(){
        $title=array(
                    'title'=>'Paket',
                    'active_paket'=>'active',

                );
        $user = $this->session->userdata('username');
        $ceklevel  = $this->Model_app->level_user($user);
        if ($ceklevel == 1) {
            if($this->session->userdata('username')){
                $kode=array(
                    'kode'=>$this->Model_Paket->get_idpaket()
                ); 

        $data['data'] = $this->Model_Paket->get_paket();   
        $this->load->view('element/css',$title);
        $this->load->view('element/v_headerAdmin');
        $this->load->view('v_paket', $data+$kode);
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
         } else if ($ceklevel == 3){
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

    function tambah_paket(){
        if(isset($_POST['btn-paket'])){
            $this->Model_Paket->paket = $_POST['paket'];
            if($this->Model_Paket->cek_paket()==TRUE){   

                $this->session->set_flashdata('notif', 'NAMA PAKET SUDAH ADA, GANTI NAMA PAKET LAIN');
                redirect('Paket');
            }else{
                $id_paket = $this->input->post('id_paket');
                $data = array(
                    'id_paket' => $id_paket,
                    'paket' => $this->input->post('paket')
                );
                
                $this->session->set_flashdata('notif2', 'NAMA PAKET SUDAH TERSIMPAN');
                $this->Model_Paket->tambah_paket($data);
               
                redirect('Paket');              
            }
        }else{
            redirect('Paket');
       }
    }

    function update_paket(){
        $id=$this->input->post('id_paket');
        $data = array(
            'paket' => $this->input->post('paket')
        );
        $this->Model_Paket->update_paket($data,$id);
        redirect('Paket');
    }

    function hapus_paket(){
        $id=$this->input->post('id_paket');
        $this->Model_Paket->delete_paket($id);
        $this->session->set_flashdata('notif3', 'DATA PAKET SUDAH TERHAPUS');
        redirect('Paket');
    }
}
    