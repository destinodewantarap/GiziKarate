<?php

class MenuAtlet extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model('Model_Menu');
        $this->load->model('Model_app');

        $this->load->library('session');
        $this->load->helper('url');

        if(!$this->session->userdata('username')){
            redirect('Login');
        }

    }
    
	public function index(){
        $this->session->set_flashdata('paket', '');
        $this->session->set_flashdata('waktu', '');
        $this->session->set_flashdata('range', '');
        $title=array(
                    'title'=>'MenuAtlet',
                    'active_menu'=>'active',

                );
        $user = $this->session->userdata('username');
        $ceklevel  = $this->Model_app->level_user($user);
        if ($ceklevel == 1) {
    	   if($this->session->userdata('username')){

            if(isset($_GET['range']) || isset($_GET['paket']) || isset($_GET['waktu'])){ 
                $kode=array(
                    'kode'=>$this->Model_Menu->get_idmenu()
                ); 


                $data_menu['option_range'] = $this->Model_Menu->get_tblrange();
                $data_menu['option_paket'] = $this->Model_Menu->get_tblpaket();
                $data_menu['option_waktu'] = $this->Model_Menu->get_tblwaktu();
                $data_menu['option_menu'] = $this->Model_Menu->get_tblmenu();

                $range = $_GET['range'];
                $paket = $_GET['paket'];
                $waktu = $_GET['waktu'];
                $pkt = "";
                $wkt = "";
                $rng = "";
                if($_GET['paket'] != ""){
                    if($_GET['range'] != "" || $_GET['waktu'] != ""){
                        // $ket = $pkt;
                        $pkt = "AND tbl_paket.id_paket = '$paket'";
                        $getPaket = $this->db->query("SELECT paket FROM tbl_paket WHERE id_paket = '$paket'")->result();
                        foreach ($getPaket as $row) {
                            $pak = $row->paket;
                        }
                        $this->session->set_flashdata('paket', $pak);


                    }else {
                        // $ket = $pkt;
                        $pkt = "tbl_paket.id_paket = '$paket'";
                        $getPaket = $this->db->query("SELECT paket FROM tbl_paket WHERE id_paket = '$paket'")->result();
                        foreach ($getPaket as $row) {
                            $pak = $row->paket;
                        }
                        $this->session->set_flashdata('paket', $pak);
                    }
                }
                if($_GET['waktu'] != ""){
                    if($_GET['range'] != ""){
                        // $ket = $wkt;
                        $wkt = "AND tbl_waktu.id_waktu = '$waktu'";
                        $getWaktu = $this->db->query("SELECT waktu FROM tbl_waktu WHERE id_waktu = '$waktu'")->result();
                        foreach ($getWaktu as $row) {
                            $wak = $row->waktu;
                        }
                        $this->session->set_flashdata('waktu', $wak);
                    }
                    else {
                        // $ket = $wkt;
                        $wkt = "tbl_waktu.id_waktu = '$waktu'";
                        $getWaktu = $this->db->query("SELECT waktu FROM tbl_waktu WHERE id_waktu = '$waktu'")->result();
                        foreach ($getWaktu as $row) {
                            $wak = $row->waktu;
                        }
                        $this->session->set_flashdata('waktu', $wak);
                    }
                }
                if($_GET['range'] != ""){
                    // $ket = $rng;
                    $rng = "tbl_range.id_range = '$range'";
                    $getRange = $this->db->query("SELECT range1, range2 FROM tbl_range WHERE id_range = '$range'")->result();
                    foreach ($getRange as $row) {
                        $ran1 = $row->range1;
                        $ran2 = $row->range2;
                    }
                    $this->session->set_flashdata('range', $ran1.'-'.$ran2);
                }


                $tampil=  $this->db->query("SELECT * FROM `detail_menu` JOIN tbl_menu ON detail_menu.id_menu = tbl_menu.id_menu JOIN tbl_range ON detail_menu.id_range = tbl_range.id_range JOIN tbl_paket ON detail_menu.id_paket = tbl_paket.id_paket JOIN tbl_waktu ON detail_menu.id_waktu = tbl_waktu.id_waktu JOIN tbl_bahan ON detail_menu.id_menu = tbl_bahan.id_menu WHERE $rng $wkt $pkt")->result();

            // echo $filter;
            //     $data['ket'] = $ket;
                $data['data'] = $tampil;
                $this->load->view('element/css', $title);
                $this->load->view('element/v_headerAdmin');
                $this->load->view('v_menu', $data+$data_menu+$kode);   
                $this->load->view('element/v_footer');
                
            }else{
                $kode=array(
                    'kode'=>$this->Model_Menu->get_idmenu()
                ); 
                // $data['ket'] = $ket;
                $data['data'] = $this->Model_Menu->get_menu();
                $data_menu['option_range'] = $this->Model_Menu->get_tblrange();
                $data_menu['option_paket'] = $this->Model_Menu->get_tblpaket();
                $data_menu['option_waktu'] = $this->Model_Menu->get_tblwaktu();
                $data_menu['option_menu'] = $this->Model_Menu->get_tblmenu();

                $this->load->view('element/css', $title);
                $this->load->view('element/v_headerAdmin');
                $this->load->view('v_menu',$data+$data_menu+$kode);   
                $this->load->view('element/v_footer');
            }
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

    function tambah_menu() {
        if(isset($_POST['btn-menu'])){
            $this->Model_Menu->nama_menu = $_POST['nama_menu'];
            if($this->Model_Menu->cek_menu()==TRUE){   

                $this->session->set_flashdata('notif', 'NAMA MENU SUDAH ADA, GANTI NAMA MENU LAIN');
                redirect('MenuAtlet');
            }else{
                $id_menu = $this->input->post('id_menu');    
                $data1 = array(
                    'id_menu' => $id_menu,
                    'nama_menu' => $this->input->post('nama_menu')
                );
                $this->session->set_flashdata('notif2', 'NAMA MENU SUDAH TERSIMPAN');
                $this->Model_Menu->tambah_menu($data1);
               
                redirect('MenuAtlet');              
            }
        }else{
            redirect('MenuAtlet');
       }
        
    }
    public function tambah_detail(){
        $id_menu = $this->input->post('id_menu');
        $data2 = array(
            'id_menu' => $id_menu,
            'id_range' => $this->input->post('id_range'),
            'id_paket' => $this->input->post('id_paket'),
            'id_waktu' => $this->input->post('id_waktu')
        );
        $this->Model_Menu->tambah_detail($data2);
        redirect('MenuAtlet');

    }

    public function tambah_bahan(){
        if(isset($_POST['btn-bahan'])){
            $this->Model_Menu->menu = $_POST['id_menu'];
            $this->Model_Menu->bahan = $_POST['bahan'];
            if($this->Model_Menu->cek_bahan()==TRUE){
                $this->session->set_flashdata('notif', 'NAMA BAHAN SUDAH ADA, GANTI NAMA BAHAN LAIN');
                redirect('MenuAtlet');
            }else{
                
                $id_menu = $this->input->post('id_menu');    
                $data3 = array(
                    'id_menu' => $id_menu,
                    'bahan' => $this->input->post('bahan'),
                    'berat' => $this->input->post('berat'),
                    'energi' => $this->input->post('energi'),
                    'protein' => $this->input->post('protein'),
                    'lemak' => $this->input->post('lemak'),
                    'kh' => $this->input->post('kh')
                );
                $this->session->set_flashdata('notif2', 'BAHAN SUDAH TERSIMPAN');
                $this->Model_Menu->tambah_bahan($data3);
               
                redirect('MenuAtlet');

              
            }
        }else{
            redirect('MenuAtlet');
           }
        
    }

    function edit_menu(){
        $id_menu1 = $this->uri->segment(3);
        $title=array(
                    'title'=>'MenuAtlet',
                    'active_menu'=>'active',
                );
        $data = array(
            'menu' => $this->Model_Menu->get_edit_menu($id_menu1),
        );
        $this->load->view('element/css',$title);
        $this->load->view('element/v_headerAdmin');
        $this->load->view("v_editmenu", $data);
        $this->load->view('element/v_footer');
    }

    function update_menu(){

        $id_menu1 = $this->input->post('id_menu');
        $insert1 = $this->Model_Menu->update_nama_menu(array(
                'id_menu' => $this->input->post('id_menu'),
                'nama_menu' => $this->input->post('nama_menu')
            ), $id_menu1);
        $insert2 = $this->Model_Menu->update_menu_bahan(array(
                'id_menu' => $this->input->post('id_menu'),
                'bahan' => $this->input->post('bahan'),
                'berat' => $this->input->post('berat'),
                'energi' => $this->input->post('energi'),
                'protein' => $this->input->post('protein'),
                'lemak' => $this->input->post('lemak'),
                'kh' => $this->input->post('kh')
            ), $id_menu1);

        redirect('MenuAtlet');
    }

    function hapus_menu(){
        $id=$this->input->post('id_menu');
        $this->Model_Menu->delete_menu($id);
        $this->session->set_flashdata('notif3', 'DATA MENU SUDAH TERHAPUS');
        redirect('MenuAtlet');
    }



}
