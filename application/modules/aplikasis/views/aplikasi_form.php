<<<<<<< HEAD
<style>
  .ui-autocomplete-loading {
    background: white url("<?php echo base_url(); ?>new_images/Load_88.gif") right center no-repeat;
  }
</style>
<div class="content">
<div class="animated fadeIn">
<div class="row">

<div class="col-lg-12">
    <div class="card card-outline-primary">
        <div class="card-header">
            <h4 class="m-b-0 text-black">Form <?php echo (isset($aplikasi[0])) ? 'Update Barang Lama' : 'Aplikasi Baru'; ?></h4>
=======
<div class="col-lg-10">
    <div class="card card-outline-primary">
        <div class="card-header">
            <h4 class="m-b-0 text-white">Form <?php echo (isset($aplikasi)) ? 'Update Barang Lama' : 'Aplikasi Baru'; ?></h4>
>>>>>>> c023b1a3eb82b5762c1ec0628674c6a699dbf9fb
        </div>
        <div class="card-body">
            
            <form action="#" method="post">                
                <div class="form-body">
<<<<<<< HEAD
                    <h3 class="card-title m-t-15">Info Aplikasi</h3>
=======
                    <h3 class="card-title m-t-15">Info Personal</h3>
>>>>>>> c023b1a3eb82b5762c1ec0628674c6a699dbf9fb
                    <hr>
                    <?php echo validation_errors('<div class="alert alert-danger alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>'); ?>
                    
                   
                    <div class="row p-t-20">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Aplikasi Kode</label>
<<<<<<< HEAD
                                <input type="text" id="aplikasi_kode" name="aplikasi_kode" class="form-control autocomplete" value="<?php echo (isset($aplikasi[0])) ? $aplikasi[0]['aplikasi_kode'] : ''; ?>" required>
                                <small class="form-control-feedback"> Isi aplikasi kode </small> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">user_id</label>
                                <input type="text" id="id_user_id" name="id_user_id" class="form-control autocomplete" >
                                <small class="form-control-feedback"> Isi aplikasi kode </small> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">barang_id</label>
                                <input type="text" id="barang_id" name="barang_id" class="form-control autocomplete" >
=======
                                <input type="text" id="aplikasi_kode" name="aplikasi_kode" class="form-control" value="<?php echo (isset($aplikasi[0])) ? $aplikasi[0]['aplikasi_kode'] : ''; ?>" required>
>>>>>>> c023b1a3eb82b5762c1ec0628674c6a699dbf9fb
                                <small class="form-control-feedback"> Isi aplikasi kode </small> 
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Barang</label>
<<<<<<< HEAD
                                <input type="text" id="barang" name="barang" class="form-control autocomplete" >
                                <select class="form-control custom-select" name="barang" required style="display: none;">
                                    <option value="">- pilih barang -</option>
                                    <?php
                                        foreach ($barang as $barangs) {
                                            $selected = (isset($aplikasi[0]['aplikasi_barang_id']) && ($aplikasi[0]['aplikasi_barang_id'] == $barangs->barang_id))?'selected':'';
                                            echo "<option value='".$barangs->barang_id."' ".$selected.">$barangs->barang_nama</option>";
=======
                                <select class="form-control custom-select" name="barang" required>
                                    <?php
                                        foreach ($barang as $barangs) {
                                            echo "<option value='".$barangs->barang_id."'>$barangs->barang_nama</option>";
>>>>>>> c023b1a3eb82b5762c1ec0628674c6a699dbf9fb
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
<<<<<<< HEAD
                                <label class="control-label">Pelanggan</label>
                                <input type="text" id="user_id" name="user_id" class="form-control autocomplete nama" >
                                <select class="form-control custom-select" name="user_id" required style="display: none;">
                                    <option value="">- pilih pelanggan -</option>
                                    <?php
                                        foreach ($user as $users) {
                                            $selected = (isset($aplikasi[0]['aplikasi_user_id']) && ($aplikasi[0]['aplikasi_user_id'] == $users->user_id))?'selected':'';
                                            echo "<option value='".$users->user_id."' ".$selected.">$users->nama</option>";
=======
                                <label class="control-label">User</label>
                                <select class="form-control custom-select" name="user" required>
                                    <?php
                                        foreach ($user as $users) {
                                            echo "<option value='".$users->user_id."'>$users->nama</option>";
>>>>>>> c023b1a3eb82b5762c1ec0628674c6a699dbf9fb
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <!--/span-->
                        <!--/span-->
<<<<<<< HEAD
                        <div class="col-md-6" hidden>
                            <div class="form-group">
                                <label class="control-label">Barang Harga</label>
                                <input type="text" id="barang_harga" name="barang_harga" class="form-control" value=""  readonly="">
                                <small class="form-control-feedback">  </small> 
                            </div>
                        </div>
                        <div class="col-md-6" hidden>
                            <div class="form-group">
                                <label class="control-label">Barang Insentif</label>
                                <input type="text" id="barang_insentif" name="barang_insentif" class="form-control" value=""  readonly="">
                                <small class="form-control-feedback">  </small> 
                            </div>
                        </div>
                        <div class="col-md-6" hidden>
                            <div class="form-group">
                                <label class="control-label">Pelanggan Email</label>
                                <input type="text" id="email" name="email" class="form-control autocomplete" value=""  readonly="">
                                <small class="form-control-feedback">  </small> 
                            </div>
                        </div>
                        <div class="col-md-6" hidden>
                            <div class="form-group">
                                <label class="control-label">Pelanggan No HP</label>
                                <input type="text" id="handphone" name="handphone" class="form-control autocomplete" value=""  readonly="">
                                <small class="form-control-feedback">  </small> 
                            </div>
                        </div>
                   <!--  <h3 class="card-title m-t-15">Info Personal</h3>
                    <hr> -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">DP</label>
                                <input type="number" id="dp" name="dp" class="form-control" value="<?php echo (isset($aplikasi[0])) ? $aplikasi[0]['dp'] : ''; ?>" required>
=======
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
>>>>>>> c023b1a3eb82b5762c1ec0628674c6a699dbf9fb
                                <small class="form-control-feedback"> Isi DP </small> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Angsuran</label>
<<<<<<< HEAD
                                <input type="number" id="angsuran" name="angsuran" class="form-control" value="<?php echo (isset($aplikasi[0])) ? $aplikasi[0]['angsuran'] : ''; ?>" required>
=======
                                <input type="text" id="angsuran" name="angsuran" class="form-control" value="<?php echo (isset($aplikasi[0])) ? $aplikasi[0]['aplikasi_angsuran'] : ''; ?>" required>
>>>>>>> c023b1a3eb82b5762c1ec0628674c6a699dbf9fb
                                <small class="form-control-feedback"> Isi angsuran </small> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Tenor</label>
<<<<<<< HEAD
                                <input type="number" id="tenor" name="tenor" class="form-control" value="<?php echo (isset($aplikasi[0])) ? $aplikasi[0]['tenor'] : ''; ?>" required >
                                <small class="form-control-feedback">  </small> 
                            </div>
                        </div>
                        <div class="col-md-6" hidden>
                            <div class="form-group">
                                <label class="control-label">Total</label>
                                <input type="number" id="total" name="total" class="form-control" value="<?php echo (isset($aplikasi[0])) ? $aplikasi[0]['total'] : ''; ?>"  readonly="">
                                <small class="form-control-feedback">  </small> 
                            </div>
                        </div>
                        <div class="col-md-6" hidden>
                            <div class="form-group">
                                <label class="control-label">Tanggal Berlaku</label>
                                <input type="date" id="tanggal_berlaku" name="tanggal_berlaku" class="form-control" value="<?php echo (isset($aplikasi[0])) ? $aplikasi[0]['tanggal_berlaku'] : ''; ?>" >
=======
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
>>>>>>> c023b1a3eb82b5762c1ec0628674c6a699dbf9fb
                                <small class="form-control-feedback">  </small> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Awal Tempo</label>
<<<<<<< HEAD
                                <input type="date" id="awal_tempo" name="awal_tempo" class="form-control" value="<?php echo (isset($aplikasi[0])) ? $aplikasi[0]['awal_tempo'] : ''; ?>" required>
=======
                                <input type="date" id="awal_tempo" name="awal_tempo" class="form-control" value="" required>
>>>>>>> c023b1a3eb82b5762c1ec0628674c6a699dbf9fb
                                <small class="form-control-feedback">  </small> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Jatuh Tempo</label>
<<<<<<< HEAD
                                <input type="date" id="jatuh_tempo" name="jatuh_tempo" class="form-control" value="<?php echo (isset($aplikasi[0])) ? $aplikasi[0]['jatuh_tempo'] : ''; ?>" required>
                                <small class="form-control-feedback">  </small> 
                            </div>
                        </div>
                        <div class="col-md-6" hidden>
                            <div class="form-group">
                                <label class="control-label">Status</label>
                                <select class="form-control custom-select" name="user" >
=======
                                <input type="date" id="jatuh_tempo" name="jatuh_tempo" class="form-control" value="" required>
                                <small class="form-control-feedback">  </small> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Status</label>
                                <select class="form-control custom-select" name="user" required>
>>>>>>> c023b1a3eb82b5762c1ec0628674c6a699dbf9fb
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
<<<<<<< HEAD
                    <button type="submit" class="btn btn-success" name="submit"> <i class="fa fa-check"></i> Ajukan</button>
=======
                    <button type="submit" class="btn btn-success" name="submit"> <i class="fa fa-check"></i> Simpan</button>
>>>>>>> c023b1a3eb82b5762c1ec0628674c6a699dbf9fb
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

<!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<link rel="stylesheet" href="<?php echo base_url('new_assets/js/lib/jquery/jquery.autocomplete.css'); ?>">
<script src="<?php echo base_url('new_assets/js/lib/jquery/jquery.autocomplete.js'); ?>"></script>
<script type='text/javascript'>
        var site = "<?php echo site_url();?>";
        $(document).ready(function(){
            $('#user_id').autocomplete({
                // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
                serviceUrl: site+'/aplikasis/search_user',
                minLength: 3,
                // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
                onSelect: function (suggestion) {
                    $('#id_user_id').val(''+suggestion.user_id); // membuat id 'v_nim' untuk ditampilkan
                    $('#handphone').val(''+suggestion.no_hp); // membuat id 'v_jurusan' untuk ditampilkan
                }
            });
        });
</script>
<script type='text/javascript'>
        var site = "<?php echo site_url();?>";
        $(document).ready(function(){
            $('#barang').autocomplete({
                // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
                serviceUrl: site+'/aplikasis/search_barang',
                minLength: 3,
                // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
                onSelect: function (suggestion) {
                    $('#barang_id').val(''+suggestion.barang_id); // membuat id 'v_nim' untuk ditampilkan
                    $('#handphone').val(''+suggestion.insentif); // membuat id 'v_jurusan' untuk ditampilkan
                }
            });
        });
</script>
=======
</div>
>>>>>>> c023b1a3eb82b5762c1ec0628674c6a699dbf9fb
