<div class="col-lg-10">
    <div class="card card-outline-primary">
        <div class="card-header">
            <h4 class="m-b-0 text-white">Form <?php echo (isset($aplikasi)) ? 'Update Barang Lama' : 'Aplikasi Baru'; ?></h4>
        </div>
        <div class="card-body">
            
            <form action="#" method="post">                
                <div class="form-body">
                    <h3 class="card-title m-t-15">Info Personal</h3>
                    <hr>
                    <?php echo validation_errors('<div class="alert alert-danger alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>'); ?>
                    
                   
                    <div class="row p-t-20">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Aplikasi Kode</label>
                                <input type="text" id="aplikasi_kode" name="aplikasi_kode" class="form-control" value="<?php echo (isset($aplikasi[0])) ? $aplikasi[0]['aplikasi_kode'] : ''; ?>" required>
                                <small class="form-control-feedback"> Isi aplikasi kode </small> 
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Barang</label>
                                <select class="form-control custom-select" name="barang" required>
                                    <?php
                                        foreach ($barang as $baris) {
                                            echo "<option value='".$baris->barang_id."'>$baris->barang_nama</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">User</label>
                                <select class="form-control custom-select" name="user" required>
                                    <option value="admin" <?php echo (isset($user[0]) && $user[0]['level'] == 'admin') ? 'selected' : ''; ?> >Administrator</option>
                                    <option value="owner" <?php echo (isset($user[0]) && $user[0]['level'] == 'owner') ? 'selected' : ''; ?>>Owner</option>
                                    <option value="member" <?php echo (isset($user[0]) && $user[0]['level'] == 'member') ? 'selected' : ''; ?>>Pelanggan</option>
                                </select>
                            </div>
                        </div>
                        <!--/span-->
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Barang Harga</label>
                                <input type="text" id="barang_harga" name="barang_harga" class="form-control" value="" required readonly="">
                                <small class="form-control-feedback">  </small> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Barang Insentif</label>
                                <input type="text" id="barang_insentif" name="barang_insentif" class="form-control" value="" required readonly="">
                                <small class="form-control-feedback">  </small> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">DP</label>
                                <input type="text" id="dp" name="dp" class="form-control" value="<?php echo (isset($aplikasi[0])) ? $aplikasi[0]['aplikasi_dp'] : ''; ?>" required>
                                <small class="form-control-feedback"> Isi DP </small> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Angsuran</label>
                                <input type="text" id="angsuran" name="angsuran" class="form-control" value="<?php echo (isset($aplikasi[0])) ? $aplikasi[0]['aplikasi_angsuran'] : ''; ?>" required>
                                <small class="form-control-feedback"> Isi angsuran </small> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Tenor</label>
                                <input type="text" id="tenor" name="tenor" class="form-control" value="" required readonly="">
                                <small class="form-control-feedback">  </small> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Total</label>
                                <input type="text" id="total" name="total" class="form-control" value="" required readonly="">
                                <small class="form-control-feedback">  </small> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Tanggal Berlaku</label>
                                <input type="date" id="tanggal_berlaku" name="tanggal_berlaku" class="form-control" value="" required>
                                <small class="form-control-feedback">  </small> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Awal Tempo</label>
                                <input type="text" id="awal_tempo" name="awal_tempo" class="form-control" value="" required>
                                <small class="form-control-feedback">  </small> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Jatuh Tempo</label>
                                <input type="text" id="jatuh_tempo" name="jatuh_tempo" class="form-control" value="" required>
                                <small class="form-control-feedback">  </small> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Status</label>
                                <select class="form-control custom-select" name="user" required>
                                    <option value="diterima" <?php echo (isset($user[0]) && $aplikasi[0]['status'] == 'diterima') ? 'selected' : ''; ?> >Diterima</option>
                                    <option value="berjalan" <?php echo (isset($user[0]) && $aplikasi[0]['status'] == 'berjalan') ? 'selected' : ''; ?>>Berjalan</option>
                                    <option value="break" <?php echo (isset($user[0]) && $aplikasi[0]['status'] == 'break') ? 'selected' : ''; ?>>Break</option>
                                </select>
                            </div>
                        </div>
                    <!--/span-->
                    </div>
                    <!--/row-->
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-success" name="submit"> <i class="fa fa-check"></i> Simpan</button>
                    <button type="button" class="btn btn-inverse">Batalkan</button>
                </div>
            </form>
        </div>
    </div>
</div>