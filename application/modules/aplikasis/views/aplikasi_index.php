<div class="col-lg-12">
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Data Export</h4>
        <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
        <div class="table-responsive m-t-40">
            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Kode Aplikasi</th>
                        <th>Pelanggan</th>
                        <th>Barang</th>
                        <th>Tenor</th>
                        <th>DP</th>
                        <th>Angsuran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Kode Aplikasi</th>
                        <th>Pelanggan</th>
                        <th>Barang</th>
                        <th>Tenor</th>
                        <th>DP</th>
                        <th>Angsuran</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                    foreach ($tampil as $baris) {
                ?>
                    <tr>
                        <td><?php echo $baris->aplikasi_kode; ?></td>
                        <td><?php echo $baris->nama; ?></td>
                        <td><?php echo $baris->barang_nama; ?></td>
                        <td><?php echo $baris->tenor; ?></td>
                        <td><?php echo $baris->dp; ?></td>
                        <td><?php echo $baris->angsuran; ?></td>
                        <td>
                            <a href="<?php echo base_url('angsurans/tambah/'.$baris->aplikasi_kode); ?>" class="btn btn-success btn-flat btn-addon btn-sm m-b-10 m-l-5" title="Tambah Angsuran"><i class="fa fa-money"></i></a>
                            <a href="<?php echo base_url('aplikasis/ubah/'.$baris->apliaksi_id); ?>" class="btn btn-primary btn-flat btn-addon btn-sm m-b-10 m-l-5" title="Lihat Data"><i class="fa fa-eye"></i></a>
                            <a class="edit-link btn btn-warning btn-flat btn-addon btn-sm m-b-10 m-l-5" title="Edit Data" href="<?php echo base_url('aplikasis/ubah/'.$baris->apliaksi_id); ?>"><i class="fa fa-edit"></i></a>
                            <a class="hapus-link btn btn-danger btn-flat btn-addon btn-sm m-b-10 m-l-5" title="Hapus Data" href="<?php echo base_url('aplikasis/hapus/'.$baris->apliaksi_id); ?>"><i class="fa fa-trash"></i></a>                          
                        </td>
                    </tr>  
                <?php } ?>                                                              
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>