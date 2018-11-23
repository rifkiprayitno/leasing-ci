<style type="text/css">
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
                    <a href="<?php echo base_url('rawat_jalan/index');?>" class="btn btn-warning btn-flat pull-left"><i class="fa fa-arrow-left"></i> Kembali</a>
                    <button class="btn btn-success btn-flat pull-right" id="btn-refresh"><i class="fa fa-pencil-square-o"></i> Buat RUjukan</button>
            </div><!-- /.box-header -->
        </div>
        <div class="box box-success box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Rujukan</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <div class="box-body">
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
                <div class="col-md-6">
                    <div class="row">
                        <form action="<?php echo base_url('rawat_jalan/create');?>" method="post" role="form" class="form-horizontal" id="inser_sep">
                           <div class="form-group">
                                <label for="inputnorm" class="col-sm-3 control-label">Cari Nomor Rujukan</label>
                                <div class="col-sm-4">
                                    <input type="text" name="no_rujukan" class="form-control" id="no_rujukan" placeholder="ketik Nomor Rujukan">
                                </div>
                                <div class="col-sm-4">
                                    <button type="submit" value="regisSubmit" name="regisSubmit" class="btn btn-primary btn-flat btn-block" id="btnEndStep3"><i class="fa fa-search"></i> Cari Rujukan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
