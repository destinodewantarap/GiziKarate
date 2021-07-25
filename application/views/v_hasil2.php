    <!-- Intro section -->
    <section class="intro-section">
        <div class="text-white">
            <br>
            <center><h3></h3></center> <br><br><br>
        </div>
        
    </section>
    <!-- Intro section end -->

<section class="ftco-section contact-section ftco-no-pt ftco-no-pb">
      <div class="container">
        <div class="row block-9">
            <div class="col-md-12 heading-section ftco-animate text-center">
            <h3 class="mb-1">Hasil Perhitungan Status Gizi  </h3><br><br>
            </div>
          <div class="col-md-12 ftco-animate py-md-5">
            <form action="" class="contact-form" method="post">
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <h6>Berat Badan : <?php echo $data[0]->bb_demo;?> Kg</h6>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <h6>Tinggi Badan : <?php echo $data[0]->tb_demo;?> meter</h6>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <h6>Jenis Kelamin : <?php echo $data[0]->jk_demo;?></h6>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <h6>Usia : <?php echo $data[0]->u_demo;?> Tahun</h6>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <h6>Lingkar Perut : <?php echo $data[0]->lp_demo;?> cm</h6>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <h6>Lingkar Pinggang : <?php echo $data[0]->lpi_demo;?> cm</h6>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <h6>Lingkar Lengan Atas : <?php echo $data[0]->la_demo;?> cm</h6>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <h6>Lingkar Lengan Bawah : <?php echo $data[0]->lb_demo;?> cm</h6>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <h6>Lingkar Pergelangan Tangan : <?php echo $data[0]->lper_demo;?> cm</h6>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <h6>Lama Aktivitas Olahraga (dalam 1 hari, 2 kali seminggu) : 120 menit</h6>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <h6>Indeks Massa Tubuh (IMT): <?php echo $data[0]->imt_demo;?> Kg/m</h6>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <h6>Energi yang dibutuhkan : <?php echo $data[0]->tot_demo;?> Kkal</h6>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <h3>Status : <?php echo $status;?></h3>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <a href="<?php echo base_url();?>Hasil/menu/<?php echo $data[0]->id;?>" class="btn btn-primary">Lihat Menu Makanan</a>
                    </div>
                    </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


