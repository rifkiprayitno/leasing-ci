<style type="text/css">
    .bg-purple{
        /*background-color: #9c37d3 !important;*/
    }
    .btn-rounded {border-radius: 10px;}
    .font-size{font-size: 24px;}
</style>
<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Menu Registrasi Rawat Jalan</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="col-md-3 col-xs-3">
            <a href="<?php echo base_url('rawat_jalan/list'); ?>" class="btn btn-pimary bg-blue-gradient btn-block btn-rounded">
                <i class="font-size fa fa-book"></i><br/>Registrasi Hari Ini <span class="badge badge-light bg-red-gradient"><?php echo $count_day; ?></span>
            </a>
        </div>
        <div class="col-md-3 col-xs-3">
            <a href="<?php echo base_url('rawat_jalan/list/#'); ?>" class="btn btn-pimary bg-blue-gradient btn-block btn-rounded">
                <i class="font-size fa fa-calendar-plus-o"></i> <br/>Kunjungan Berikutnya <span class="badge badge-light"></span>
            </a>
        </div>
        <div class="col-md-3 col-xs-3">
            <a href="<?php echo base_url('rawat_jalan/list/#'); ?>" class="btn btn-pimary bg-blue-gradient btn-block btn-rounded">
                <i class="font-size fa fa-address-book"></i> <br/>Biodata Pasien <span class="badge badge-light"></span>
            </a>
        </div>
        <div class="col-md-3 col-xs-3">
            <a href="<?php echo base_url('rawat_jalan/list/#'); ?>" class="btn btn-pimary bg-blue-gradient btn-block btn-rounded">
                <i class="font-size fa fa-close"></i> <br/>Batal Registrasi <span class="badge badge-light"></span>
            </a>
        </div>
    </div>
</div>
