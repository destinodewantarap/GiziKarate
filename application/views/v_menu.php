
<section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-12 heading-section ftco-animate text-center">
            <h4 class="mb-1">Tabel Menu Makanan Atlet Karate</h4>
            <?php
              $message = $this->session->flashdata('notif');
              $message2 = $this->session->flashdata('notif2');
              $message3 = $this->session->flashdata('notif3');
              $message4 = $this->session->flashdata('range');
              $message5 = $this->session->flashdata('paket');
              $message6 = $this->session->flashdata('waktu');
                if($message){
                  echo '<p class="alert alert-danger text-center">'.$message .'</p>';
            } elseif ($message2) {
                echo '<p class="alert alert-info text-center">'.$message2 .'</p>';
            } elseif ($message3) {
                echo '<p class="alert alert-info text-center">'.$message3 .'</p>';
            }elseif ($message4 && $message5 && $message6) {
                echo '<p class="alert alert-info text-center">'.$message4.', '.$message5.', '.$message6.'</p>';
            }elseif ($message4 || $message5 || $message6) {
                echo '<p class="alert alert-info text-center">'.$message4.' '.$message5.' '.$message6.'</p>';
            }
            // elseif ($filter2) {
            //     echo $filter2;
            // }elseif ($filter3) {
            //     echo $filter3;
            // }
            ?>
          </div>
        </div>
            <div class="row">
          <div class="col-md-12">
            <div class="table-responsive">
                <div class="table-data__tool-left">
                    <form method="get" action="<?php echo base_url('menuAtlet')?>" >
                        <b><h4>Filter :</h4></b>
                        <div class="col-md-12">
                            <div class="rs-select2--light rs-select2--sm">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div id="form-range">
                                            <select name="range" class="form-control">
                                                <option value="">Pilih Range</option>
                                                <?php
                                                foreach($option_range as $filter){
                                                    echo '<option value="'.$filter->id_range.'">'.$filter->range1.'-'.$filter->range2.'</option>';
                                                }
                                                ?>  
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div id="form-paket">
                                            <select name="paket" class="form-control">
                                                <option value="">Pilih Paket</option>
                                                <?php
                                                foreach($option_paket as $filter){ // Ambil data tahun dari model yang dikirim dari controller
                                                    echo '<option value="'.$filter->id_paket.'">'.$filter->paket.'</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div id="form-waktu">
                                            <select name="waktu" class="form-control">
                                                <option value="">Pilih Waktu</option>
                                                <?php
                                                foreach($option_waktu as $filter){ // Ambil data tahun dari model yang dikirim dari controller
                                                    echo '<option value="'.$filter->id_waktu.'">'.$filter->waktu.'</option>';
                                                }
                                                ?>  
                                            </select>
                                        </div>
                                    </div>
                                        <div class="dropDownSelect2"></div>
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-info">Tampilkan</button>&nbsp;&nbsp;
                                    <a href="<?php echo base_url('menuAtlet'); ?>" class="btn btn-warning">Reset Filter</a>
                                    </div>
                                     </div>
                                </div>
                                
                            </div>
                    </form> 
                </div> <br>
                <button name="tambah" class="btn btn-primary py-3 px-5" data-toggle="modal" data-target="#tambah-menu">Tambah Menu</button>
                <button name="tambah1" class="btn btn-primary py-3 px-5" data-toggle="modal" data-target="#tambah-bahan">Tambah Bahan</button>
                <button name="tambah2" class="btn btn-primary py-3 px-5" data-toggle="modal" data-target="#tambah-detail">Tambah Detail</button>
                <br><br>
                <!-- <b><?php echo $ket; ?></b> -->
              <table class="table table-bordered text-center" id="mydata">
                <thead>
                  <tr class="bg-primary text-white">
                    <th>No</th>
                    <th>Range</th>
                    <th>Paket</th>
                    <th>Waktu</th>
                    <th>Menu</th>
                    <th>Bahan</th>
                    <th>Berat (Gram)</th>
                    <th>Energi (Kkal)</th>
                    <th>Protein (Gram)</th>
                    <th>Lemak (Gram)</th>
                    <th>Kh (Gram)</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                                 $no =  1;
                                    foreach ($data as $row):
                                ?>
                                <tr>
                                    <td><?php echo $no;?></td>
                                    <td><?php echo $row->range1 ?> - <?php echo $row->range2 ?></td>
                                    <td><?php echo $row->paket ?></td>
                                    <td><?php echo $row->waktu ?></td>
                                    <td><?php echo $row->nama_menu ?></td>
                                    <td><?php echo $row->bahan ?></td>
                                    <td><?php echo $row->berat ?></td>
                                    <td><?php echo $row->energi ?></td>
                                    <td><?php echo $row->protein ?></td>
                                    <td><?php echo $row->lemak ?></td>
                                    <td><?php echo $row->kh ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>menuAtlet/edit_menu/<?php echo $row->id_menu;?>"><button type="submit" class="btn btn-info">Edit</button></a>
                                        <a href="#" class="btn btn-sm btn-delete" data-id="<?php echo $row->id_menu;?>"><button type="submit" class="btn btn-danger">Hapus</button></a>
                                    </td>    
                                </tr>
                                <?php $no++;
                                endforeach;?>       
                </tbody>
              </table>
            </div>
            <!-- <?php   
            echo $data['pagination'];  ?> -->
          </div>
        </div>
        </div>
    </section>

<!-- tambah menu -->
    <div class="modal fade" id="tambah-menu" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="largeModalLabel">Tambah Data Menu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" action="<?php echo base_url('menuAtlet/tambah_menu')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                        <div class="form-group">

                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="col-lg-4 col-sm-2 control-label">Id Menu</label>
                                        <input type="text" class="form-control" name="id_menu" value="<?php echo $kode; ?>" readonly>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="col-lg-4 col-sm-2 control-label">Nama Menu</label>
                                        <input type="text" class="form-control" name="nama_menu" placeholder="Tuliskan Nama Menu" required oninvalid="this.setCustomValidity('Tuliskan Nama Menu')" oninput="setCustomValidity('')">
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button class="btn btn-info" name="btn-menu" type="submit"> Simpan&nbsp;</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                </div>
            </form>
        </div>
        </div>
      </div>
    </div>
<!-- end tambah menu -->

<!-- tambah bahan menu -->
    <div class="modal fade" id="tambah-bahan" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="largeModalLabel">Tambah Data Bahan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" action="<?php echo base_url('menuAtlet/tambah_bahan')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h5><label class="control-label">Nama Menu</label></h5>
                                    </div>
                                    <div class="col-lg-8">
                                        <select name="id_menu" class="form-control">
                                            <option value="" class="form-control">Pilih Menu</option>
                                            <?php
                                                foreach($option_menu as $data){ 
                                                    echo '<option value="'.$data->id_menu.'">'.$data->id_menu.'-'.$data->nama_menu.'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" name="bahan" placeholder="Tuliskan Bahan" required oninvalid="this.setCustomValidity('Tuliskan Bahan')" oninput="setCustomValidity('')">
                                        <input type="text" class="form-control" name="berat" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required oninvalid="this.setCustomValidity('Maaf Tidak Falid')" placeholder="Tuliskan Berat (kg)" required oninvalid="this.setCustomValidity('Tuliskan Berat (kg)')" oninput="setCustomValidity('')">
                                        
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" name="lemak" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required oninvalid="this.setCustomValidity('Maaf Tidak Falid')" placeholder="Tuliskan Lemak" required oninvalid="this.setCustomValidity('Tuliskan Lemak')" oninput="setCustomValidity('')">
                                        <input type="text" class="form-control" name="energi" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required oninvalid="this.setCustomValidity('Maaf Tidak Falid')" placeholder="Tuliskan Energi" required oninvalid="this.setCustomValidity('Tuliskan Energi')" oninput="setCustomValidity('')">
                                        
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" name="protein" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required oninvalid="this.setCustomValidity('Maaf Tidak Falid')" placeholder="Tuliskan Protein" required oninvalid="this.setCustomValidity('Tuliskan Protein')" oninput="setCustomValidity('')">
                                        <input type="text" class="form-control" name="kh" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required oninvalid="this.setCustomValidity('Maaf Tidak Falid')" placeholder="Tuliskan kh" required oninvalid="this.setCustomValidity('Tuliskan kh')" oninput="setCustomValidity('')">
                                        
                                    </div>

                                </div>
                                 
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button class="btn btn-info" name="btn-bahan" type="submit"> Simpan&nbsp;</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                </div>
            </form>
        </div>
        </div>
      </div>
    </div>
<!-- end tambah bahan menu -->


<!-- tambah detai menu -->
    <div class="modal fade" id="tambah-detail" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="largeModalLabel">Tambah Data Detail Menu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" action="<?php echo base_url('menuAtlet/tambah_detail')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label class="col-lg-4 col-sm-2 control-label">Range</label>
                                            <select name="id_range" class="form-control">
                                                <option value="" class="form-control" >Pilih</option>
                                                <?php
                                                    foreach($option_range as $data){ 
                                                        echo '<option value="'.$data->id_range.'">'.$data->range1.'-'.$data->range2.'</option>';
                                                    }
                                                ?>
                                            </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="col-lg-4 col-sm-2 control-label">Paket</label>
                                            <select name="id_paket" class="form-control">
                                                <option value="" class="form-control">Pilih</option>
                                                <?php
                                                    foreach($option_paket as $data){ 
                                                        echo '<option value="'.$data->id_paket.'">'.$data->paket.'</option>';
                                                    }
                                                ?>
                                            </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="col-lg-4 col-sm-2 control-label">Waktu</label>
                                        <select name="id_waktu" class="form-control">
                                            <option value="" class="form-control">Pilih</option>
                                            <?php
                                                foreach($option_waktu as $data){ 
                                                    echo '<option value="'.$data->id_waktu.'">'.$data->waktu.'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="col-lg-4 col-sm-2 control-label">Nama Menu</label>
                                        <select name="id_menu" class="form-control">
                                            <option value="" class="form-control">Pilih Menu</option>
                                            <?php
                                                foreach($option_menu as $data){ 
                                                    echo '<option value="'.$data->id_menu.'">'.$data->id_menu.'-'.$data->nama_menu.'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                </div>
            </form>
        </div>
        </div>
      </div>
    </div>
<!-- end tambah detail menu -->

<!-- modal hapus menu -->

    <form action="<?php echo base_url('menuAtlet/hapus_menu')?>" method="post">
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
               <h4>Yakin unutk menghapus Menu ?</h4>
              <!--  <?php echo $row->id_menu;?> -->
             
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id_menu" class="productID">
                <button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-danger">Hapus</button>
            </div>
            </div>
        </div>
        </div>
    </form>

      
<!-- end modal hapus -->

<script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>

<script>
      $(document).ready(function() {
          $('#tambah-menu').on('show.bs.modal', function (event) {
              var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
              var modal          = $(this)
              // Isi nilai pada field
              modal.find('#nama_menu').attr("value",div.data('nama_menu'));
          });
      });
      $(document).ready(function() {
          $('#tambah-bahan').on('show.bs.modal', function (event) {
              var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
              var modal          = $(this)
              // Isi nilai pada field
              modal.find('#id_menu').html(div.data('id_menu'));
              modal.find('#bahan').attr("value",div.data('bahan'));
              modal.find('#berat').attr("value",div.data('berat'));
              modal.find('#energi').attr("value",div.data('energi'));
              modal.find('#protein').attr("value",div.data('protein'));
              modal.find('#lemak').attr("value",div.data('lemak'));
              modal.find('#kh').attr("value",div.data('kh'));
          });
      });
      $(document).ready(function() {
          $('#tambah-detail').on('show.bs.modal', function (event) {
              var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
              var modal          = $(this)
              // Isi nilai pada field
              modal.find('#id_range').html(div.data('id_range'));
              modal.find('#id_paket').html(div.data('id_paket'));
              modal.find('#id_waktu').html(div.data('id_waktu'));
              modal.find('#id_menu').html(div.data('id_menu'));
          });
      });
      $(document).ready(function() {
           $('.btn-delete').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            // Set data to Form Edit
            $('.productID').val(id);
            // Call Modal Edit
            $('#deleteModal').modal('show');
        });
      });
  </script>