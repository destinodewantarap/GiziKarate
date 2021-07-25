
<div class="col-sm-12 widget-container-col ui-sortable">
    <div class="widget-box ui-sortable-handle">
        <div style="margin-top: 15px;" class="widget-header widget-header-small">
            <center><h2>Menu Makanan</h2>
                <h5>Range : <?php foreach ($a_range as $row){
                echo $row->range1.'-'.$row->range2; 
            }
            ?></h5>
            </center>
            
            <ul class="nav nav-tabs" style="margin-top: 15px;" id="myTab">
                <li class="active">
                    <a data-toggle="tab" href="#paket1"><button class="btn btn-info">Paket 1</button></a>
                </li>
                <li>
                    <a data-toggle="tab" href="#paket2"><button class="btn btn-info">Paket 2</button></a>
                </li>
                <li>
                    <a data-toggle="tab" href="#paket3"><button class="btn btn-info">Paket 3</button></a>
                </li>
            </ul>
        </div>
        <div class="widget-body">
            <div class="widget-main padding-6">
                <div class="tab-content">
                    <div id="paket1" class="tab-pane in active">
                        <form class="form-horizontal" role="form" enctype="multipart/form-data">
                            <input type="hidden" name="id_beranda"/>
                            <div class="form-body">
                                <div class="form-group" >
                                    <table class="table table-borderless table-striped table-striped table-earning">
                                        <thead>
                                            <tr class="bg-primary text-white">
                                                <th>No</th>
                                                <th>Paket</th>
                                                <th>Waktu</th>
                                                <th>Menu</th>
                                                <th>Bahan</th>
                                                <th>Berat (Gram)</th>
                                                <th>Energi (Kkal)</th>
                                                <th>Protein (Gram)</th>
                                                <th>Lemak (Gram)</th>
                                                <th>Kh (Gram)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                             $no = 1;
                                                foreach ($menu1 as $row):
                                            ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td><?php echo $row->paket ?></td>
                                                <td><?php echo $row->waktu ?></td>
                                                <td><?php echo $row->nama_menu ?></td>
                                                <td><?php echo $row->bahan ?></td>
                                                <td><?php echo $row->berat ?></td>
                                                <td><?php echo $row->energi ?></td>
                                                <td><?php echo $row->protein ?></td>
                                                <td><?php echo $row->lemak ?></td>
                                                <td><?php echo $row->kh ?></td>    
                                            </tr>
                                            <?php $no++;
                                            endforeach;?>       
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="paket2" class="tab-pane">
                        <form class="form-horizontal" role="form" id="form">
                            <div class="form-body">
                                <div class="form-group">
                                    <table class="table table-borderless table-striped table-striped table-earning">
                                        <thead>
                                            <tr class="bg-primary text-white">
                                                <th>No</th>
                                                <th>Paket</th>
                                                <th>Waktu</th>
                                                <th>Menu</th>
                                                <th>Bahan</th>
                                                <th>Berat (Gram)</th>
                                                <th>Energi (Kkal)</th>
                                                <th>Protein (Gram)</th>
                                                <th>Lemak (Gram)</th>
                                                <th>Kh (Gram)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                             $no = 1;
                                                foreach ($menu2 as $row):
                                            ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td><?php echo $row->paket ?></td>
                                                <td><?php echo $row->waktu ?></td>
                                                <td><?php echo $row->nama_menu ?></td>
                                                <td><?php echo $row->bahan ?></td>
                                                <td><?php echo $row->berat ?></td>
                                                <td><?php echo $row->energi ?></td>
                                                <td><?php echo $row->protein ?></td>
                                                <td><?php echo $row->lemak ?></td>
                                                <td><?php echo $row->kh ?></td>    
                                            </tr>
                                            <?php $no++;
                                            endforeach;?>       
                                        </tbody>
                                    </table>
                                </div>
                            </div>                        
                        </form>
                    </div>
                    <div id="paket3" class="tab-pane">
                        <form class="form-horizontal" role="form" id="form">
                            <div class="form-body">
                                <table class="table table-borderless table-striped table-striped table-earning">
                                        <thead>
                                            <tr class="bg-primary text-white">
                                                <th>No</th>
                                                <th>Paket</th>
                                                <th>Waktu</th>
                                                <th>Menu</th>
                                                <th>Bahan</th>
                                                <th>Berat (Gram)</th>
                                                <th>Energi (Kkal)</th>
                                                <th>Protein (Gram)</th>
                                                <th>Lemak (Gram)</th>
                                                <th>Kh (Gram)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                             $no = 1;
                                                foreach ($menu3 as $row):
                                            ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td><?php echo $row->paket ?></td>
                                                <td><?php echo $row->waktu ?></td>
                                                <td><?php echo $row->nama_menu ?></td>
                                                <td><?php echo $row->bahan ?></td>
                                                <td><?php echo $row->berat ?></td>
                                                <td><?php echo $row->energi ?></td>
                                                <td><?php echo $row->protein ?></td>
                                                <td><?php echo $row->lemak ?></td>
                                                <td><?php echo $row->kh ?></td>    
                                            </tr>
                                            <?php $no++;
                                            endforeach;?>       
                                        </tbody>
                                    </table>
                            </div>                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
