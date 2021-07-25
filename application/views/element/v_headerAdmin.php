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
                <li class="nav-item <?php if(isset($active_range)){echo $active_range ;}?>"><a href="<?= base_url('Range')?>" class="nav-link">Range</a></li>
                <li class="nav-item <?php if(isset($active_paket)){echo $active_paket ;}?>"><a href="<?= base_url('Paket')?>" class="nav-link">Paket</a></li>
                <li class="nav-item <?php if(isset($active_waktu)){echo $active_waktu ;}?>"><a href="<?= base_url('Waktu')?>" class="nav-link">Waktu</a></li>
			          <li class="nav-item <?php if(isset($active_menu)){echo $active_menu ;}?>"><a href="<?= base_url('MenuAtlet')?>" class="nav-link">Menu Atlet</a></li>

			        </ul>
              <h4><span class="flaticon-meditation"><?php echo $this->session->userdata('username'); ?></span></h4>&nbsp;&nbsp;&nbsp;
              <a href="<?php echo base_url();?>Login/Logout" class="btn btn-outline-primary">KELUAR</a>
			      </div>
  				</div>
  			</div>
  		</div>
	  </nav>
    <!-- END nav -->

