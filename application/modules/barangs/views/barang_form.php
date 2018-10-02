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
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Insentif</label>
                                <input type="text" id="insentif" name="insentif" class="form-control" value="<?php echo (isset($barang[0])) ? $barang[0]['insentif'] : ''; ?>" required>
                                <small class="form-control-feedback"> Isi insentif </small> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Detail</label>
                                <input type="text" id="detail" name="detail" class="form-control" value="<?php echo (isset($barang[0])) ? $barang[0]['detail'] : ''; ?>" required>
                                <small class="form-control-feedback"> Isi detail </small> 
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