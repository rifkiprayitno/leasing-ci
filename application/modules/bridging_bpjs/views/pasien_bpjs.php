<!-- Datatables -->
<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css"> -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<style type="text/css">
    fieldset {
        border-left: 1px solid #BABABA !important;
        border-top: 1px solid #BABABA;
        margin: 0;
        xmin-width: 0;
        padding: 10px 0px 10px 0px;       
        position: relative;
        border-radius:5px;
        /*background-color:#fff;*/
        padding-left:10px!important;
    }   

    legend {
        font-size:14px;
        font-weight:bold;
        margin-bottom: 0px; 
        width: auto; 
        border: 1px solid #ddd;
        border-radius: 4px; 
        padding: 5px 5px 5px 10px; 
        background-color: #ecf0f5;
    }
    .table-striped > tbody > tr:nth-of-type(odd) {
        background-color: #F2F2F2;
    }
    .profile-user-img{
        /*border: solid 3px #00a65a;*/
        border: none;
    }
    .text-td{
        color: #5E5E5E;
    }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <strong>Detail Pasien</strong>
            <small>Kanggotaan BPJS</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url("dashboard")?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo base_url("rawat_jalan/index")?>"> Rawat Jalan</a></li>
            <li class="active">Detail Pasien</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="well well-sm">
            <div class="box-header">
<!--                 <H3 class="box-title"> -->
                <a href="<?php echo base_url('rawat_jalan/list');?>" class="btn btn-success pull-left"><i class="fa fa-arrow-left"></i> Kembali</a>
                <a href="<?php echo base_url('rawat_jalan/list');?>" class="btn btn-primary pull-right"><i class="fa fa-edit"></i> Koreksi</a>
                <!-- </H3> -->
            </div><!-- /.box-header -->
        </div>
        <?php 
        if (!isset($datapasien)) {
        ?>
         <div class="box-body">
                <div class="col-md-12" id="cekbpjs">
                    <div class="row">
                            <div class="form-group-sm col-md-12">
                                <label>Cari Perserta Berdasarkan No Kartu/NIK</label>
                            </div>
                            <div class="col-md-6">
                               <button type="submit" class="btn btn-success btn-flat btn-block" id="ceksep" name="ceksep" value="ceksep" data-toggle="modal" data-target="#sampleModal"><i class="fa fa-search"></i>&nbsp;Cek Peserta BPJS</button>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputnorm" class="col-sm-4 control-label">PPK Asal Peserta</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="ppak" id="ppak" placeholder="ketik kode atau nama ppk asal rujukan min 3 karakter">
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        <?php
        } else {
        foreach ($datapasien as $key){?>
        <div class="row">
            <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="row">
                            <?php $L = "pasien_male.png"; $P = "pasien_female.png";?>
                            <img class="profile-user-img img-responsive img-rounded" src="<?php echo base_url('assets/images/');?><?php echo $wni = ($key->JENIS_KEL = "L") ? $L : $P;?>" alt="User profile picture">
                            <h2 class="profile-username text-center"><strong><?php echo $key->PASNAMA;?></strong></h2>
                            <div class="col-md-5">
                                <p class="text-muted pull-left">No Reg. <?php echo $key->NODAFTAR;?></p>
                            </div>
                            <div class="col-md-2">
                                <p class="text-muted text-center">|</p>
                            </div>
                            <div class="col-md-5">
                                <p class="text-muted pull-right">No RM. <?php echo $key->NO_PASIEN;?></p>
                            </div>
                        </div>
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b><i class="fa fa-credit-card"></i> <?php echo $key->NOIDENTITAS;?></b>
                            </li>
                            <li class="list-group-item">
                                <?php $TGL_LAHIR = $key->TGL_LAHIR;
                                    $tgl_lahir = preg_split('/\s+/', $TGL_LAHIR);
                                    $originalDate = $tgl_lahir[0];
                                    $newDate = date("d-m-Y", strtotime($originalDate));
                                ?>
                                <b><i class="fa fa-calendar"></i> <?php echo $key->TP_LAHIR;echo ", "; echo $newDate;?> (28 Tahun)</b>
                            </li>
                            <li class="list-group-item">
                                <b><i class="fa fa-phone"></i> <?php echo $key->NO_TELP;?> - <i class="fa fa-mobile"></i> <?php echo $key->NO_HP;?></b>
                            </li>
                            <li class="list-group-item">
                                <b><i class="fa fa-home"></i> <?php echo $key->KD_POS;?>
                            </li>
                        </ul>
                        <a href="" class="btn btn-danger btn-flat" title="Cetak Kartu Pasien"><i class="fa fa-print"></i> Kartu Pasien</a>
                        <a href="" class="btn btn-primary btn-flat" title="Cetak Lembar Poliklinik"><i class="fa fa-print"></i> Poliklinik</a>
                        <button href="" class="btn btn-warning btn-flat" title="Cetak Gelang" onclick="print_gelang();"><i class="fa fa-print"></i> Gelang</button>
                        <a href="" class="btn btn-success btn-flat" title="Cetak Label"><i class="fa fa-print"></i> Label</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="box box-primary box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Data Pribadi</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <table class="table table-condensed table-hover table-bordered table-striped">
                            <tr>
                                <th>Nama Marga</th>
                                <td class="text-td"><?php echo $key->MARGA;?></td>
                            </tr>
                            <tr>
                                <th>Status Marital</th>
                                <td class="text-td"><?php echo $key->STATUS;?></td>
                            </tr>
                            <tr>
                                <th>Agama</th>
                                <td class="text-td"></td>
                            </tr>
                            <tr>
                                <th>Pendidikan</th>
                                <td class="text-td"></td>
                            </tr>
                            <tr>
                                <th>Pekerjaan</th>
                                <td class="text-td"></td>
                            </tr>
                            <tr>
                                <th>Warga Negara</th>
                                <td class="text-td"><?php echo $wni = ($key->STATUSWN = 1) ? 'Indonesia' : 'Asing' ;?></td>
                            </tr>
                            <tr>
                                <th>Provinsi</th>
                                <td class="text-td"></td>
                            </tr>
                            <tr>
                                <th>Kabupaten</th>
                                <td class="text-td"></td>
                            </tr>
                            <tr>
                                <th>Kecamatan</th>
                                <td class="text-td"></td>
                            </tr>
                            <tr>
                                <th>Kelurahan</th>
                                <td class="text-td"></td>
                            </tr>
                            <tr>
                                <th>RW / RT</th>
                                <td class="text-td"><?php echo $key->RW; echo " / "; echo $key->RT;?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="box box-primary box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Data Penanggung</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <table class="table table-condensed table-hover table-bordered table-striped">
                            <tr>
                                <th>No Kartu</th>
                                <td class="text-td">0001430071817</td>
                            </tr>
                            <tr>
                                <th>No SEP</th>
                                <td class="text-td">1111R00104140002398</td>
                            </tr>
                            <tr>
                                <th>Atas Nama</th>
                                <td class="text-td">Gumilar Gumilar</td>
                            </tr>
                            <tr>
                                <th>Cara Bayar</th>
                                <td class="text-td">BPJS</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box box-primary box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Data Keluarga</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <table class="table table-condensed table-hover table-bordered table-striped">
                            <tr>
                                <th>Nama Ayah</th>
                                <td class="text-td">Alan Basiran</td>
                            </tr>
                            <tr>
                                <th>Nama Ibu</th>
                                <td class="text-td">Karwati</td>
                            </tr>
                            <tr>
                                <th>Nama Pasangan</th>
                                <td class="text-td">-</td>
                            </tr>
                            <tr>
                                <th>Pekerjaan Ayah</th>
                                <td class="text-td">Wiraswasta</td>
                            </tr>
                            <tr>
                                <th>Pekerjaan Ibu</th>
                                <td class="text-td">Ibu RUmah Tangga</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box box-primary box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Data Poliklinik</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <table class="table table-condensed table-hover table-bordered table-striped">
                            <tr>
                                <th>Kiriman Dari</th>
                                <td class="text-td">Datang Sendiri</td>
                            </tr>
                            <tr>
                                <th>Unit Pelayanan</th>
                                <td class="text-td">Poliklinik Mata</td>
                            </tr>
                            <tr>
                                <th>Dokter Pemeriksa</th>
                                <td class="text-td">Dr. Ahmad</td>
                            </tr>
                            <tr>
                                <th>Biaya Pendaftaran</th>
                                <td class="text-td">Rp. 17.500</td>
                            </tr>
                            <tr>
                                <th>Tanggal Masuk</th>
                                <td class="text-td">2018-10-15 08:20:32.000</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div id="print_gelang" style="display: none">
            <span>Mo Medrek: <?php echo $key->NO_PASIEN;?></span><br/>
            <span>Tgl Masuk: 2018-10-15 08:20:32</span>
        </div>
    <?php 
        }
    }
    ?>
    <!-- LOAD MODALS -->
     <?php $this->view('modal_step_sep'); ?>
    <!-- /LOAD MODALS -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<!-- <script src="<?php echo base_url(); ?>assets/bower_components/datatables/jquery-2.1.4.min.js"></script> -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/dataTables.bootstrap.min.js"></script> -->
<script>
    function print_gelang() {
        var divToPrint=document.getElementById('print_gelang');
        var newWin=window.open('','Print-Window');
        newWin.document.open();
        newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');
        newWin.document.close();
        setTimeout(function(){newWin.close()}, 1);
    }
</script>
<script type="text/javascript">

    $(document).ready(function() {
            var save_method; //for save method string
            var table;
            table = $('#tblreg').DataTable({ 
                // "dom"           : 'Blfrtip',
                "pagingType"    : "full_numbers",
                "scrollX"       : true,
                "processing"    : true, //Feature control the processing indicator.
                "serverSide"    : true, //Feature control DataTables' server-side processing mode.

                // Load data for the table's content from an Ajax source
                // "select": { "style": "multi" },
                "ajax": {
                    "url"   : "<?php echo base_url('rawat_jalan/ajax_list')?>",
                    "type"  : "POST",
                    "data": function ( data ) {
                        data.tgl_awal = $('#tgl_awal').val();
                        data.tgl_akhir = $('#tgl_akhir').val();
                    },
                },
                "language": {          
                    processing: "<img src='<?php echo base_url();?>assets/images/Loader.gif' width='100' height='100'>",
                },
                "scroller": {
                    "loadingIndicator": true
                }
            });
        // }

        $('#btn-filter').click(function(){ //button filter event click
        table.ajax.reload();  //just reload table
    });
    });    

    function reload_table(){
        table.ajax.reload(null,false); //reload datatable ajax 
    }
</script>
<script type="text/javascript">
    $(function() {
        $( "#datepicker" ).datepicker({ 
            // todayBtn:'linked',
            // setDate: new Date(),
            autoclose: true,
            format: 'yyyy-mm-dd'
        });
    });
</script>
<!-- <script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
-->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<link rel="stylesheet" href="<?php echo base_url('new_assets/js/lib/jquery/jquery.autocomplete.css'); ?>">
<script src="<?php echo base_url('new_assets/js/lib/jquery/jquery.autocomplete.js'); ?>"></script>
<script type='text/javascript'>
        
        $(document).ready(function(){
            var site = "<?php echo site_url();?>";
            var ppk_char = document.getElementById('ppak').value;
            var url_ppak     = "<?php echo site_url();?>bridging_bpjs/bridge_referensi/cek_faskes_satu/cia"; 
            console.log("url_ppk -> "+url_ppak);
            $('#ppak').autocomplete({
                // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
                serviceUrl: url_ppk,
                // minLength: 3,
                // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
                onSelect: function (faskes) {
                    $('#ppak').val(''+faskes.value); // membuat id 'v_nim' untuk ditampilkan
                    // $('#handphone').val(''+faskes.kode); // membuat id 'v_jurusan' untuk ditampilkan
                },

            });
        });
</script> 