<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perhitungan extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model('Model_Perhitungan');
        $this->load->model('Model_app');

        $this->load->library('session');
        $this->load->helper('url');

         if(!$this->session->userdata('username')){
            redirect('Login');
        }

    }
	public function index(){
        
        $user = $this->session->userdata('username');
        $get_id = array("akun" => $this->Model_app->ambil_id());
        $ceklevel  = $this->Model_app->level_user($user);
        if ($ceklevel == 3) {
            $title=array(
                    'title'=>'Perhitungan',
                    'active_perhitungan'=>'active'
                );
            $this->load->view('element/css', $title);
            $this->load->view('element/v_header');
            $this->load->view('v_perhitungan', $get_id);    
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

    public function inputData(){
        if (isset($_POST['hitung'])) {
            $id = $this->Model_Perhitungan->get_id();
            $id_login = $this->input->post('id_login');
            $berat_badan = $this->input->post('berat_badan');
            $tinggi_badan = $this->input->post('tinggi_badan');
            $jenisKelamin = $this->input->post('jenisKelamin');
            $usia = $this->input->post('usia');
            $lingPer = $this->input->post('lingPer');
            $lingPang = $this->input->post('lingPang');
            $lingA = $this->input->post('lingA');
            $lingBa = $this->input->post('lingBa');
            $lingTa = $this->input->post('lingTa');
            $olM= $this->input->post('olM');
            $tgl= date(" Y-m-d H:i:s");

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
            'id_user' => $id,
            'id_login' => $id_login,
            'berat_badan' => $berat_badan,
            'tinggi_badan' => $tinggi_badan,
            'jenis_kelamin' => $jenisKelamin,
            'usia' => $usia,
            'lingkar_perut' => $lingPer,
            'lingkar_panggul' => $lingPang,
            'lengan_atas' => $lingA,
            'lengan_bawah' => $lingBa,
            'lingkar_pergelangan' => $lingTa,
            'imt' => $imt,
            'bmr' => $bmr,
            'sda' => $sda,
            'bmrSDA' => $bmr_sda,
            'aktivitas_fisik' => $akt_fis,
            'menit' => $olM,
            'olahraga' => $olah,
            'total' => $total,
            'tgl_input' => $tgl

        );


        }
        
        $this->Model_Perhitungan->tambah($data);
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
                    
                    //knn untuk menu makanannya
                    $rumus_menu = sqrt(pow(($bmr-$b['data']), 2) + pow(($sda-$s['data']), 2) + pow(($bmr_sda-$b_s['data']), 2) + pow(($akt_fis-$a_fisik['data']), 2));

                    $this->db->query("INSERT INTO tbl_metode (id_user,id_pelatihan,id_range,jarak_gizi,jarak_menu) VALUES ('".$id."','".$id_pelatihan."','".$id_range."','".$rumus_gizi."', '".$rumus_menu."')");
                }

                $nilaik=3;


                $kurus = $this->db->query("SELECT * FROM  tbl_metode JOIN tbl_pelatihan ON tbl_metode.id_pelatihan=tbl_pelatihan.id_pelatihan WHERE tbl_metode.id_user='$id' AND status='Kurus' ORDER BY jarak_gizi ASC LIMIT $nilaik")->num_rows();  
                $normal = $this->db->query("SELECT * FROM  tbl_metode JOIN tbl_pelatihan ON tbl_metode.id_pelatihan=tbl_pelatihan.id_pelatihan WHERE tbl_metode.id_user='$id' AND status='Normal' ORDER BY jarak_gizi ASC LIMIT $nilaik")->num_rows();  
                $kegemukan = $this->db->query("SELECT * FROM  tbl_metode JOIN tbl_pelatihan ON tbl_metode.id_pelatihan=tbl_pelatihan.id_pelatihan WHERE tbl_metode.id_user='$id' AND status='Kegemukan' ORDER BY jarak_gizi ASC LIMIT $nilaik")->num_rows();  
                $obesitas = $this->db->query("SELECT * FROM  tbl_metode JOIN tbl_pelatihan ON tbl_metode.id_pelatihan=tbl_pelatihan.id_pelatihan WHERE tbl_metode.id_user='$id' AND status='Obesitas' ORDER BY jarak_gizi ASC LIMIT $nilaik")->num_rows(); 


                if ($kurus>1) {
                    $status['status']="Kurus";
                }else if($normal>1){
                    $status['status']="Normal";
                } else if ($kegemukan>1) {
                    $status['status']="Kegemukan";
                } else if ($obesitas>1) {
                    $status['status']="Obesitas";
                }


                $ranges = $this->db->query("SELECT * FROM tbl_metode JOIN tbl_range ON tbl_metode.id_range=tbl_range.id_range WHERE tbl_metode.id_user='$id' ORDER BY jarak_menu ASC LIMIT $nilaik ")->result();

                $jml1 = 0;$jml2 = 0;$jml3 = 0;$jml4 = 0;$jml5 = 0;

                foreach ($ranges as $key => $value) {
                    if($value->id_range == 'M1'){
                        $jml1 = $jml1 + 1;
                    }else if($value->id_range == 'M2'){
                        $jml2 = $jml2 + 1;
                    }else if($value->id_range == 'M3'){
                        $jml3 = $jml3 + 1;
                    }else if ($value->id_range == 'M4') {
                        $jml4 = $jml4 + 1;                        
                    }else if($value->id_range == 'M5'){
                        $jml5 = $jml5 + 1;
                    }
                }

                if ($jml1 > 1 && $jml2 >= 0 && $jml3 >= 0 && $jml4 >= 0 && $jml5 >= 0){
                    $rangeA['rangeA']=2000; $rangeB['rangeB']=2500;
                    $id_range_i = 'M1';
                }else if($jml1 >= 0 && $jml2 > 1 && $jml3 >= 0 && $jml4 >= 0 && $jml5 >= 0){
                    $rangeA['rangeA']=2501; $rangeB['rangeB']=3000;
                    $id_range_i = 'M2';
                }else if($jml1 >= 0 && $jml2 >= 0 && $jml3 > 1 && $jml4 >= 0 && $jml5 >= 0){
                    $rangeA['rangeA']=3001; $rangeB['rangeB']=3500;
                    $id_range_i = 'M3';
                }else if($jml1 >= 0 && $jml2 >= 0 && $jml3 >= 0 && $jml4 > 1 && $jml5 >= 0){
                    $rangeA['rangeA']=3501; $rangeB['rangeB']=4000;
                    $id_range_i = 'M4';
                }else if($jml1 >= 0 && $jml2 >= 0 && $jml3 >= 0 && $jml4 >= 0 && $jml5 > 1){
                    $rangeA['rangeA']=4001; $rangeB['rangeB']=4500;
                    $id_range_i = 'M5';
                }

                $range = $this->db->query("SELECT DISTINCT id_range FROM tbl_metode WHERE id_user='$id'")->result();

                
                $hasil_menu['hasil_menu'] = $this->db->query("SELECT * FROM tbl_uji JOIN detail_menu b JOIN tbl_menu c ON b.id_menu = c.id_menu JOIN tbl_bahan d ON c.id_menu = d.id_menu JOIN tbl_waktu f ON f.id_waktu = b.id_waktu JOIN tbl_paket e ON b.id_paket = e.id_paket WHERE b.id_range = '$id_range_i' AND tbl_uji.id_user = '$id' ")->result();

                $status_kesimpulan= $status['status'];

                $this->db->query("INSERT INTO tbl_kesimpulan (id_user,id_login,id_range,status_gizi,tgl_input) VALUES ('".$id."','".$id_login."','".$id_range_i."','".$status_kesimpulan."', '".$tgl."')");
                

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
                    
                    //knn untuk menu makanannya
                    $rumus_menu = sqrt(pow(($bmr-$b['data']), 2) + pow(($sda-$s['data']), 2) + pow(($bmr_sda-$b_s['data']), 2) + pow(($akt_fis-$a_fisik['data']), 2));

                    $this->db->query("INSERT INTO tbl_metode (id_user,id_pelatihan,id_range,jarak_gizi,jarak_menu) VALUES ('".$id."','".$id_pelatihan."','".$id_range."','".$rumus_gizi."', '".$rumus_menu."')");
                }

                $nilaik=3;

                $kurus = $this->db->query("SELECT * FROM  tbl_metode JOIN tbl_pelatihan ON tbl_metode.id_pelatihan=tbl_pelatihan.id_pelatihan WHERE tbl_metode.id_user='$id' AND status='Kurus' ORDER BY jarak_gizi ASC LIMIT $nilaik")->num_rows();  
                $normal = $this->db->query("SELECT * FROM  tbl_metode JOIN tbl_pelatihan ON tbl_metode.id_pelatihan=tbl_pelatihan.id_pelatihan WHERE tbl_metode.id_user='$id' AND status='Normal' ORDER BY jarak_gizi ASC LIMIT $nilaik")->num_rows();  
                $kegemukan = $this->db->query("SELECT * FROM  tbl_metode JOIN tbl_pelatihan ON tbl_metode.id_pelatihan=tbl_pelatihan.id_pelatihan WHERE tbl_metode.id_user='$id' AND status='Kegemukan' ORDER BY jarak_gizi ASC LIMIT $nilaik")->num_rows();  
                $obesitas = $this->db->query("SELECT * FROM  tbl_metode JOIN tbl_pelatihan ON tbl_metode.id_pelatihan=tbl_pelatihan.id_pelatihan WHERE tbl_metode.id_user='$id' AND status='Obesitas' ORDER BY jarak_gizi ASC LIMIT $nilaik")->num_rows(); 


                if ($kurus>1) {
                    $status['status']="Kurus";
                }else if($normal>1){
                    $status['status']="Normal";
                } else if ($kegemukan>1) {
                    $status['status']="Kegemukan";
                } else if ($obesitas>1) {
                    $status['status']="Obesitas";
                }

                $ranges = $this->db->query("SELECT * FROM tbl_metode JOIN tbl_range ON tbl_metode.id_range=tbl_range.id_range WHERE tbl_metode.id_user='$id' ORDER BY jarak_menu ASC LIMIT $nilaik ")->result();

                $jml1 = 0;$jml2 = 0;$jml3 = 0;$jml4 = 0;$jml5 = 0;

                foreach ($ranges as $key => $value) {
                    if($value->id_range == 'M1'){
                        $jml1 = $jml1 + 1;
                    }else if($value->id_range == 'M2'){
                        $jml2 = $jml2 + 1;
                    }else if($value->id_range == 'M3'){
                        $jml3 = $jml3 + 1;
                    }else if ($value->id_range == 'M4') {
                        $jml4 = $jml4 + 1;                        
                    }else if($value->id_range == 'M5'){
                        $jml5 = $jml5 + 1;
                    }
                }

                if ($jml1 > 1 && $jml2 >= 0 && $jml3 >= 0 && $jml4 >= 0 && $jml5 >= 0){
                    $rangeA['rangeA']=2000; $rangeB['rangeB']=2500;
                    $id_range_i = 'M1';
                }else if($jml1 >= 0 && $jml2 > 1 && $jml3 >= 0 && $jml4 >= 0 && $jml5 >= 0){
                    $rangeA['rangeA']=2501; $rangeB['rangeB']=3000;
                    $id_range_i = 'M2';
                }else if($jml1 >= 0 && $jml2 >= 0 && $jml3 > 1 && $jml4 >= 0 && $jml5 >= 0){
                    $rangeA['rangeA']=3001; $rangeB['rangeB']=3500;
                    $id_range_i = 'M3';
                }else if($jml1 >= 0 && $jml2 >= 0 && $jml3 >= 0 && $jml4 > 1 && $jml5 >= 0){
                    $rangeA['rangeA']=3501; $rangeB['rangeB']=4000;
                    $id_range_i = 'M4';
                }else if($jml1 >= 0 && $jml2 >= 0 && $jml3 >= 0 && $jml4 >= 0 && $jml5 > 1){
                    $rangeA['rangeA']=4001; $rangeB['rangeB']=4500;
                    $id_range_i = 'M5';
                }

                $range = $this->db->query("SELECT DISTINCT id_range FROM tbl_metode WHERE id_user='$id'")->result();

                
                $hasil_menu['hasil_menu'] = $this->db->query("SELECT * FROM tbl_uji JOIN detail_menu b JOIN tbl_menu c ON b.id_menu = c.id_menu JOIN tbl_bahan d ON c.id_menu = d.id_menu JOIN tbl_waktu f ON f.id_waktu = b.id_waktu JOIN tbl_paket e ON b.id_paket = e.id_paket WHERE b.id_range = '$id_range_i' AND tbl_uji.id_user = '$id' ")->result();

                $status_kesimpulan= $status['status'];

                $this->db->query("INSERT INTO tbl_kesimpulan (id_user,id_login,id_range,status_gizi,tgl_input) VALUES ('".$id."','".$id_login."','".$id_range_i."','".$status_kesimpulan."', '".$tgl."')");
                
            }
            

        $title=array(
                    'title'=>'Perhitungan',
                    'active_perhitungan'=>'active'
                );
        $data2 = array(
                'data' => $this->Model_Perhitungan->get_data($id)
            );


        $this->load->view('element/css',$title);
        $this->load->view('element/v_header');
        $this->load->view('v_hasil', $data2+$status+$rangeA+$rangeB);    
        $this->load->view('element/v_footer');
        
    }


}
