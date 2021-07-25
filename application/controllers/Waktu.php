<?php

class Waktu extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model('Model_Waktu');
        $this->load->model('Model_app');

        $this->load->library('session');
        $this->load->helper('url');

        if(!$this->session->userdata('username')){
            redirect('Login');
        }

    }

    public function index(){
        $title=array(
                    'title'=>'Waktu',
                    'active_waktu'=>'active',

                );
        $user = $this->session->userdata('username');
        $ceklevel  = $this->Model_app->level_user($user);
        if ($ceklevel == 1) {
            if($this->session->userdata('username')){
                $kode=array(
                        'kode'=>$this->Model_Waktu->get_idwaktu()
                    ); 

        $data['data'] = $this->Model_Waktu->get_waktu();   
        $this->load->view('element/css',$title);
        $this->load->view('element/v_headerAdmin');
        $this->load->view('v_waktu', $data+$kode);
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

    function tambah_waktu(){
        if(isset($_POST['btn-waktu'])){
            $this->Model_Waktu->waktu = $_POST['waktu'];
            if($this->Model_Waktu->cek_waktu()==TRUE){   

                $this->session->set_flashdata('notif', 'WAKTU SUDAH ADA, GANTI WAKTU LAIN');
                redirect('Waktu');
            }else{
                $id_waktu = $this->input->post('id_waktu');
                $data = array(
                    'id_waktu' => $id_waktu,
                    'waktu' => $this->input->post('waktu')
                );
                
                $this->session->set_flashdata('notif2', 'WAKTU SUDAH TERSIMPAN');
                $this->Model_Waktu->tambah_waktu($data);
               
                redirect('Waktu');              
            }
        }else{
            redirect('Waktu');
       }

    }

    function update_waktu(){
        $id=$this->input->post('id_waktu');
        $data = array(
            'waktu' => $this->input->post('waktu')
        );
        $this->Model_Waktu->update_waktu($data,$id);
        redirect('Waktu');
    }

    function hapus_waktu(){
        $id=$this->input->post('id_waktu');
        $this->Model_Waktu->delete_waktu($id);
        $this->session->set_flashdata('notif3', 'DATA WAKTU SUDAH TERHAPUS');
        redirect('Waktu');
    }
}
    