<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Gizi Atlet Karate</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
    

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

    <style type="text/css">
      .login {
          margin: 150px auto;
          width: 400px;
          padding: 10px;
          
      }
    </style>
  </head>

<body>

    <section class="ftco-section contact-section ftco-no-pt ftco-no-pb">
      <div class="container">
            <div class="login">
              <form action="<?= base_url('Login/cek_login')?>" class="contact-form" method="post">
                <center><h2>Atlet Karate</h2></center>
                <center><h4>Status Gizi dan Menu Makanan</h4></center>
                <?php
                  $message = $this->session->flashdata('notif');
                    if($message){
                      echo '<p class="alert alert-danger text-center">'.$message .'</p>';
                }?>
                <div class="form-group">
                  <input type="text" class="form-control" name="username" placeholder="Username" required oninvalid="this.setCustomValidity('Masukan Username')" oninput="setCustomValidity('')">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" maxlength="6" name="password" placeholder="Password" required oninvalid="this.setCustomValidity('Masukan Password')" oninput="setCustomValidity('')">
                </div>
                <center><button class="btn btn-primary py-3 px-5" type="submit" name="btn_log">Masuk</button></center>
              </form>
              <br>
              <center>Belum punya akun?<a href="<?= base_url('Pendaftaran')?>" style="color: red" > Daftar</a></center>
              <center>Cek<a href="<?= base_url('Demo')?>" style="color: blue" > Status Gizi</a> Saja</center>
              
            </div>
      </div>
    </section>


<!-- 
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

 -->
  <script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/jquery-migrate-3.0.1.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/popper.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/jquery.easing.1.3.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/jquery.waypoints.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/jquery.stellar.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/owl.carousel.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/jquery.magnific-popup.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/aos.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/jquery.animateNumber.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/bootstrap-datepicker.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/jquery.timepicker.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/scrollax.min.js'?>"></script>
  <!-- <script src="<?php echo base_url().'assets/js/google-map.js'?>"></script> -->
  <script src="<?php echo base_url().'assets/js/main.js'?>"></script>
    
  </body>
</html>