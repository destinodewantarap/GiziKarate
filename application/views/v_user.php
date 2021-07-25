<section class="ftco-section contact-section ftco-no-pt ftco-no-pb">
      <div class="container">
        <div class="row block-9">
            <div class="col-md-12 heading-section ftco-animate text-center">
            <h3 class="mb-1">Grafik Atlet </h3> <?php foreach ($data2 as $key) {
                echo $key->nama_lengkap;
            } ?>
            </div>
          <div class="col-md-12 ftco-animate py-md-5">
           
            <form action="" class="contact-form" >
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                            <?php
                                foreach ($data as $g) {
                                    $tgl_input[] = $g->tgl_input;
                                    $var_berat[] = $g->berat_badan;
                                }

                            ?>
                            <canvas id="berat" width="500" height="280"></canvas>
                            <p>Keterangan :</p>
                            <p>X = Berat Badan (Kg)</p>
                            <p>Y = Tanggal</p>
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                        <?php
                                foreach ($data as $g) {
                                    $tgl_input[] = $g->tgl_input;
                                    $var_tinggi[] = $g->tinggi_badan;
                                }

                            ?>
                            <canvas id="tinggi" width="500" height="280"></canvas>
                            <p>Keterangan :</p>
                            <p>X = Tinggi Badan (meter)</p>
                            <p>Y = Tanggal</p>
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                         <?php
                                foreach ($data as $g) {
                                    $tgl_input[] = $g->tgl_input;
                                    $var_perut[] = $g->lingkar_perut;
                                }

                            ?>
                            <canvas id="perut" width="500" height="280"></canvas>
                            <p>Keterangan :</p>
                            <p>X = Lingkar Perut (cm)</p>
                            <p>Y = Tanggal</p>
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                         <?php
                                foreach ($data as $g) {
                                    $tgl_input[] = $g->tgl_input;
                                    $var_panggul[] = $g->lingkar_panggul;
                                }

                            ?>
                            <canvas id="panggul" width="500" height="280"></canvas>
                            <p>Keterangan :</p>
                            <p>X = Lingkar Panggul (cm)</p>
                            <p>Y = Tanggal</p>
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                         <?php
                                foreach ($data as $g) {
                                    $tgl_input[] = $g->tgl_input;
                                    $var_tangan[] = $g->lingkar_pergelangan;
                                }

                            ?>
                            <canvas id="tangan" width="500" height="280"></canvas>
                            <p>Keterangan :</p>
                            <p>X = Lingkar Pergelangan Tangan (cm)</p>
                            <p>Y = Tanggal</p>
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                         <?php
                                foreach ($data as $g) {
                                    $tgl_input[] = $g->tgl_input;
                                    $var_atas[] = $g->lengan_atas;
                                }

                            ?>
                            <canvas id="atas" width="500" height="280"></canvas>
                            <p>Keterangan :</p>
                            <p>X = Lingkar Lengan Atas (cm)</p>
                            <p>Y = Tanggal</p>
                    </div>
                    </div>
                    
                    <div class="col-md-6">
                    <div class="form-group">
                         <?php
                                foreach ($data as $g) {
                                    $tgl_input[] = $g->tgl_input;
                                    $var_bawah[] = $g->lengan_bawah;
                                }

                            ?>
                            <canvas id="bawah" width="500" height="280"></canvas>
                            <p>Keterangan :</p>
                            <p>X = Lingkar Lengan Bawah (cm)</p>
                            <p>Y = Tanggal</p>
                    </div>
                    </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


    <script type="text/javascript" src="<?php echo base_url().'assets/chart.min.js'?>"></script>

    <script src="<?php echo base_url().'assets/chartjs/Chart.bundle.js'?>"></script>
    <script src="<?php echo base_url().'assets/chartjs/samples/utils.js'?>"></script>
    <style>
    canvas {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    </style>

   
    <br>
    <br>

    <script>
        var chartData = {
            labels: <?php echo json_encode($tgl_input);?>,
            datasets: [{
                type: 'line',
                label: 'Berat Badan',
                borderColor: window.chartColors.blue,
                backgroundColor: window.chartColors.blue,
                borderWidth: 2,
                fill: false,
                data: <?php echo json_encode($var_berat);?>
            }]

        };
        var chartData1 = {
            labels: <?php echo json_encode($tgl_input);?>,
            datasets: [{
                type: 'line',
                label: 'Grafik Tinggi Badan',
                borderColor: window.chartColors.red,
                backgroundColor: window.chartColors.red,
                borderWidth: 2,
                fill: false,
                data: <?php echo json_encode($var_tinggi);?>
            }]

        };
        var chartData3 = {
            labels: <?php echo json_encode($tgl_input);?>,
            datasets: [{
                type: 'line',
                label: 'Grafik Lingkar Perut',
                borderColor: window.chartColors.yellow,
                backgroundColor: window.chartColors.yellow,
                borderWidth: 2,
                fill: false,
                data: <?php echo json_encode($var_perut);?>
            }]

        };
        var chartData4 = {
            labels: <?php echo json_encode($tgl_input);?>,
            datasets: [{
                type: 'line',
                label: 'Grafik Lingkar Pinggul',
                borderColor: window.chartColors.green,
                backgroundColor: window.chartColors.green,
                borderWidth: 2,
                fill: false,
                data: <?php echo json_encode($var_panggul);?>
            }]

        };
        var chartData5 = {
            labels: <?php echo json_encode($tgl_input);?>,
            datasets: [{
                type: 'line',
                label: 'Grafik Lingkar Pergelangan Tangan',
                borderColor: window.chartColors.orange,
                backgroundColor: window.chartColors.orange,
                borderWidth: 2,
                fill: false,
                data: <?php echo json_encode($var_tangan);?>
            }]

        };
        var chartData6 = {
            labels: <?php echo json_encode($tgl_input);?>,
            datasets: [{
                type: 'line',
                label: 'Grafik Lingkar Lengan Atas',
                borderColor: window.chartColors.purple,
                backgroundColor: window.chartColors.purple,
                borderWidth: 2,
                fill: false,
                data: <?php echo json_encode($var_atas);?>
            }]

        };
        var chartData7 = {
            labels: <?php echo json_encode($tgl_input);?>,
            datasets: [{
                type: 'line',
                label: 'Grafik Lingkar Lengan Bawah',
                borderColor: window.chartColors.grey,
                backgroundColor: window.chartColors.grey,
                borderWidth: 2,
                fill: false,
                data: <?php echo json_encode($var_bawah);?>
            }]

        };


        window.onload = function() {
            var ctx1 = document.getElementById('berat').getContext('2d');
            var ctx2 = document.getElementById('tinggi').getContext('2d');
            var ctx3 = document.getElementById('perut').getContext('2d');
            var ctx4 = document.getElementById('panggul').getContext('2d');
            var ctx5 = document.getElementById('tangan').getContext('2d');
            var ctx6 = document.getElementById('atas').getContext('2d');
            var ctx7 = document.getElementById('bawah').getContext('2d');
            window.myMixedChart = new Chart(ctx1, {
                type: 'line',
                data: chartData,
                options: {
                    responsive: true,
                    title: {
                        display: true,
                        text: 'Grafik Berat Badan'
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: true
                    }
                }
            });
            window.myMixedChart = new Chart(ctx2, {
                type: 'line',
                data: chartData1,
                options: {
                    responsive: true,
                    title: {
                        display: true,
                        text: 'Grafik Tinggi Badan'
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: true
                    }
                }
            });
            window.myMixedChart = new Chart(ctx3, {
                type: 'line',
                data: chartData3,
                options: {
                    responsive: true,
                    title: {
                        display: true,
                        text: 'Grafik Lingkar Perut'
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: true
                    }
                }
            });
            window.myMixedChart = new Chart(ctx4, {
                type: 'line',
                data: chartData4,
                options: {
                    responsive: true,
                    title: {
                        display: true,
                        text: 'Grafik Lingkar Pinggul'
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: true
                    }
                }
            });
            window.myMixedChart = new Chart(ctx5, {
                type: 'line',
                data: chartData5,
                options: {
                    responsive: true,
                    title: {
                        display: true,
                        text: 'Grafik Lingkar Pergelangan Tangan'
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: true
                    }
                }
            });
            window.myMixedChart = new Chart(ctx6, {
                type: 'line',
                data: chartData6,
                options: {
                    responsive: true,
                    title: {
                        display: true,
                        text: 'Grafik Lingkar Lengan Atas'
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: true
                    }
                }
            });
            window.myMixedChart = new Chart(ctx7, {
                type: 'line',
                data: chartData7,
                options: {
                    responsive: true,
                    title: {
                        display: true,
                        text: 'Grafik Lingkar Lengan Bawah'
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: true
                    }
                }
            });
        };

        
    </script>
  
