
<section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
              <div class="col-md-12 heading-section ftco-animate text-center">
                <h4 class="mb-1">Tabel Waktu</h4>
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
                    <button name="tambah" class="btn btn-primary py-3 px-5" data-toggle="modal" data-target="#tambah-waktu">Tambah</button><br><br>
                        <table class="table table-bordered text-center" id="mydata">
                            <thead>
                              <tr class="bg-primary text-white">
                                <th>No</th>
                                <th>Id Waktu</th>
                                <th>Waktu</th>
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
                                    <td><?php echo $row->id_waktu ?></td>
                                    <td><?php echo $row->waktu ?></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-edit" data-id="<?php echo $row->id_waktu;?>" data-waktu="<?php echo $row->waktu;?>"><button type="submit" class="btn btn-info">Edit</button></a>
                                        <a href="#" class="btn btn-sm btn-delete" data-id="<?php echo $row->id_waktu;?>"><button type="submit" class="btn btn-danger">Hapus</button></a>
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

<!-- tambah waktu -->
    <div class="modal fade" id="tambah-waktu" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="largeModalLabel">Tambah Data Waktu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" action="<?php echo base_url('Waktu/tambah_waktu')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="col-lg-4 col-sm-2 control-label">Id Waktu</label>
                                        <input type="text" class="form-control" name="id_waktu" value="<?php echo $kode; ?>">
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="col-lg-4 col-sm-2 control-label">Waktu</label>
                                        <input type="text" class="form-control" name="waktu" placeholder="Tuliskan Waktu (Contoh : Pagi)" required oninvalid="this.setCustomValidity('Tuliskan Waktu')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button class="btn btn-info" name="btn-waktu" type="submit"> Simpan&nbsp;</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                </div>
            </form>
        </div>
        </div>
      </div>
    </div>
<!-- end tambah waktu -->

<!-- edit waktu -->

    <form action="<?php echo base_url('Waktu/update_waktu')?>" method="post">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Waktu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
                <div class="form-group">
                    <label>Id Waktu</label>
                    <input type="text" class="form-control id_waktu" name="id_waktu" readonly>
                </div>
                 
                <div class="form-group">
                    <label>Waktu</label>
                    <input type="text" class="form-control waktu" name="waktu" placeholder="Waktu (Contoh : Pagi)" required oninvalid="this.setCustomValidity('Tuliskan Waktu')" oninput="setCustomValidity('')">
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id_waktu" class="id_waktu">
                <button type="submit" class="btn btn-info">Update</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                
            </div>
            </div>
        </div>
        </div>
    </form>
<!-- end edit -->

<!-- modal hapus menu -->

    <form action="<?php echo base_url('Waktu/hapus_waktu')?>" method="post">
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Waktu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
               <h4>Yakin unutk menghapus Waktu ?</h4>
             
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id_waktu" class="productID">
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
          $('#tambah-waktu').on('show.bs.modal', function (event) {
              var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
              var modal          = $(this)
              // Isi nilai pada field
              modal.find('#id_waktu').html(div.data('id_waktu'));
              modal.find('#waktu').attr("value",div.data('waktu'));
          });
      });

      $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const waktu = $(this).data('waktu');
            // Set data to Form Edit
            $('.id_waktu').val(id);
            $('.waktu').val(waktu);
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