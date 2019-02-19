    <!-- Left Panel --> 
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default"> 
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo base_url('dashboard'); ?>"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Data</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-address-card-o"></i>Pengguna</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus-circle"></i><a href="<?php echo base_url('users/tambah'); ?>">&nbsp;Tambah</a></li>
                            <li><i class="fa fa-eye"></i><a href="<?php echo base_url('users/index'); ?>">&ensp;Lihat</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-diamond"></i>Barang</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus-circle"></i><a href="<?php echo base_url('barangs/tambah'); ?>">&nbsp;Tambah</a></li>
                            <li><i class="fa fa-eye"></i><a href="<?php echo base_url('barangs/index'); ?>">&ensp;Lihat</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Pelanggan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus-circle"></i><a href="<?php echo base_url('pelanggans/tambah'); ?>">&nbsp;Tambah</a></li>
                            <li><i class="fa fa-eye"></i><a href="<?php echo base_url('pelanggans/index'); ?>">&ensp;Lihat</a></li>
                        </ul>
                    </li>
                    <li class="menu-title">Proses</li>
                      <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-handshake-o"></i>Aplikasi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus-circle"></i><a href="<?php echo base_url('aplikasis/tambah'); ?>">&nbsp;Tambah</a></li>
                            <li><i class="fa fa-eye"></i><a href="<?php echo base_url('aplikasis/index'); ?>">&ensp;Lihat</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-money"></i>Angsuran</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus-circle"></i><a href="<?php echo base_url('angsurans/tambah'); ?>">&nbsp;Tambah</a></li>
                            <li><i class="fa fa-eye"></i><a href="<?php echo base_url('angsurans/index'); ?>">&ensp;Lihat</a></li>
                        </ul>
                    </li>
                    <li class="menu-title">OUTPUT</li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-file-text-o"></i>Laporan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="<?php echo base_url(); ?>laporans/insentif_produk/index_error">Insentif Produk</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="<?php echo base_url(); ?>laporans/insentif_survey/index_error">Insentif Survey</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="<?php echo base_url(); ?>laporans/kas_harian/index_error">Kas Harian</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="<?php echo base_url(); ?>laporans/stock/index_error">Stock</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="<?php echo base_url(); ?>laporans/komisi/index_error">Komisi</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="<?php echo base_url(); ?>laporans/pembelian/index_error">Pembelian</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="<?php echo base_url(); ?>laporans/penjualan/index_error">Penjualan</a></li>
                        </ul>
                    </li>

                    <!-- 
                    <li class="menu-title">Simulasi</li>
                    <li class="">
                        <a href="<?php echo base_url('dashboard'); ?>"><i class="menu-icon fa fa-laptop"></i>Simulasi Kredit</a>
                        <a href="<?php echo base_url('debugs/debug_toastr'); ?>"><i class="menu-icon fa fa-laptop"></i>TOASTR</a>
                    </li> -->

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel --> 
    <!-- Left Panel -->