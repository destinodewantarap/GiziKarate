
<section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
              <div class="col-md-12 heading-section ftco-animate text-center">
                <h4 class="mb-1">Tabel Log Hasil</h4>
              </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <div class="table-data__tool-left">
                        </div> <br>
                    
                        <table class="table table-bordered text-center" id="mydata">
                            <thead>
                              <tr class="bg-primary text-white">
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Status Gizi</th>
                                <th>Menu</th>
                                <th>Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                        foreach ($data2 as $row):
                                ?>
                                <tr>
                                    <td><?php echo $no;?></td>
                                    <td><?php echo $row->tgl_input ?></td>
                                    <td><?php echo $row->status_gizi ?></td>
                                    <td><?php echo $row->id_range ?></td>
                                    <td> 
                                        <a href="<?php echo base_url(); ?>Hasil/menu/<?php echo $row->id_user;?>" class="btn btn-sm btn-edit" ><button type="submit" class="btn btn-info">Lihat Menu</button></a>
                                    </td>    
                                </tr>
                                <?php $no++;
                                endforeach;?>       
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Intro section -->
    <section class="intro-section">
        <div class="text-white">
            <br>
            
        </div>
        
    </section>
        <!-- Intro section -->
    <section class="intro-section">
        <div class="text-white">
            <br>
            <center><h3></h3></center> 
        </div>
        
    </section>
    <!-- Intro section end -->

    <!-- Intro section end -->

