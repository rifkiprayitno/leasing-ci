<div class="content">
<div class="animated fadeIn">
<div class="row">

<div class="col-lg-12">
    <div class="card card-outline-primary">
        <div class="card-header">
            <h4 class="m-b-0 text-black">Form <?php echo (isset($user[0])) ? 'Update User Lama' : 'User Baru'; ?></h4>
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
                                <input type="text" id="nama" name="nama" class="form-control" value="<?php echo (isset($user[0])) ? $user[0]['nama'] : ''; ?>" required>
                                <small class="form-control-feedback"> Isi nama sesuai KTP </small> 
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group has-danger">
                                <label class="control-label">Email</label>
                                <small class="form-control-feedback"><?php echo form_error('email', '<div class="alert alert-danger" >', '</div>'); ?> </small> 
                                <input type="text" id="email" name="email" class="form-control form-control-danger" value="<?php echo (isset($user[0])) ? $user[0]['email'] : ''; ?>" required>
                                <small class="form-control-feedback"> This field has error. </small> 
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
                                    <option value="collector" <?php echo (isset($user[0]) && $user[0]['level'] == 'collector') ? 'selected' : ''; ?>>Collection</option>
                                    <option value="sales" <?php echo (isset($user[0]) && $user[0]['level'] == 'sales') ? 'selected' : ''; ?>>Sales</option>
                                </select>
                            </div>
                        </div>
                        <!--/span-->
                       
                    </div>
                    <!--/row-->

                    <h3 class="box-title m-t-40">Alamat</h3>
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


</div><!-- .row -->
</div><!-- .animated -->
</div><!-- .content -->

<script src="<?php echo base_url('new_assets/js/vendor/jquery-2.1.4.min.js'); ?>"></script>
<!-- script validasi ulang password   -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#konfirmasi_password').change(function(){
        var passpertama=$('#password').val();
        var passkedua=$('#konfirmasi_password').val();
            if($('#password').val() != $('#konfirmasi_password').val()){
                 $('#konfirmasi_password').css('background','#e74c3c');
        }else if(passpertama == passkedua){
            $('#konfirmasi_password').css('background','#2ecc71');
        }
      });               
    });     
</script>