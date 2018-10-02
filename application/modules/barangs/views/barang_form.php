<div class="col-lg-10">
    <div class="card card-outline-primary">
        <div class="card-header">
            <h4 class="m-b-0 text-white">Form <?php echo (isset($barang)) ? 'Update Barang Lama' : 'Barang Baru'; ?></h4>
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
                                <label class="control-label">Nama</label>
                                <input type="text" id="barang_nama" name="barang_nama" class="form-control" value="<?php echo (isset($barang[0])) ? $barang[0]['barang_nama'] : ''; ?>" required>
                                <small class="form-control-feedback"> Isi nama </small> 
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Harga</label>
                                <input type="text" id="harga" name="harga" class="form-control" value="<?php echo (isset($barang[0])) ? $barang[0]['harga'] : ''; ?>" required>
                                <small class="form-control-feedback"> Isi harga </small> 
                            </div>
                        </div>
                    <!--/span-->
                    </div>
                    <!--/row-->

                    <div class="row" hidden>
                        <div class="col-md-6">
                            <div class="form-group has-success">
                                <label class="control-label">Gender</label>
                                <select class="form-control custom-select" name="gender">
                                    <option value="pria">Male</option>
                                    <option value="perempuan">Female</option>
                                </select>
                                <small class="form-control-feedback"> Select your gender </small> 
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="lahir" placeholder="dd/mm/yyyy" value="<?php echo (isset($user[0])) ? $user[0]['nama'] : ''; ?>">
                                <small class="form-control-feedback"> </small> 
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row p-t-20">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Password</label>
                                <small class="form-control-feedback"><?php echo form_error('password', '<div class="alert alert-danger" >', '</div>'); ?> </small> 
                                <input type="password" id="password" name="password" class="form-control" value="<?php echo (isset($user[0]['password'])) ? $user[0]['password'] : ''; ?>" required>
                                <small class="form-control-feedback"> password lebih dari 6 karaker</small> 
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group has-danger">
                                <label class="control-label">Konfirmasi Password</label>
                                <small class="form-control-feedback"><?php echo form_error('konfirmasi_password', '<div class="alert alert-danger" >', '</div>'); ?> </small> 
                                <input type="password" id="konfirmasi_password" name="konfirmasi_password" class="form-control form-control-danger" value="<?php echo (isset($user[0]['password'])) ? $user[0]['password'] : ''; ?>" required>
                                <small class="form-control-feedback"> tulis ulang password <?php echo form_error('field name', '<div class="error">', '</div>'); ?> </small>
                                
                            </div>
                        </div>
                    <!--/span-->
                    </div>
                    <div class="row p-t-20">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">No KTP</label>
                                <small class="form-control-feedback"><?php echo form_error('no_ktp', '<div class="alert alert-danger" >', '</div>'); ?> </small> 
                                <input type="number" id="firstName" name="no_ktp" required class="form-control" value="<?php echo (isset($user[0])) ? $user[0]['no_ktp'] : ''; ?>">
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group has-danger">
                                <label class="control-label">No Handphone</label>
                                <small class="form-control-feedback"><?php echo form_error('no_hp', '<div class="alert alert-danger" >', '</div>'); ?> </small> 
                                <input type="number" id="no_hp" name="no_hp" required class="form-control form-control-danger" value="<?php echo (isset($user[0])) ? $user[0]['handphone'] : ''; ?>">
                                <small class="form-control-feedback"> This field has error. </small> 
                            </div>
                        </div>
                    <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row p-t-20">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Level</label>
                                <select class="form-control custom-select" name="level" required>
                                    <option value="admin" <?php echo (isset($user[0]) && $user[0]['level'] == 'admin') ? 'selected' : ''; ?> >Administrator</option>
                                    <option value="owner" <?php echo (isset($user[0]) && $user[0]['level'] == 'owner') ? 'selected' : ''; ?>>Owner</option>
                                    <option value="member" <?php echo (isset($user[0]) && $user[0]['level'] == 'member') ? 'selected' : ''; ?>>Pelanggan</option>
                                </select>
                            </div>
                        </div>
                        <!--/span-->
                       
                    </div>
                    <!--/row-->

                    <h3 class="box-title m-t-40">Address</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="form-group">
                                <label>Street</label>
                                <input type="text" class="form-control" name="alamat" required value="<?php echo (isset($user[0])) ? $user[0]['alamat'] : ''; ?>">
                                <small class="form-control-feedback"> isi alamat sesuai KTP.</small>
                            </div>
                        </div>
                    </div>
                    <div class="row" hidden>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>State</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row" hidden>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Post Code</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Country</label>
                                <select class="form-control custom-select">
                                    <option>--Select your Country--</option>
                                    <option>India</option>
                                    <option>Sri Lanka</option>
                                    <option>USA</option>
                                </select>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-success" name="submit"> <i class="fa fa-check"></i> Simpan</button>
                    <button type="button" class="btn btn-inverse">Batalkan</button>
                </div>
            </form>
        </div>
    </div>
</div>