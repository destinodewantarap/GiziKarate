
<section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
              <div class="col-md-12 heading-section ftco-animate text-center">
                <h4 class="mb-1">Tabel Paket</h4>
                <?php
              $message = $this->session->flashdata('notif');
              $message2 = $this->session->flashdata('notif2');
              $message3 = $this->session->flashdata('notif3');
                if($message){
                  echo '<p class="alert alert-danger text-center">'.$message .'</p>';
            } elseif ($message2) {
                echo '<p class="alert alert-info text-center">'.$message2 .'</p>';
            } elseif ($message3) {
                echo '<p class="alert alert-info text-center">'.$message3 .'</p>';
            }
            ?>
              </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <div class="table-data__tool-left">
                        </div> <br>
                    <button name="tambah" class="btn btn-primary py-3 px-5" data-toggle="modal" data-target="#tambah-paket">Tambah</button><br><br>
                        <table class="table table-bordered text-center" id="mydata">
                            <thead>
                              <tr class="bg-primary text-white">
                                <th>No</th>
                                <th>Id Paket</th>
                                <th>Paket</th>
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
                                    <td><?php echo $row->id_paket ?></td>
                                    <td><?php echo $row->paket ?></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-edit" data-id="<?php echo $row->id_paket;?>" data-paket="<?php echo $row->paket;?>"><button type="submit" class="btn btn-info">Edit</button></a>
                                        <a href="#" class="btn btn-sm btn-delete" data-id="<?php echo $row->id_paket;?>"><button type="submit" class="btn btn-danger">Hapus</button></a>
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

<!-- tambah range -->
    <div class="modal fade" id="tambah-paket" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="largeModalLabel">Tambah Data Paket</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" action="<?php echo base_url('Paket/tambah_paket')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="col-lg-4 col-sm-2 control-label">Id Paket</label>
                                        <input type="text" class="form-control" name="id_paket" value="<?php echo $kode; ?>" >
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="col-lg-4 col-sm-2 control-label">Paket</label>
                                        <input type="text" class="form-control" name="paket" placeholder="Tuliskan Paket (Paket 1)" required oninvalid="this.setCustomValidity('Tuliskan Paket (Paket 1)')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button class="btn btn-info" name="btn-paket" type="submit"> Simpan&nbsp;</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                </div>
            </form>
        </div>
        </div>
      </div>
    </div>
<!-- end tambah paket -->

<!-- edit waktu -->

    <form action="<?php echo base_url('Paket/update_paket')?>" method="post">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Paket</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
                <div class="form-group">
                    <label>Id Paket</label>
                    <input type="text" class="form-control id_paket" name="id_paket" readonly>
                </div>
                 
                <div class="form-group">
                    <label>Paket</label>
                    <input type="text" class="form-control paket" name="paket" placeholder="Paket (Contoh : Paket 1)" required oninvalid="this.setCustomValidity('Tuliskan Paket')" oninput="setCustomValidity('')">
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id_paket" class="id_paket">
                <button type="submit" class="btn btn-info">Update</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                
            </div>
            </div>
        </div>
        </div>
    </form>
<!-- end edit -->

<!-- modal hapus paket -->

    <form action="<?php echo base_url('Paket/hapus_paket')?>" method="post">
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Paket</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
               <h4>Yakin unutk menghapus Paket ?</h4>
              <!--  <?php echo $row->id_menu;?> -->
             
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id_paket" class="productID">
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
          $('#tambah-range').on('show.bs.modal', function (event) {
              var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
              var modal          = $(this)
              // Isi nilai pada field
              modal.find('#id_paket').html(div.data('id_paket'));
              modal.find('#paket').attr("value",div.data('paket'));
          });
      });

      $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const paket = $(this).data('paket');
            // Set data to Form Edit
            $('.id_paket').val(id);
            $('.paket').val(paket);
            // Call Modal Edit
            $('#editModal').modal('show');
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