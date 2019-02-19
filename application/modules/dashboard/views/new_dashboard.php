<!-- add ons, depends on page need -->
<link href="<?php echo base_url('new_assets/css/charts/chartist.min.css" rel="stylesheet'); ?>">     
<link href="<?php echo base_url('new_assets/weather/css/weather-icons.css'); ?>" rel="stylesheet" />
<link href="<?php echo base_url('new_assets/calendar/fullcalendar.css'); ?>" rel="stylesheet" />

<div class="content pb-0">

            <!-- Widgets  -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-1">
                                    <i class="pe-7f-cash"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib"> 
                                        <div class="stat-text">$<span class="count">23569</span></div>
                                        <div class="stat-heading">Pedapatan</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-2">
                                    <i class="fa fa-handshake-o"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count"><?php echo $jumlah_aplikasi; ?></span></div>
                                        <div class="stat-heading">Aplikasi</div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-3">
                                    <i class="fa fa-diamond"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib"> 
                                        <div class="stat-text"><span class="count"><?php echo $jumlah_barang; ?></span></div>
                                        <div class="stat-heading">Barang</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-4">
                                    <i class="pe-7f-users"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib"> 
                                        <div class="stat-text"><span class="count"><?php echo $jumlah_konsumen; ?></span></div>
                                        <div class="stat-heading">Konsumen</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- Widgets End -->


            <!--  Traffic  -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">  
                        <div class="card-body">
                            <h4 class="box-title">Traffic </h4>
                        </div>
                        <div class="row"> 
                            <div class="col-lg-8">
                                <div class="card-body"> 
                                    <!-- <canvas id="TrafficChart"></canvas>   -->
                                    <div id="traffic-chart" class="traffic-chart"></div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card-body">
                                    <div class="progress-box progress-1">
                                        <h4 class="por-title">Visits</h4>
                                        <div class="por-txt">96,930 Users (40%)</div>
                                        <div class="progress mb-2" style="height: 5px;">
                                            <div class="progress-bar bg-flat-color-1" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="progress-box progress-2">
                                        <h4 class="por-title">Bounce Rate</h4>
                                        <div class="por-txt">3,220 Users (24%)</div>
                                        <div class="progress mb-2" style="height: 5px;">
                                            <div class="progress-bar bg-flat-color-2" role="progressbar" style="width: 24%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="progress-box progress-2">
                                        <h4 class="por-title">Unique Visitors</h4>
                                        <div class="por-txt">29,658 Users (60%)</div>
                                        <div class="progress mb-2" style="height: 5px;">
                                            <div class="progress-bar bg-flat-color-3" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="progress-box progress-2">
                                        <h4 class="por-title">Targeted  Visitors</h4>
                                        <div class="por-txt">99,658 Users (90%)</div>
                                        <div class="progress mb-2" style="height: 5px;">
                                            <div class="progress-bar bg-flat-color-4" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div> <!-- /.card-body -->
                            </div>
                        </div> <!-- /.row --> 
                        <div class="card-body"></div>
                    </div> 
                </div><!-- /# column -->
            </div>
            <!--  Traffic  End -->


  

            <div class="clearfix"></div>
            <div class="orders">
                <div class="row">
                    <div class="col-xl-8"> 
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Angsuran</h4>
                            </div>
                            <div class="card-body--">
                                <div class="table-stats order-table ov-h">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th class="serial">#</th>
                                                <th class="avatar">Avatar</th>
                                                <th>KTP</th>
                                                <th>Nama</th>
                                                <th>Barang</th>
                                                <th>ke</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody> 
                                            <!-- <tr>
                                                <td class="serial">1.</td>
                                                <td class="avatar">
                                                    <div class="round-img">
                                                        <a href="#"><img class="rounded-circle" src="<?php echo base_url('new_images/avatar/1.jpg'); ?>" alt=""></a>
                                                    </div>
                                                </td>
                                                <td> #5469 </td>
                                                <td>  <span class="name">Louis Stanley</span> </td> 
                                                <td> <span class="product">iMax</span> </td>
                                                <td><span class="count">231</span></td>
                                                <td> 
                                                    <span class="badge badge-complete">Complete</span>
                                                </td> 
                                            </tr> -->

                                        <?php
                                        $number = 0;
                                            foreach ($lima_angsuran as $baris) {
                                                $number +=1;
                                        ?>
                                            <tr>
                                                <td class="serial"><?php echo $number; ?>.</td>
                                                <td class="avatar">
                                                    <div class="round-img">
                                                        <a href="#"><img class="rounded-circle" src="<?php echo base_url('new_images/avatar/1.jpg'); ?>" alt=""></a>
                                                    </div>
                                                </td>
                                                <td><?php echo $baris->no_ktp; ?></td>
                                                <td>  <span class="name"><?php echo $baris->nama; ?></span> </td>
                                                <td> <span class="product"><?php echo $baris->barang_nama; ?></span> </td>
                                                <td><span class="count"><?php echo $baris->angsuran_ke; ?></span></td>
                                                <td> 
                                                    <span class="badge badge-complete">Complete</span>
                                                </td> 
                                            </tr>  
                                        <?php } ?>  
                                        </tbody>
                                    </table>
                                </div> <!-- /.table-stats -->
                            </div>
                        </div> <!-- /.card -->
                    </div>  <!-- /.col-lg-8 -->

                    <div class="col-xl-4">
                        <div class="row"> 
                            <div class="col-lg-6 col-xl-12">
                                <div class="card br-0"> 
                                    <div class="card-body">
                                        <div class="chart-container ov-h">
                                            <div id="flotPie1" class="float-chart"></div>
                                        </div>
                                    </div> 
                                </div><!-- /.card -->
                            </div>

                            <div class="col-lg-6 col-xl-12">
                                <div class="card bg-flat-color-3  ">
                                    <div class="card-body">
                                        <h4 class="card-title m-0  white-color ">August 2018</h4>
                                    </div>
                                     <div class="card-body">
                                         <div id="flotLine5" class="flot-line"></div>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.col-md-4 -->
                </div> 
            </div> <!-- /.order -->





            <!-- To Do and Live Chat --> 
            <div class="row" hidden>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title box-title">To Do List</h4>
                            <div class="card-content">
                                <div class="todo-list">
                                    <div class="tdl-holder">
                                        <div class="tdl-content">
                                            <ul>
                                                <li>
                                                    <label>
                                                        <input type="checkbox"><i class="check-box"></i><span>Conveniently fabricate interactive technology for ....</span> 
                                                        <a href='#' class="fa fa-times"></a>
                                                        <a href='#' class="fa fa-pencil"></a>
                                                        <a href='#' class="fa fa-check"></a>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox"><i class="check-box"></i><span>Creating component page</span>
                                                        <a href='#' class="fa fa-times"></a>
                                                        <a href='#' class="fa fa-pencil"></a>
                                                        <a href='#' class="fa fa-check"></a>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" checked><i class="check-box"></i><span>Follow back those who follow you</span>
                                                        <a href='#' class="fa fa-times"></a>
                                                        <a href='#' class="fa fa-pencil"></a>
                                                        <a href='#' class="fa fa-check"></a>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" checked><i class="check-box"></i><span>Design One page theme</span>
                                                        <a href='#' class="fa fa-times"></a>
                                                        <a href='#' class="fa fa-pencil"></a>
                                                        <a href='#' class="fa fa-check"></a>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label>
                                                        <input type="checkbox" checked><i class="check-box"></i><span>Creating component page</span>
                                                        <a href='#' class="fa fa-times"></a>
                                                        <a href='#' class="fa fa-pencil"></a>
                                                        <a href='#' class="fa fa-check"></a>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div> 
                                    </div>
                                </div> <!-- /.todo-list -->
                            </div>
                        </div> <!-- /.card-body -->
                    </div><!-- /.card -->
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title box-title">Live Chat</h4>
                            <div class="card-content">
                                <div class="messenger-box">
                                    <ul>
                                        <li>
                                            <div class="msg-received msg-container">
                                                <div class="avatar">
                                                   <img src="<?php echo base_url('new_images/avatar/64-1.jpg'); ?>" alt="">
                                                   <div class="send-time">11.11 am</div>
                                                </div> 
                                                <div class="msg-box">
                                                    <div class="inner-box">
                                                        <div class="name">
                                                            John Doe
                                                        </div>
                                                        <div class="meg">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis sunt placeat velit ad reiciendis ipsam   
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.msg-received -->
                                        </li>
                                        <li> 
                                            <div class="msg-sent msg-container">
                                                <div class="avatar">
                                                   <img src="<?php echo base_url('new_images/avatar/64-2.jpg'); ?>" alt="">
                                                   <div class="send-time">11.11 am</div>
                                                </div> 
                                                <div class="msg-box">
                                                    <div class="inner-box">
                                                        <div class="name">
                                                            John Doe
                                                        </div>
                                                        <div class="meg">
                                                            Hay how are you doing?  
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.msg-sent -->
                                        </li>
                                    </ul>
                                    <div class="send-mgs">
                                        <div class="yourmsg">
                                            <input class="form-control" type="text">
                                        </div>
                                        <button class="btn msg-send-btn">
                                            <i class="pe-7f-paper-plane"></i>
                                        </button>
                                    </div>
                                </div><!-- /.messenger-box -->
                            </div>
                        </div> <!-- /.card-body -->
                    </div><!-- /.card -->
                </div>

            </div> <!-- /.row -->
            <!-- To Do and Live Chat End --> 


            <!-- Calender Chart Weather  -->
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="card">
                        <div class="card-body">  
                            <!-- <h4 class="box-title">Chandler</h4> -->
                            <div class="calender-cont widget-calender">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div><!-- /.card -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card ov-h">
                        <div class="card-body bg-flat-color-2"> 
                            <div id="flotBarChart" class="float-chart ml-4 mr-4"></div>
                        </div>
                        <div id="cellPaiChart" class="float-chart"></div> 
                    </div><!-- /.card -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card weather-box">
                        <h4 class="weather-title box-title">Weather</h4>
                        <div class="card-body">  
                            <div class="weather-widget">
                                <div id="weather-one" class="weather-one"></div>
                            </div> 
                        </div>
                    </div><!-- /.card -->
                </div>
            </div><!-- /.row -->
            <!-- Calender Chart Weather  End -->


            <div class="modal fade none-border" id="event-modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><strong>Add New Event</strong></h4>
                        </div>
                        <div class="modal-body"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                            <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Add Category -->
            <div class="modal fade none-border" id="add-category">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><strong>Add a category </strong></h4>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label">Category Name</label>
                                        <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label">Choose Category Color</label>
                                        <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                            <option value="success">Success</option>
                                            <option value="danger">Danger</option>
                                            <option value="info">Info</option>
                                            <option value="pink">Pink</option>
                                            <option value="primary">Primary</option>
                                            <option value="warning">Warning</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MODAL -->

        </div> <!-- .content -->



<!--  -->
    <?php 
    $this->view('dashboard/new_dashboard_js'); 
    ?>
<!--  -->


 

 