<?php

class Range extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model('Model_Range');
        $this->load->model('Model_app');

        $this->load->library('session');
        $this->load->helper('url');

        if(!$this->session->userdata('username')){
            redirect('Login');
        }

    }

    public function index(){
        $title=array(
                    'title'=>'Range',
                    'active_range'=>'active',

                );
        $user = $this->session->userdata('username');
        $ceklevel  = $this->Model_app->level_user($user);
        if ($ceklevel == 1) {
            if($this->session->userdata('username')){
                $kode=array(
                        'kode'=>$this->Model_Range->get_idrange()
                    ); 

        $data['data'] = $this->Model_Range->get_range();   
        $this->load->view('element/css',$title);
        $this->load->view('element/v_headerAdmin');
        $this->load->view('v_range', $data+$kode);
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

    function tambah_range(){
        if(isset($_POST['btn-range'])){
            $this->Model_Range->range1 = $_POST['range1'];
            $this->Model_Range->range2 = $_POST['range2'];
            if($this->Model_Range->cek_range()==TRUE){   

                $this->session->set_flashdata('notif', 'RANGE SUDAH ADA, GANTI RANGE LAIN');
                redirect('Range');
            }else{
                $id_range = $this->input->post('id_range');    
                $data = array(
                    'id_range' => $id_range,
                    'range1' => $this->input->post('range1'),
                    'range2' => $this->input->post('range2')
                );
                $this->session->set_flashdata('notif2', 'RANGE SUDAH TERSIMPAN');
                $this->Model_Range->tambah_range($data);
               
                redirect('Range');              
            }
        }else{
            redirect('Range');
       }

    }

    function update_range(){
        $id=$this->input->post('id_range');
        $data = array(
            'range1' => $this->input->post('range1'),
            'range2' => $this->input->post('range2')
        );
        $this->Model_Range->update_range($data,$id);
        redirect('Range');
    }

    function hapus_range(){
        $id=$this->input->post('id_range');
        $this->Model_Range->delete_range($id);
        $this->session->set_flashdata('notif3', 'DATA RANGE SUDAH TERHAPUS');
        redirect('Range');
    }
}
    