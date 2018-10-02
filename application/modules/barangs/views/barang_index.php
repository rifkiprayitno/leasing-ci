<div class="col-lg-12">
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Data Export</h4>
        <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
        <div class="table-responsive m-t-40">
            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Insentif</th>
                        <th>Detail</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Insentif</th>
                        <th>Detail</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                    foreach ($tampil as $baris) {
                ?>
                    <tr>
                        <td><?php echo $baris->barag_nama; ?></td>
                        <td><?php echo $baris->harga; ?></td>
                        <td><?php echo $baris->insentif; ?></td>
                        <td><?php echo $baris->detail; ?></td>
                        <td>
                            <a href="<?php echo 'users/ubah/'.$baris->barang_id; ?>">Lihat</a>
                            <a class="edit-link" href="<?php echo 'users/ubah/'.$baris->barang_id; ?>">Edit</a>
                            <a class="hapus-link" href="<?php echo 'users/hapus/'.$baris->barang_id; ?>">Hapus</a>                          
                        </td>
                    </tr>  
                <?php } ?>                                                              
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>