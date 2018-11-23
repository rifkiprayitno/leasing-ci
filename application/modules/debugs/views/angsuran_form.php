<div class="content">
<div class="animated fadeIn">
<div class="row">

<div class="col-lg-12">
    <div class="card card-outline-primary">
        <div class="card-header">
            <h4 class="m-b-0 text-black">Form <?php echo ((isset($angsuran[0]['email'])) && (strlen($angsuran[0]['email'])>2)) ? 'Update angsuran Lama' : 'angsuran Baru'; ?></h4>
        </div>
        <div class="card-body">
             <button class="add btn btn-success pull-right" data-toggle="modal" data-target="#myModalAdd">Add New</button>
             <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal">
                          Medium
                      </button>
            <form action="#" method="post">                
                <div class="form-body">
                    <h3 class="card-title m-t-15">Info Aplikasi</h3>
                    <hr>
                    <?php echo validation_errors('<div class="alert alert-danger alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>'); ?>
                    
                   
                    <div class="row p-t-20">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Cari Aplikasi</label>
                                <input type="text" id="nama" name="nama" class="form-control" value="<?php echo (isset($angsuran[0])) ? $angsuran[0]['nama'] : ''; ?>" required>
                                <small class="form-control-feedback"> Isi dengan nama/barang/kode aplikasi </small> 
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group has-danger">
                                <label class="control-label">Cari</label>
                                <small class="form-control-feedback"><?php echo form_error('email', '<div class="alert alert-danger" >', '</div>'); ?> </small> 
                                <button type="button" class="add btn btn-info form-control" name="cari"> <i class="fa fa-search"></i> Cari</button>
                                
    
                                <small class="form-control-feedback"> This field has error. </small> 
                            </div>
                        </div>
                    <!--/span-->
                    </div>
                    <!--/row-->
                    <h3 class="card-title m-t-15">Info Angsuran</h3>
                    <hr>
                    <div class="row" >
                        <div class="col-md-6">
                            <div class="form-group has-success">
                                <label class="control-label">Angsuran ke-</label>
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
                                <label class="control-label">Tanggal Bayar</label>
                                <input type="date" class="form-control" name="lahir" placeholder="dd/mm/yyyy" value="<?php echo (isset($angsuran[0])) ? $angsuran[0]['nama'] : ''; ?>">
                                <small class="form-control-feedback"> </small> 
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row p-t-20">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Bayar</label>
                                <small class="form-control-feedback"><?php echo form_error('password', '<div class="alert alert-danger" >', '</div>'); ?> </small> 
                                <input type="number" id="password" name="password" class="form-control" value="<?php echo (isset($angsuran[0]['password'])) ? $angsuran[0]['password'] : ''; ?>" required>
                                <small class="form-control-feedback"> isi denngan nominal pembayaran</small> 
                            </div>
                        </div>
                        <!--/span-->
                        
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

</div><!-- .row -->

<script type="text/javascript">
    $(document).ready(function() {
        // $('#datatables').dataTable();
        $('.add').click(function(){
            $('#addModal').modal('show');
            $('#form')[0].reset();
        });
       
    });
</script>

 <!-- Modal Add Product-->
 <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mediumModalLabel">Medium Modal</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php $this->load->view('aplikasis/aplikasi_index_2'); ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary">Confirm</button>
                        </div>
                    </div>
                </div>
            </div>

</div><!-- .animated -->
</div><!-- .content -->
 