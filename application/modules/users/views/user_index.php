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
                        <th>No Ktp</th>
                        <th>Level</th>
                        <th>Email</th>
                        <th>No Hp</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>No Ktp</th>
                        <th>Level</th>
                        <th>Email</th>
                        <th>No Hp</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                    foreach ($tampil as $baris) {
                ?>
                    <tr>
                        <td><?php echo $baris->nama; ?></td>
                        <td><?php echo $baris->no_ktp; ?></td>
                        <td><?php echo $baris->level; ?></td>
                        <td><?php echo $baris->email; ?></td>
                        <td><?php echo $baris->handphone; ?></td>
                        <td><?php echo substr($baris->alamat, 0,12); ?>..</td>
                        <td>
                            <a href="<?php echo 'users/ubah/'.$baris->user_id; ?>">Lihat</a>
                            <a class="edit-link" href="<?php echo 'users/ubah/'.$baris->user_id; ?>">Edit</a>
                            <a class="hapus-link" href="<?php echo 'users/hapus/'.$baris->user_id; ?>">Hapus</a>                          
                        </td>
                    </tr>  
                <?php } ?>                                                              
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>