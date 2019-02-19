<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> <?php echo (isset($title)) ? $title : 'Ela - Bootstrap Admin Dashboard Template'; ?>  </title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?php echo base_url('new_images/head_logo_acquila.png'); ?>">
    <link rel="shortcut icon" href="<?php echo base_url('new_images/head_logo_acquila.png'); ?>">
    
    <!-- theme require -->
    <link rel="stylesheet" href="<?php echo base_url('new_assets/css/normalize.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('new_assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('new_assets/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('new_assets/css/themify-icons.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('new_assets/css/pe-icon-7-filled.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('new_assets/css/flag-icon.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('new_assets/css/cs-skin-elastic.css'); ?>">    
    <!-- theme require -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url('new_assets/css/style.css'); ?>">
    
    <!-- add ons, depends on page need -->    
    <link rel="stylesheet" href="<?php echo base_url('new_assets/css/lib/datatable/dataTables.bootstrap.min.css'); ?>">
    
    <link href="<?php echo base_url('new_assets/css/lib/toastr/toastr.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('new_assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet'); ?>"> 


    <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart { 
            min-height: 335px; 
        }
        #flotPie1  {
            height: 150px;
        } 
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        } 

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>

</head>

<body>