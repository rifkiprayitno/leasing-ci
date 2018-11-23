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
                            <a href="<?php echo base_url('users/ubah/'.$baris->user_id); ?>" class="btn btn-primary btn-flat btn-addon btn-sm m-b-10 m-l-5" title="Lihat Data"><i class="fa fa-eye"></i></a>
                            <a class="edit-link btn btn-warning btn-flat btn-addon btn-sm m-b-10 m-l-5" title="Edit Data" href="<?php echo base_url('users/ubah/'.$baris->user_id); ?>"><i class="fa fa-edit"></i></a>
                            <a class="hapus-link btn btn-danger btn-flat btn-addon btn-sm m-b-10 m-l-5" title="Hapus Data" href="<?php echo base_url('users/hapus/'.$baris->user_id); ?>"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>  
                <?php } ?>                                                              
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>