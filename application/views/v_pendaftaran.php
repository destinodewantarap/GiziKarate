<section class="ftco-section contact-section ftco-no-pt ftco-no-pb">
      <div class="container">
        <div class="row block-9">
        	<div class="col-md-12 heading-section ftco-animate text-center">
        		<h1 class="mb-1">Gizi Atlet Karate</h1>
         	    <h3 class="mb-1">Pendaftaran</h3>
         	    <?php
              $message = $this->session->flashdata('notif');
                if($message){
                  echo '<p class="alert alert-danger text-center">'.$message .'</p>';
            }
            ?>
          	</div>
          <div class="col-md-12 ftco-animate py-md-5">
            <form action="<?php echo site_url('Pendaftaran/inputData');?>" class="contact-form" method="post">
            	<div class="row">
            		<div class="col-md-6">
	                <div class="form-group">
	                	<h6>Username :</h6>
	                  <input type="text" class="form-control" id="user" name="user" placeholder="Masukan Username" required oninvalid="this.setCustomValidity('Masukan Username')" oninput="setCustomValidity('')">
	                </div>
	                </div>
	                <div class="col-md-6">
	                <div class="form-group">
	                	<h6>Password</h6>
	                  <input type="password" class="form-control" id="pass" name="pass" placeholder="Masukan Password (Max 6 digit)" required oninvalid="this.setCustomValidity('Masukan Password')" oninput="setCustomValidity('')" minlength="6" maxlength="6">
	                </div>
	                </div>
            		<div class="col-md-6">
	                <div class="form-group">
	                	<h6>Nama Lengkap</h6>
	                  <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Masukan Nama Lengkap" required oninvalid="this.setCustomValidity('Masukan Nama Lengkap')" oninput="setCustomValidity('')">
	                </div>
                	</div>
	                <div class="col-md-6">
	                <div class="form-group">
	                	<h6>No Telp / Hp</h6>
	                  <input type="text" min="0" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required oninvalid="this.setCustomValidity('Maaf Tidak Falid')" oninput="setCustomValidity('')" class="form-control" id="no_telp" name="no_telp" placeholder="Masukan No Telp / Hp" minlength="12" maxlength="13" />
	                </div>
	                </div>
	                <div class="col-md-6">
	                <div class="form-group">
	                	<h6>Alamat</h6>
	                	<textarea name="alamat" id="alamat" cols="30" rows="7" class="form-control" placeholder="Masukan Alamat" required oninvalid="this.setCustomValidity('Masukan Alamat')" oninput="setCustomValidity('')" ></textarea>
	                </div>
	                </div>
	                
              </div>
              <div class="form-group">
              	<input type="hidden" name="level" value="3">
              	<button name="daftar" class="btn btn-primary py-3 px-5">Daftar</button>
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
						<br><br><br>
						
				</div>
				
			</div>
			</form>
		</div>
	</section>
