<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model('Model_Perhitungan');
        $this->load->model('Model_app');

        $this->load->library('session');
        $this->load->helper('url');


    }
    public function index(){
        
        $this->load->view('element/css');
        $this->load->view('v_perhitungan2');    
        $this->load->view('element/v_footer');
    }

    public function status_gizi(){
        if (isset($_POST['hitung_status'])) {
            $id = $this->Model_Perhitungan->id_demo();
            $berat_badan = $this->input->post('berat_badan');
            $tinggi_badan = $this->input->post('tinggi_badan');
            $jenisKelamin = $this->input->post('jenisKelamin');
            $usia = $this->input->post('usia');
            $lingPer = $this->input->post('lingPer');
            $lingPang = $this->input->post('lingPang');
            $lingA = $this->input->post('lingA');
            $lingBa = $this->input->post('lingBa');
            $lingTa = $this->input->post('lingTa');

            $imt=$berat_badan/pow(($tinggi_badan), 2);

            //menentukan bmr berdasarkan jenis kelamin
        if ($jenisKelamin=="Perempuan") {
            $bmr=(14.7*$berat_badan)+496;
        } else {
            $bmr=(15.3*$berat_badan)+679;
        }

            $sda=(10/100)*$bmr;
            $bmr_sda=$bmr+$sda;

            //aktivitas fisik berdasarkan jenis kelamin
        if ($jenisKelamin=="Perempuan") {
            $akt_fis=1.6*$bmr_sda;
        } else {
            $akt_fis=1.7*$bmr_sda;
        }

            //lamanya olahraga selama seminggu
            $olM=120;
            $olah=$berat_badan*0.2*120*2/7;

            $total=$akt_fis+$olah;

            //proses metode
            $berat = []; $tinggi = []; $umur = []; $perut= []; $panggul = []; $atas = []; $bawah = [];
            $tangan = []; $b = []; $s = []; $b_s = []; $a_fisik = []; 

            $data = array(
            'id' => $id,
            'bb_demo' => $berat_badan,
            'tb_demo' => $tinggi_badan,
            'jk_demo' => $jenisKelamin,
            'u_demo' => $usia,
            'lp_demo' => $lingPer,
            'lpi_demo' => $lingPang,
            'la_demo' => $lingA,
            'lb_demo' => $lingBa,
            'lper_demo' => $lingTa,
            'imt_demo' => $imt,
            'tot_demo' => $total

        );


        }
        
        $this->Model_Perhitungan->tambah_demo($data);
            if ($jenisKelamin=="Perempuan") {
                $database = $this->db->query("SELECT * FROM tbl_pelatihan WHERE jk='Perempuan'")->result();

                foreach ($database as $key => $value) {
                    $berat['data'] = $value->bb; $tinggi['data'] = $value->tb; $umur['data'] = $value->usia;
                    $perut['data'] = $value->ling_perut; $panggul['data'] = $value->ling_pang;
                    $atas['data'] = $value->leng_atas; $bawah['data'] = $value->leng_bawah;
                    $tangan['data'] = $value->ling_perg; $b['data'] = $value->bmr; $s['data'] = $value->sda;
                    $b_s['data'] = $value->bmr_sda; $a_fisik['data'] = $value->aktFisik;
                    $id_pelatihan = $value->id_pelatihan; $id_range = $value->id_range;

                    //kkn untuk status gizi
                    $rumus_gizi = sqrt(pow(($berat['data']-$berat_badan), 2) + pow(($tinggi['data']-$tinggi_badan), 2) + pow(($umur['data']-$usia), 2) + pow(($perut['data']-$lingPer), 2) + pow(($panggul['data']-$lingPang), 2) + pow(($atas['data']-$lingA), 2) + pow(($bawah['data']-$lingBa), 2) + pow(($tangan['data']-$lingTa), 2));

                    $this->db->query("INSERT INTO hitung_demo (id,id_pelatihan,k_gizi) VALUES ('".$id."','".$id_pelatihan."','".$rumus_gizi."')");
                }

                $nilaik=3;


                $kurus = $this->db->query("SELECT * FROM  hitung_demo JOIN tbl_pelatihan ON hitung_demo.id_pelatihan=tbl_pelatihan.id_pelatihan WHERE hitung_demo.id='$id' AND status='Kurus' ORDER BY k_gizi ASC LIMIT $nilaik")->num_rows();  
                $normal = $this->db->query("SELECT * FROM  hitung_demo JOIN tbl_pelatihan ON hitung_demo.id_pelatihan=tbl_pelatihan.id_pelatihan WHERE hitung_demo.id='$id' AND status='Normal' ORDER BY k_gizi ASC LIMIT $nilaik")->num_rows();  
                $kegemukan = $this->db->query("SELECT * FROM  hitung_demo JOIN tbl_pelatihan ON hitung_demo.id_pelatihan=tbl_pelatihan.id_pelatihan WHERE hitung_demo.id='$id' AND status='Kegemukan' ORDER BY k_gizi ASC LIMIT $nilaik")->num_rows();  
                $obesitas = $this->db->query("SELECT * FROM  hitung_demo JOIN tbl_pelatihan ON hitung_demo.id_pelatihan=tbl_pelatihan.id_pelatihan WHERE hitung_demo.id='$id' AND status='Obesitas' ORDER BY k_gizi ASC LIMIT $nilaik")->num_rows(); 


                if ($kurus>1) {
                    $status['status']="Kurus";
                }else if($normal>1){
                    $status['status']="Normal";
                } else if ($kegemukan>1) {
                    $status['status']="Kegemukan";
                } else if ($obesitas>1) {
                    $status['status']="Obesitas";
                }

                // $status_kesimpulan= $status['status'];

                // $this->db->query("UPDATE tbl_demo SET status_demo='$status_kesimpulan' WHERE tbl_demo.id = '$id'");
               

            } else {
                $database1 = $this->db->query("SELECT * FROM tbl_pelatihan WHERE jk='Laki-Laki'")->result();
                
                foreach ($database1 as $key => $value) {
                    $berat['data'] = $value->bb; $tinggi['data'] = $value->tb; $umur['data'] = $value->usia;
                    $perut['data'] = $value->ling_perut; $panggul['data'] = $value->ling_pang;
                    $atas['data'] = $value->leng_atas; $bawah['data'] = $value->leng_bawah;
                    $tangan['data'] = $value->ling_perg; $b['data'] = $value->bmr; $s['data'] = $value->sda;
                    $b_s['data'] = $value->bmr_sda; $a_fisik['data'] = $value->aktFisik;
                    $id_pelatihan = $value->id_pelatihan; $id_range = $value->id_range;

                    //kkn untuk status gizi
                    $rumus_gizi = sqrt(pow(($berat_badan-$berat['data']), 2) + pow(($tinggi_badan-$tinggi['data']), 2) + pow(($usia-$umur['data']), 2) + pow(($lingPer-$perut['data']), 2) + pow(($lingPang-$panggul['data']), 2) + pow(($lingA-$atas['data']), 2) + pow(($lingBa-$bawah['data']), 2) + pow(($lingTa-$tangan['data']), 2));
                    
                   
                    $this->db->query("INSERT INTO hitung_demo (id,id_pelatihan,k_gizi) VALUES ('".$id."','".$id_pelatihan."','".$rumus_gizi."')");
                }

                $nilaik=3;

               $kurus = $this->db->query("SELECT * FROM  hitung_demo JOIN tbl_pelatihan ON hitung_demo.id_pelatihan=tbl_pelatihan.id_pelatihan WHERE hitung_demo.id='$id' AND status='Kurus' ORDER BY k_gizi ASC LIMIT $nilaik")->num_rows();  
                $normal = $this->db->query("SELECT * FROM  hitung_demo JOIN tbl_pelatihan ON hitung_demo.id_pelatihan=tbl_pelatihan.id_pelatihan WHERE hitung_demo.id='$id' AND status='Normal' ORDER BY k_gizi ASC LIMIT $nilaik")->num_rows();  
                $kegemukan = $this->db->query("SELECT * FROM  hitung_demo JOIN tbl_pelatihan ON hitung_demo.id_pelatihan=tbl_pelatihan.id_pelatihan WHERE hitung_demo.id='$id' AND status='Kegemukan' ORDER BY k_gizi ASC LIMIT $nilaik")->num_rows();  
                $obesitas = $this->db->query("SELECT * FROM  hitung_demo JOIN tbl_pelatihan ON hitung_demo.id_pelatihan=tbl_pelatihan.id_pelatihan WHERE hitung_demo.id='$id' AND status='Obesitas' ORDER BY k_gizi ASC LIMIT $nilaik")->num_rows();  


                if ($kurus>1) {
                    $status['status']="Kurus";
                }else if($normal>1){
                    $status['status']="Normal";
                } else if ($kegemukan>1) {
                    $status['status']="Kegemukan";
                } else if ($obesitas>1) {
                    $status['status']="Obesitas";
                }

                
                // $status_kesimpulan= $status['status'];

                // $this->db->query("UPDATE tbl_demo SET status_demo='$status_kesimpulan' WHERE tbl_demo.id = '$id'");
                

            }
        $data2 = array(
                'data' => $this->Model_Perhitungan->get_demo($id)
            );


        $this->load->view('element/css');
        $this->load->view('v_hasil2', $data2+$status);    
        $this->load->view('element/v_footer');
        
    }


}
