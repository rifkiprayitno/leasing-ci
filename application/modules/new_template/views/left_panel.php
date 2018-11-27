    <!-- Left Panel --> 
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default"> 
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo base_url('dashboard'); ?>"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">App</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-address-book"></i>Provinsi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus-circle"></i><a href="<?php echo base_url('provinsis/tambah'); ?>">&nbsp;Tambah</a></li>
                            <li><i class="fa fa-eye"></i><a href="<?php echo base_url('provinsis/index'); ?>">&ensp;Lihat</a></li>
                        </ul>
                    </li><li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-address-book"></i>Kabkota</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus-circle"></i><a href="<?php echo base_url('kabkotas/tambah'); ?>">&nbsp;Tambah</a></li>
                            <li><i class="fa fa-eye"></i><a href="<?php echo base_url('kabkotas/index'); ?>">&ensp;Lihat</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-address-book"></i>Pengguna</a>
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

                    <!-- <li class="menu-title">Extras</li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Bridging BPJS</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="<?php echo base_url(); ?>bridging_bpjs/c_peserta">search</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="<?php echo base_url(); ?>bridging_bpjs/sep">SEP</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                        </ul>
                    </li> -->
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel --> 
    <!-- Left Panel -->