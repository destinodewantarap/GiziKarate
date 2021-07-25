<section class="ftco-section contact-section ftco-no-pt ftco-no-pb">
      <div class="container">
        <div class="row block-9">
        	<div class="col-md-12 heading-section ftco-animate text-center">
            <h3 class="mb-1">Masukan Data Diri</h3>
          	</div>
          <div class="col-md-12 ftco-animate py-md-5">
            <form action="<?php echo site_url('Perhitungan/inputData');?>" class="contact-form" method="post">
            	<div class="row">
            		<div class="col-md-6">
	                <div class="form-group">
	                	<h6>Berat Badan (Kg) :</h6>
	                  <input type="text" class="form-control" min="0" id="berat_badan" name="berat_badan"  placeholder="Masukan Berat Badan (Kg)" required oninvalid="this.setCustomValidity('Masukan Berat Badan (Kg)')" oninput="setCustomValidity('')">
	                </div>
                	</div>
                	<div class="col-md-6">
	                <div class="form-group">
	                	<h6>Tinggi Badan (Meter, contoh 1.55) :</h6>
	                  <input type="float" class="form-control" min="0" id="tinggi_badan" name="tinggi_badan"  placeholder="Masukan Tinggi Badan (meter)" required oninvalid="this.setCustomValidity('Masukan Tinggi Badan (meter)')" oninput="setCustomValidity('')">
	                </div>
	                </div>
	                <div class="col-md-6">
	                <div class="form-group">
	                	<h6>Jenis Kelamin :</h6>
						<select name="jenisKelamin" class="form-control">
                    		<option value="Perempuan">Perempuan</option>
                    		<option value="Laki-Laki">Laki-Laki</option>
                    	</select>
              		</div>
              		</div>
	                <div class="col-md-6">
	                <div class="form-group">
	                	<h6>Usia :</h6>
	                  <input type="text" class="form-control" min="0" id="usia" name="usia" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required oninvalid="this.setCustomValidity('Maaf Tidak Falid')" placeholder="Masukan Usia (th)" required oninvalid="this.setCustomValidity('Masukan Username')" oninput="setCustomValidity('')">
	                </div>
	                </div>
	                <div class="col-md-6">
	                <div class="form-group">
	                	<h6>Lingkar Perut (cm) :</h6>
	                  <input type="text" class="form-control" min="0" id="lingPer" name="lingPer" placeholder="Masukan Lingkar Perut (cm)" required oninvalid="this.setCustomValidity('Masukan Lingkar Perut (cm)')" oninput="setCustomValidity('')">
	                </div>
	                </div>
	                <div class="col-md-6">
	                <div class="form-group">
	                	<h6>Lingkar Pinggul (cm) :</h6>
	                  <input type="text" class="form-control" min="0" id="lingPang" name="lingPang"  placeholder="Masukan Lingkar Pinggul (cm)" required oninvalid="this.setCustomValidity('Masukan Lingkar Pinggul (cm)')" oninput="setCustomValidity('')">
	                </div>
	                </div>
	                <div class="col-md-6">
	                <div class="form-group">
	                	<h6>Lingkar Pergelangan Tangan (cm) :</h6>
	                  <input type="text" class="form-control" min="0" id="lingTa" name="lingTa"  placeholder="Masukan Lingkar Pergelangan Tangan (cm)" required oninvalid="this.setCustomValidity('Masukan Lingkar Pergelangan Tangan (cm)')" oninput="setCustomValidity('')">
	                </div>
	                </div>
	                <div class="col-md-6">
	                <div class="form-group">
	                	<h6>Lingkar Lengan Atas (cm) :</h6>
	                  <input type="text" class="form-control" min="0" id="lingA" name="lingA" placeholder="Masukan Lingkar Lengan Atas (cm)" required oninvalid="this.setCustomValidity('Masukan Lingkar Lengan Atas (cm)')" oninput="setCustomValidity('')">
	                </div>
	                </div>
	                <div class="col-md-6">
	                <div class="form-group">
	                	<h6>Lingkar Lengan Bawah (cm) :</h6>
	                  <input type="text" class="form-control" min="0" id="lingBa" name="lingBa" placeholder="Masukan Lingkar Lengan Bawah (cm)" required oninvalid="this.setCustomValidity('Masukan Lingkar Lengan Bawah (cm)')" oninput="setCustomValidity('')">
	                </div>
	                </div>
	                <div class="col-md-6">
	                <div class="form-group">
	                	<h6>Lama Aktivitas Olahraga (dalam 1 hari, 2 kali seminggu)</h6>
	                	<input type="text" class="form-control" min="0" value="120 menit" readonly="">
              		</div>
              		</div>
              </div>
              <div class="form-group">
              	<input type="hidden" name="id_login" value="<?php $session_id = $akun; echo $session_id[0]->id_login?>">
              	<button name="hitung" class="btn btn-primary py-3 px-5">Hitung</button>
                <!-- <input type="submit" value="Hitung" name="hitung" class="btn btn-primary py-3 px-5"> -->
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
