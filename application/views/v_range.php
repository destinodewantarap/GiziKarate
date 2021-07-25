
<section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
              <div class="col-md-12 heading-section ftco-animate text-center">
                <h4 class="mb-1">Tabel Range</h4>
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
                    <button name="tambah" class="btn btn-primary py-3 px-5" data-toggle="modal" data-target="#tambah-range">Tambah</button><br><br>
                        <table class="table table-bordered text-center" id="mydata">
                            <thead>
                              <tr class="bg-primary text-white">
                                <th>No</th>
                                <th>Id Range</th>
                                <th>Range 1</th>
                                <th>Range 2</th>
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
                                    <td><?php echo $row->id_range ?></td>
                                    <td><?php echo $row->range1 ?></td>
                                    <td><?php echo $row->range2 ?></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-edit" data-id="<?php echo $row->id_range;?>" data-range1="<?php echo $row->range1;?>" data-range2="<?php echo $row->range2;?>"><button type="submit" class="btn btn-info">Edit</button></a>
                                        <a href="#" class="btn btn-sm btn-delete" data-id="<?php echo $row->id_range;?>"><button type="submit" class="btn btn-danger">Hapus</button></a>
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
    <div class="modal fade" id="tambah-range" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="largeModalLabel">Tambah Data Range</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" action="<?php echo base_url('Range/tambah_range')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label class="control-label">Id Range</label>
                                        <input type="text" class="form-control" name="id_range" value="<?php echo $kode; ?>" >
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="control-label">Range 1</label>
                                        <input type="text" class="form-control" name="range1" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required oninvalid="this.setCustomValidity('Maaf Tidak Falid')" placeholder="Tuliskan Range 1" required oninvalid="this.setCustomValidity('Tuliskan Range 1')" oninput="setCustomValidity('')">
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="control-label">Range 2</label>
                                        <input type="text" class="form-control" name="range2" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required oninvalid="this.setCustomValidity('Maaf Tidak Falid')" placeholder="Tuliskan Range 2" required oninvalid="this.setCustomValidity('Tuliskan Range 2')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button class="btn btn-info" name="btn-range" type="submit"> Simpan&nbsp;</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                </div>
            </form>
        </div>
        </div>
      </div>
    </div>
<!-- end tambah range -->

<!-- edit range -->

    <form action="<?php echo base_url('Range/update_range')?>" method="post">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Range</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
                <div class="form-group">
                    <label>Id Range</label>
                    <input type="text" class="form-control id_range" name="id_range" readonly>
                </div>
                 
                <div class="form-group">
                    <label>Range 1</label>
                    <input type="text" class="form-control range1" name="range1" placeholder="Masukan Range 1" required oninvalid="this.setCustomValidity('Masukan Range 1')" oninput="setCustomValidity('')">
                </div>
                <div class="form-group">
                    <label>Range 2</label>
                    <input type="text" class="form-control range2" name="range2" placeholder="Masukan Range 2" required oninvalid="this.setCustomValidity('Masukan Range 2')" oninput="setCustomValidity('')">
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id_range" class="id_range">
                <button type="submit" class="btn btn-info">Update</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                
            </div>
            </div>
        </div>
        </div>
    </form>
<!-- end edit -->


<!-- modal hapus rang-->

    <form action="<?php echo base_url('Range/hapus_range')?>" method="post">
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Range</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
               <h4>Yakin unutk menghapus Range ?</h4>
              <!--  <?php echo $row->id_menu;?> -->
             
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id_range" class="productID">
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
              modal.find('#id_range').html(div.data('id_range'));
              modal.find('#range1').attr("value",div.data('range1'));
              modal.find('#range2').attr("value",div.data('range2'));
          });
      });

      $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const range1 = $(this).data('range1');
            const range2 = $(this).data('range2');
            // Set data to Form Edit
            $('.id_range').val(id);
            $('.range1').val(range1);
            $('.range2').val(range2);
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