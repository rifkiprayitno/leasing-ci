<!-- datepiscker css -->
<link rel="stylesheet" href="<?php echo base_url('new_assets/css/lib/datepicker/bootstrap-datepicker3.min.css'); ?>">

<div class="content">
<div class="animated fadeIn">
<div class="row">
<?php $tenor = 1; ?>
<div class="col-lg-12">
    <div class="card card-outline-primary">
        <div class="card-header">
            <h4 class="m-b-0 text-black">Form <?php echo ((isset($angsuran[0]['email'])) && (strlen($angsuran[0]['email'])>2)) ? 'Update angsuran Lama' : 'angsuran Baru'; ?></h4>
        </div>
        <div class="card-body">
            <form action="#" method="post">                
                <div class="form-body">
                    <h3 class="card-title m-t-15">Info Aplikasi</h3>
                    <hr>
                    <?php echo validation_errors('<div class="alert alert-danger alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>'); ?>                    
                   
                    <div class="row p-t-20">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label class="control-label">Cari Aplikasi</label>
                                <input type="text" name="nomor_cari" id="nomor_cari" class="form-control" value="<?php echo (isset($angsuran[0]['aplikasi_kode'])) ? $angsuran[0]['aplikasi_kode'] : ''; ?>" required>
                                <small class="form-control-feedback"> Isi dengan nama/barang/kode aplikasi </small> 
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-2">
                            <div class="form-group has-danger">
                                <label class="control-label"><font color="white">`</font></label>
                                <button type="button" class="add btn btn-success form-control" data-toggle="modal" data-target="#largeModal">SEARCH</button>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-3">
                            <div class="form-group has-danger">
                                <label class="control-label"><font color="white">`</font></label>
                                <button type="button" class="add btn btn-info form-control" name="cari" id="cari" onclick="showhide('info_aplikasi')"> <i class="fa fa-search"></i> Cari</button>
                            </div>
                        </div>
                    <!--/span-->                        
                    </div>
                    <hr>
                    <div id="info_aplikasi" style="display: none;">
                    <div class="row p-t-20" id="aplikasi_atas" >
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Nama Pelanggan</label>
                                <input type="text" id="nama" name="nama" class="form-control" value="<?php echo (isset($angsuran[0])) ? $angsuran[0]['nama'] : ''; ?>" required readonly>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Barang</label>
                                <input type="text" id="nama_barang" name="nama_barang" class="form-control" value="<?php echo (isset($angsuran[0])) ? $angsuran[0]['barang_nama'] : ''; ?>" required readonly>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Jatuh Tempo</label>
                                <input type="text" id="jatuh_tempo" name="jatuh_tempo" class="form-control" value="<?php echo (isset($angsuran[0])) ? $angsuran[0]['jatuh_tempo'] : ''; ?>" required readonly>
                            </div>
                        </div>
                    <!--/span-->
                    </div>
                    <div class="row p-t-20" id="aplikasi_bawah" >
                         <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">DP</label>
                                <input type="text" id="dp" name="dp" class="form-control" value="<?php echo (isset($angsuran[0]['dp'])) ? $angsuran[0]['dp'] : ''; ?>" required readonly>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-1">
                            <div class="form-group">
                                <label class="control-label">Tenor</label>
                                <input type="text" id="tenor" name="tenor" class="form-control" value="<?php echo (isset($angsuran[0]['tenor'])) ? $angsuran[0]['tenor'] : ''; ?>" required readonly>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Angsuran</label>
                                <input type="text" id="angsuran" name="angsuran" class="form-control" value="<?php echo (isset($angsuran[0]['angsuran'])) ? $angsuran[0]['angsuran'] : ''; ?>" required readonly>
                            </div>
                        </div>
                    <!--/span-->
                    <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">Status</label>
                                <input type="text" id="status" name="status" class="form-control" value="<?php echo (isset($angsuran[0]['status'])) ? $angsuran[0]['status'] : ''; ?>" required readonly>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <hr>
                    </div>
                    <!--/row-->
                    
        </div>
    </div>
</div>


    <div class="card card-outline-primary">      
        <div class="card-body">
           <div id="insert_angsuran" style="display: none">
                    <h3 class="card-title m-t-15">Info Angsuran</h3>
                    <hr>                    
                    <div class="row" >
                        <div class="col-md-6">
                            <div class="form-group has-success">
                                <label class="control-label">Angsuran ke-<b><?php echo (isset($angsuran[0]['angsuran_ke'])) ? $angsuran[0]['angsuran_ke'] : '';?></b></label>
                                <select class="form-control custom-select" name="select_tenor" id="select_tenor">
                                <?php 
                                if(isset($angsuran[0]['tenor'])){
                                    for ($i=1; $i <= $angsuran[0]['tenor']; $i++) {
                                        // echo "<option value='".$i."' ".($angsuran[0]['angsuran_ke'] == '2')?'selected':''.">$i</option>";
                                        ?>
                                        <option value="<?php echo $i; ?>" <?php echo ((isset($angsuran[0]['angsuran_ke']))&&($angsuran[0]['angsuran_ke'] == $i))?'selected':''; ?> ><?php echo $i?></option>
                                        <?php
                                    }
                                }
                                ?>
                                </select>
                                <small class="form-control-feedback"> pilih angsuran </small> 
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Tanggal Bayar</label>
                                <input type="text" class="form-control datepicker " data-date-end-date="0d" name="tgl_bayar" id="tgl_bayar" placeholder="yyyy-mm-dd" value="<?php echo (isset($angsuran[0]['tanggal_bayar'])) ? $angsuran[0]['tanggal_bayar'] : date('Y-m-d'); ?>" required>
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
                                <input type="number" id="bayar" name="bayar" class="form-control" value="<?php echo (isset($angsuran[0]['bayar'])) ? $angsuran[0]['bayar'] : (isset($angsuran[0]['angsuran'])) ? $angsuran[0]['angsuran'] : ''; ?>" required>
                                <small class="form-control-feedback"> isi dengan nominal pembayaran</small> 
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
                </div>
            </form> 
            
        </div>
    </div>


</div><!-- .row -->


 <!-- Modal Add Product-->

<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="largeModalLabel">Large Modal</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php $this->load->view('angsurans/aplikasi_tabel_modal'); ?>
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
 
<!--  -->
    <?php $this->view('angsuran_form_js'); ?>
<!--  -->