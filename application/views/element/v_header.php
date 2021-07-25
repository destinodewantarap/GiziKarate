  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  		<div class="container">
  			<div class="row m-auto">
  				<div class="col-12 w-100 text-center">
  					<a class="navbar-brand w-100" href="#">Gizi Atlet Karate</a>
			      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			        <span class="oi oi-menu"></span> Menu
			      </button>
  				</div>
  				<div class="col-12 w-100 text-center">
  					<div class="collapse navbar-collapse" id="ftco-nav">
			        <ul class="navbar-nav m-auto">
			          <li class="nav-item <?php if(isset($active_beranda)){echo $active_beranda ;}?>"><a href="<?= base_url('Beranda')?>" class="nav-link">Beranda</a></li>
			          <li class="nav-item <?php if(isset($active_perhitungan)){echo $active_perhitungan ;}?>"><a href="<?= base_url('Perhitungan')?>" class="nav-link">Perhitungan</a></li>
                <li class="nav-item <?php if(isset($active_grafik)){echo $active_grafik ;}?>"><a href="<?= base_url('GrafikUser')?>" class="nav-link">Grafik</a></li>
			          <li class="nav-item <?php if(isset($active_hasil)){echo $active_hasil ;}?>"><a href="<?= base_url('Hasil')?>" class="nav-link">Hasil</a></li>
			        </ul>
              <h4><span class="flaticon-meditation"><?php echo $this->session->userdata('username'); ?></span></h4>&nbsp;&nbsp;&nbsp;
              <a href="<?php echo base_url();?>Login/Logout" class="btn btn-outline-primary">KELUAR</a>
			      </div>
  				</div>
  			</div>
  		</div>
	  </nav>
    <!-- END nav -->