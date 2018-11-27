<div class="content">
<div class="animated fadeIn">
<div class="row">

<div class="col-lg-12">
    <div class="card card-outline-primary">
        <div class="card-header">
            <h4 class="m-b-0 text-green">Form <?php echo (isset($provinsi[0])) ? 'Update Provinsi Lama' : 'Provinsi Baru'; ?></h4>
        </div>
        <div class="card-body">
            
            <form action="#" method="post">                
                <div class="form-body">
                    <h3 class="card-title m-t-15">Info Provinsi</h3>
                    <hr>
                    <?php echo validation_errors('<div class="alert alert-danger alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>'); ?>
                    
                   
                    <div class="row p-t-20">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Nama</label>
                                <input type="text" id="provinsi_nama" name="provinsi_nama" class="form-control" value="<?php echo (isset($provinsi[0])) ? $provinsi[0]['provinsi_nama'] : ''; ?>" required>
                                <small class="form-control-feedback"> Isi nama </small> 
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
</div><!-- .animated -->
</div><!-- .content -->