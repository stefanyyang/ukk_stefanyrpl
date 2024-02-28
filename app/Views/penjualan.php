<div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"></h4>
                    <p class="card-description"> </code>
                    </p>
                    <div class="table-responsive">

                       <a href="<?= base_url('/home/tambah_penjualan/')?>"><button class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button></a>
                  <h1></h1>


                      <table class="table table-bordered table-contextual">
                        <thead>
                          <tr>
                            <th> No </th>
                            <th> Tanggal Penjualan </th>
                            <th> Total Harga  </th>
                            <th> Pembeli </th>

                           
                               <th>action</th>
                          
                          </tr>
                        </thead>
                     
                     <tbody>
                        <?php
                    $no=1;
                    foreach ($octa as $evan){
                      ?>
                      <tr>
                        <th><?php echo $no++ ?></th>
                        <td><?php echo $evan->tgl_penjualan?></td>
                        <td><?php echo $evan->ttlharga?></td>
                        
                       
                        
                        <td>


                          <a href="<?= base_url('/home/edit_penjualan/'.$evan->id_penjualan)?>"><button class="btn btn-warning"><i class="fa fa-edit"></i>Edit </button></a>
                          <a href="<?= base_url('/home/delete_penjualan/'.$evan->id_penjualan)?>"><button class="btn btn-danger"><i class="fa fa-trash"></i>Hapus </button></a>
                        </td>
                      </tr>

                    <?php }?>
                       </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
