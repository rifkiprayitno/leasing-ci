  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
 <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
 <link rel="stylesheet" href="https://twitter.github.io/typeahead.js/css/examples.css" /> 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
 <script src="https://twitter.github.io/typeahead.js/js/handlebars.js"></script>
 <script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>
 <style>
/* .box
 {
  width:100%;
  max-width: 650px;
  margin:0 auto;
 }*/
 #prefetch .tt-dropdown-menu {
  max-height: 150px;
  overflow-y: auto;
}
 </style>
<style type="text/css">
    .bg-purple{
        /*background-color: #9c37d3 !important;*/
    }
    .btn-rounded {border-radius: 10px;}
    .font-size{font-size: 24px;}

    .required {
        color: #FF0000;
    }
    .form-horizontal {
        font-size: small;
        text-orientation: sideways;
    }
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
</style>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <strong>Insert SEP</strong>
            <small>Bridging BPJS</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo base_url('bridging_bpjs/index');?>"> Bridging BPJS</a></li>
            <li class="active"> Insert SEP</li>
        </ol>
    </section>
    <section class="content">
        <div class="well well-sm">
            <div class="box-header">
                <a href="<?php echo base_url('rawat_jalan/index');?>" class="btn btn-warning pull-left"><i class="fa fa-pencil-square-o"></i> Kembali</a>
                <button class="btn btn-success pull-right" id="btn-update"><i class="fa fa-edit"></i> Update SEP</button>
            </div><!-- /.box-header -->
        </div>
        <div class="box box-body">
            <div class="row">
                <div class="col-md-3" id="cekbpjs">
                    <fieldset>
                        <legend>Cari SEP Berdasarkan No SEP Perserta</legend>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success btn-flat btn-block" id="ceksep" name="ceksep" value="ceksep" data-toggle="modal" data-target="#sampleModal"><i class="fa fa-search"></i>&nbsp;Cari SEP</button>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
        <div class="box box-success box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Form SEP</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="col-md-6">
                    <div class="row">
                        <div class="input-info">
                            <?php
                            $error = $this->session->flashdata('error');
                            if($error)
                            {
                                ?>
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <?php echo $this->session->flashdata('error'); ?>                    
                                </div>
                            <?php } ?>
                            <?php  
                            $success = $this->session->flashdata('success');
                            if($success)
                            {
                                ?>
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php } ?>
                        </div>
                        <form action="<?php echo base_url('rawat_jalan/create');?>" method="post" role="form" class="form-horizontal" id="inser_sep">
                            <div class="form-group">
                                <label for="inputnorm" class="col-sm-3 control-label">Pilih</label>
                                <div class="col-sm-3">
                                    <label>
                                        <input type="radio" name="pilih" class="flat-red" checked value="rujukan"> Rujukan
                                    </label>
                                </div>
                                <div class="col-sm-3">
                                    <label>
                                        <input type="radio" name="pilih" class="flat-red" value="manual"> Rujukan Manual/IGD
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputnorm" class="col-sm-3 control-label">Pelayanan</label>
                                <div class="col-sm-9">
                                    <select class="form-control">
                                        <option>pelayanan satu</option>
                                        <option>pelayanan dua</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputnorm" class="col-sm-3 control-label">Tanggal SEP</label>
                                <div class="col-sm-9">
                                    <input type="date" name="tgl_sep" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputnorm" class="col-sm-3 control-label">PPK Asal Peserta</label>
                                <div class="col-sm-9">
                                    <input type="text" name="ppk" class="form-control" id="ppk" placeholder="ketik kode atau nama ppk asal rujukan min 3 karakter">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-7">
                                    <label for="inputnorm" class="col-sm-5 control-label">Nomor</label>
                                    <div class="col-sm-7">
                                        <input type="number" class="form-control" name="nomoran" placeholder="ketik nomor">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>
                                            <input type="radio" name="nomorradio" class="flat-red" checked value="bpjs"> BPJS &nbsp;
                                        </label>
                                        <label>
                                            <input type="radio" name="nomorradio" class="flat-red" value="nik"> NIK(eKTP) &nbsp;
                                        </label>
                                        <label>
                                            <input type="radio" name="nomorradio" class="flat-red" value="reader"> eKTP-Reader
                                        </label>
                                    </div>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="inputnorm" class="col-sm-3 control-label">PPK Asal Peserta</label>
                                <div class="col-sm-9" id="prefetch">
                                    <input type="text" name="search_box" id="search_box" class="form-control input-lg typeahead" placeholder="Search Here" />
                                      
                                </div>
                            </div>
                            <div class="box-footer" id="bfooter">
                                <div class="pull-right">    
                                    <button type="submit" value="regisSubmit" name="regisSubmit" class="btn btn-success btn-flat btn-block" id="btnEndStep3"><i class="fa fa-save"></i> Buat SEP</button>&nbsp;
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Menu Bridging SEP</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="col-md-3">
                    <a href="<?php echo base_url('rawat_jalan/list'); ?>" class="btn btn-pimary bg-blue-gradient btn-block btn-rounded">
                        <i class="font-size fa fa-book"></i><br/>Pengajuan Penjaminan <span class="badge badge-light bg-red-gradient"></span>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="<?php echo base_url('rawat_jalan/list/#'); ?>" class="btn btn-pimary bg-blue-gradient btn-block btn-rounded">
                        <i class="font-size fa fa-calendar-plus-o"></i> <br/>Pencarian Approval <span class="badge badge-light"></span>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="<?php echo base_url('rawat_jalan/list/#'); ?>" class="btn btn-pimary bg-blue-gradient btn-block btn-rounded">
                        <i class="font-size fa fa-address-book"></i> <br/>Update Tanggal Pulang <span class="badge badge-light"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<script type="text/javascript">
$(document).ready(function(){
  var sample_data = new Bloodhound({
   datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
   queryTokenizer: Bloodhound.tokenizers.whitespace,
   prefetch:'<?php echo site_url();?>bridging_bpjs/bridge_referensi/cek_faskes_satu/cia',
   remote:{
    url:'<?php echo site_url();?>bridging_bpjs/bridge_referensi/cek_faskes_satu/%QUERY',
    wildcard:'%QUERY'
   }
  });
  

  $('#prefetch .typeahead').typeahead(
  {
      hint: true,
      highlight: true,
      minLength: 1
    }, {
       name: 'sample_data',
       // display: 'value',
        displayKey: 'value',
       source:sample_data,
       limit:55,
       templates:{
         empty: [
          '<div class="empty-message">',
          'unable to find any data that match the current query',
          '</div>'
        ].join('\n'),
        suggestion:Handlebars.compile('<div><font color="black"><strong>{{data}}</strong> – {{value}}</font></div>')
   }
//    suggestion: function(data) {
//     return '<p><strong>' + data.value + '</strong> – ' + data.data + '</p>';
// }

  });
});
</script>