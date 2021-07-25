<section class="ftco-section contact-section ftco-no-pt ftco-no-pb">
      <div class="container">
        <div class="row block-9">
        	<div class="col-md-12 heading-section ftco-animate text-center">
            <h3 class="mb-1">Edit Menu</h3>
          	</div>
          <div class="col-md-12 ftco-animate py-md-5">
            <form action="<?php echo site_url('menuAtlet/update_menu');?>" class="contact-form" method="post">
            	<div class="row">
            		<div class="col-lg-4">
            			<input class="form-control" type="hidden" name="id_menu" maxlength="5" value="<?php echo @$menu[0]['id_menu']; ?>">
                        <label class="col-lg-4 col-sm-2 control-label">Range</label>
                        <input type="text" class="form-control" min="0" id="range" name="range" value="<?php echo @$menu[0]['range1']."-".@$menu[0]['range2']; ?>" readonly>
                    </div>
                    <div class="col-lg-4">
                        <label class="col-lg-4 col-sm-2 control-label">Paket</label>
                        <input type="text" class="form-control" min="0" id="paket" name="paket" value="<?php echo @$menu[0]['paket']?>" readonly>
                    </div>
                    <div class="col-lg-4">
                        <label class="col-lg-4 col-sm-2 control-label">Waktu</label>
                        <input type="text" class="form-control" min="0" id="waktu" name="waktu" value="<?php echo @$menu[0]['waktu']; ?>" readonly>
                    </div>
            		<div class="col-md-6">
	                <div class="form-group">
	                	<h6>Nama Menu :</h6>
	                  <input type="float" class="form-control" min="0" id="nama_menu" name="nama_menu" value="<?php echo @$menu[0]['nama_menu']; ?>" readonly >
	                </div>
                	</div>
                	<div class="col-md-6">
	                <div class="form-group">
	                	<h6>Bahan :</h6>
	                  <input type="float" class="form-control" min="0" id="bahan" name="bahan" value="<?php echo @$menu[0]['bahan']; ?>" readonly>
	                </div>
	                </div>
	                <div class="col-md-6">
	                <div class="form-group">
	                	<h6>Berat :</h6>
	                  <input type="float" class="form-control" min="0" id="berat" name="berat" value="<?php echo @$menu[0]['berat']; ?>" required oninvalid="this.setCustomValidity('Masukan Berat (kg)')" oninput="setCustomValidity('')">
	                </div>
	                </div>
	                <div class="col-md-6">
	                <div class="form-group">
	                	<h6>Energi :</h6>
	                  <input type="float" class="form-control" min="0" id="energi" name="energi" value="<?php echo @$menu[0]['energi']; ?>" required oninvalid="this.setCustomValidity('Masukan energi')" oninput="setCustomValidity('')">
	                </div>
	                </div>
	                <div class="col-md-6">
	                <div class="form-group">
	                	<h6>Protein :</h6>
	                  <input type="float" class="form-control" min="0" id="protein" name="protein" value="<?php echo @$menu[0]['protein']; ?>" required oninvalid="this.setCustomValidity('Masukan protein')" oninput="setCustomValidity('')">
	                </div>
	                </div>
	                <div class="col-md-6">
	                <div class="form-group">
	                	<h6>Lemak :</h6>
	                  <input type="float" class="form-control" min="0" id="lemak" name="lemak" value="<?php echo @$menu[0]['lemak']; ?>" required oninvalid="this.setCustomValidity('Masukan lemak')" oninput="setCustomValidity('')">
	                </div>
	                </div>
	                <div class="col-md-6">
	                <div class="form-group">
	                	<h6>KH :</h6>
	                  <input type="float" class="form-control" min="0" id="kh" name="kh" value="<?php echo @$menu[0]['kh']; ?>" required oninvalid="this.setCustomValidity('Masukan kh')" oninput="setCustomValidity('')">
	                </div>
	                </div>
	                <!-- <div class="col-md-6">
	                <div class="form-group">
	                	<h6>Lingkar Pergelangan Tangan :</h6>
	                  <input type="float" class="form-control" min="0" id="lingTa" name="lingTa" placeholder="Masukan Lingkar Pergelangan Tangan (cm)">
	                </div>
	                </div>
	                <div class="col-md-6">
	                <div class="form-group">
	                	<h6>Lama Aktivitas Olahraga (dalam 1 hari, 2 kali seminggu) 120 menit </h6>
              		</div>
              		</div> -->
              </div>
              <div class="form-group">
              	<a href="<?php echo base_url()?>menuAtlet" class="btn btn-outline-primary py-3 px-5">Kembali</a>
              	<button type="submit" class="btn btn-primary py-3 px-5">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>




<section class="contact-page">
		<div class="container">
			<form class="contact-form">
			<div class="row">
				<div class="col-lg-6 order-2 order-lg-1">
						<br>
						
				</div>
				
			</div>
			</form>
		</div>
	</section>
