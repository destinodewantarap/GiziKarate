	<!-- Intro section -->
	<section class="intro-section">
        <div class="text-white">
            <br>
            <center><h3></h3></center> 
        </div>
		
	</section>
	<!-- Intro section end -->

<section class="ftco-section contact-section ftco-no-pt ftco-no-pb">
      <div class="container">
        <div class="row block-9">
            <div class="col-md-12 heading-section ftco-animate text-center">
            <h3 class="mb-1">Hasil Perhitungan  </h3>
            </div>
          <div class="col-md-12 ftco-animate py-md-5">
            <form action="" class="contact-form" method="post">
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <h6>Berat Badan : <?php echo $data[0]->berat_badan;?> Kg</h6>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <h6>Tinggi Badan : <?php echo $data[0]->tinggi_badan;?> meter</h6>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <h6>Jenis Kelamin : <?php echo $data[0]->jenis_kelamin;?></h6>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <h6>Usia : <?php echo $data[0]->usia;?> Tahun</h6>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <h6>Lingkar Perut : <?php echo $data[0]->lingkar_perut;?> cm</h6>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <h6>Lingkar Pinggang : <?php echo $data[0]->lingkar_panggul;?> cm</h6>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <h6>Lingkar Lengan Atas : <?php echo $data[0]->lengan_atas;?> cm</h6>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <h6>Lingkar Lengan Bawah : <?php echo $data[0]->lengan_bawah;?> cm</h6>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <h6>Lingkar Pergelangan Tangan : <?php echo $data[0]->lingkar_pergelangan;?> cm</h6>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <h6>Lama Aktivitas Olahraga (dalam 1 hari, 2 kali seminggu) : <?php echo $data[0]->menit;?> menit</h6>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <h6>Indeks Massa Tubuh (IMT): <?php echo $data[0]->imt;?> Kg/m</h6>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <h6>Energi yang dibutuhkan : <?php echo $data[0]->total;?> Kkal</h6>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <h3>Status : <?php echo $status;?></h3>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <h3>Menu Range: <?php echo $rangeA;?> - <?php echo $rangeB;?></h3>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <a href="<?php echo base_url();?>Hasil/menu/<?php echo $data[0]->id_user;?>" class="btn btn-primary">Lihat Menu</a>
                    </div>
                    </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

	<!-- <section class="featured-section">
		<div class="container">
			<div class="row">
					<div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-striped table-earning">
                            <thead>
                                <tr class="bg-primary text-white">
                        	    	<th>No</th>
                                    <th>Paket</th>
                                    <th>Waktu</th>
                                    <th>Menu</th>
                                    <th>Bahan</th>
                                    <th>Berat (Gram)</th>
                                    <th>Energi</th>
                                    <th>Protein</th>
                                    <th>Lemak</th>
                                    <th>Kh</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                 $no = 1;
                                    foreach ($hasil_menu as $row):
                                ?>
                                <tr>
                                	<td><?php echo $no;?></td>
                                    <td><?php echo $row->paket ?></td>
                                    <td><?php echo $row->waktu ?></td>
                                    <td><?php echo $row->nama_menu ?></td>
                                    <td><?php echo $row->bahan ?></td>
                                    <td><?php echo $row->berat ?></td>
                                    <td><?php echo $row->energi ?></td>
                                    <td><?php echo $row->protein ?></td>
                                    <td><?php echo $row->lemak ?></td>
                                    <td><?php echo $row->kh ?></td>                                      
                                </tr>
                                <?php $no++;
                                endforeach;?>       
                            </tbody>
                        </table>
                    </div>
			</div>
		</div>
	</section> -->

