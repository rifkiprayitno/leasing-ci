 <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a class="has-arrow  " href="<?php echo base_url('dashboard'); ?>" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard </span></a>
                            </li>
                        <li class="nav-label">Apps</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-address-book"></i><span class="hide-menu">Pengguna</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('users/tambah'); ?>">&ensp;Tambah</a></li>
                                <li><a href="<?php echo base_url('users/index'); ?>">&ensp;Lihat</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-diamond"></i><span class="hide-menu">Barang</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('barangs/tambah'); ?>">Tambah</a></li>
                                <li><a href="<?php echo base_url('barangs/index'); ?>">Lihat</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-handshake-o"></i><span class="hide-menu">Aplikasi</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('aplikasis/tambah'); ?>">Tambah</a></li>
                                <li><a href="<?php echo base_url('aplikasis/index'); ?>">Lihat</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-money"></i><span class="hide-menu">Angsuran</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('angsurans/tambah'); ?>">Tambah</a></li>
                                <li><a href="<?php echo base_url('angsurans/index'); ?>">Lihat</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-bar-chart"></i><span class="hide-menu">Charts</span></a>                            
                        </li>                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->