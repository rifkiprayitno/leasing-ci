<div class="content">
<div class="animated fadeIn">
<div class="row">

<div class="col-lg-12">
    <div class="card card-outline-primary">
        <div class="card-header">
            <h4 class="m-b-0 text-green">Form <?php echo (isset($barang[0])) ? 'Update Barang Lama' : 'Barang Baru'; ?></h4>
        </div>
        <div class="card-body">
            
            <form action="#" method="post">                
                <div class="form-body">
                    <h3 class="card-title m-t-15">Info Barang</h3>
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
                                <input type="number" id="harga" name="harga" class="form-control" value="<?php echo (isset($barang[0])) ? $barang[0]['harga'] : ''; ?>" required>
                                <small class="form-control-feedback" id="small_harga"> Isi harga </small> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Insentif</label>
                                <input type="number" id="insentif" name="insentif" class="form-control" value="<?php echo (isset($barang[0])) ? $barang[0]['insentif'] : ''; ?>" required>
                                <small class="form-control-feedback" id="small_insentif"> Isi insentif </small> 
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
<script type="text/javascript">
    $("#harga").keyup(function() {
        var angka = $("#harga").val();
        angka = angka.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
        $("#small_harga").html("Rp. "+angka);       
    });
     $("#insentif").keyup(function() {
        var angka = $("#insentif").val();
        angka = angka.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
        $("#small_insentif").html("Rp. "+angka);       
    });
</script>