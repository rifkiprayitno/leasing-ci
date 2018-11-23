<<<<<<< HEAD
<div class="content">
<div class="animated fadeIn">
<div class="row">

<div class="col-lg-12">
    <div class="card card-outline-primary">
        <div class="card-header">
            <h4 class="m-b-0 text-green">Form <?php echo (isset($barang[0])) ? 'Update Barang Lama' : 'Barang Baru'; ?></h4>
=======
<div class="col-lg-10">
    <div class="card card-outline-primary">
        <div class="card-header">
            <h4 class="m-b-0 text-white">Form <?php echo (isset($barang)) ? 'Update Barang Lama' : 'Barang Baru'; ?></h4>
>>>>>>> c023b1a3eb82b5762c1ec0628674c6a699dbf9fb
        </div>
        <div class="card-body">
            
            <form action="#" method="post">                
                <div class="form-body">
<<<<<<< HEAD
                    <h3 class="card-title m-t-15">Info Barang</h3>
=======
                    <h3 class="card-title m-t-15">Info Personal</h3>
>>>>>>> c023b1a3eb82b5762c1ec0628674c6a699dbf9fb
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
<<<<<<< HEAD
                                <input type="number" id="harga" name="harga" class="form-control" value="<?php echo (isset($barang[0])) ? $barang[0]['harga'] : ''; ?>" required>
=======
                                <input type="text" id="harga" name="harga" class="form-control" value="<?php echo (isset($barang[0])) ? $barang[0]['harga'] : ''; ?>" required>
>>>>>>> c023b1a3eb82b5762c1ec0628674c6a699dbf9fb
                                <small class="form-control-feedback"> Isi harga </small> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Insentif</label>
<<<<<<< HEAD
                                <input type="number" id="insentif" name="insentif" class="form-control" value="<?php echo (isset($barang[0])) ? $barang[0]['insentif'] : ''; ?>" required>
=======
                                <input type="text" id="insentif" name="insentif" class="form-control" value="<?php echo (isset($barang[0])) ? $barang[0]['insentif'] : ''; ?>" required>
>>>>>>> c023b1a3eb82b5762c1ec0628674c6a699dbf9fb
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
<<<<<<< HEAD
</div>

</div><!-- .row -->
</div><!-- .animated -->
</div><!-- .content -->
=======
</div>
>>>>>>> c023b1a3eb82b5762c1ec0628674c6a699dbf9fb
