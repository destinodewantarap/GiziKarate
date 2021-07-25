
<section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
              <div class="col-md-12 heading-section ftco-animate text-center">
                <h4 class="mb-1">Tabel Atlet</h4>
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
                                <th>Nama Atlet</th>
                                <!-- <th>Jenis Kelamin</th> -->
                                <th>Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                        foreach ($data as $row):
                                ?>
                                <tr>
                                    <td><?php echo $no;?></td>
                                    <td><?php echo $row->nama_lengkap ?></td>
                                    <!-- <td><?php echo $row->jenis_kelamin ?></td> -->
                                    <td>
                                        <a href="<?php echo base_url(); ?>Atlet/grafik/<?php echo $row->id_login;?>" class="btn btn-sm btn-edit" ><button type="submit" class="btn btn-info">Grafik</button></a>
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
