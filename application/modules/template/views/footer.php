<!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->

           


            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. </footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->

<div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="changePassModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
                <form action="javascript:;" novalidate="novalidate">
                    <div class="modal-header">
                    <h5 class="modal-title">Change Password</h5>
                    </div>
                    <div class="modal-body">
                        <div class="">
                            <div class="form-group">
                                <label for="oldPass">
                                    old Password
                                </label>
                                <input type="password"  data-val="true" data-val-required="this is Required Field" class="form-control" name="oldPass" id="oldPass"/>
                                <span class="field-validation-valid text-danger" data-valmsg-for="oldPass" data-valmsg-replace="true"></span>
                            </div>
                            <div class="form-group">
                                <label for="newPass">
                                    New Password
                                </label>
                                <input type="password" data-val="true" data-val-required="this is Required Field" class="form-control" name="newPass" id="newPass"/>
                                <span class="field-validation-valid text-danger"  data-valmsg-for="newPass" data-valmsg-replace="true"></span>
                                
                            </div>
                            <div class="form-group">
                                <label for="confirmPass">
                                    Confirm Password
                                </label>
                                <input type="password" data-val-equalto="Password not Match ", data-val-equalto-other="newPass" data-val="true" data-val-required="this is Required Field" class="form-control" name="confirmPass" id="confirmPass"/>
                                <span class="field-validation-valid text-danger" data-valmsg-for="confirmPass" data-valmsg-replace="true"></span>
                                
                            </div>
                                        
                        </div>

                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
          </div>
        </div>
      </div>
    
            
    <!-- All Jquery -->
    <script src="<?php echo base_url('assets/js/lib/jquery/jquery.min.js'); ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url('assets/js/lib/bootstrap/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/lib/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url('assets/js/jquery.slimscroll.js'); ?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url('assets/js/sidebarmenu.js'); ?>"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url('assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js'); ?>"></script>


    <script src="<?php echo base_url('assets/js/lib/datamap/d3.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/lib/datamap/topojson.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/lib/datamap/datamaps.world.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/lib/datamap/datamap-init.js'); ?>"></script>

    <script src="<?php echo base_url('assets/js/lib/weather/jquery.simpleWeather.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/lib/weather/weather-init.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/lib/owl-carousel/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/lib/owl-carousel/owl.carousel-init.js'); ?>"></script>

    <script src="<?php echo base_url('assets/js/lib/chartist/chartist.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/lib/chartist/chartist-plugin-tooltip.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/lib/chartist/chartist-init.js'); ?>"></script>

     <!-- sweetalert-->
    <script src="<?php echo base_url('assets/js/lib/sweetalert/sweetalert.min.js'); ?>"></script>
    <!-- scripit init-->
    <script src="<?php echo base_url('assets/js/lib/sweetalert/sweetalert.init.js'); ?>"></script>
    <!-- Toastr -->
    <script src="<?php echo base_url('assets/js/lib/toastr/toastr.min.js'); ?>"></script>
    <!-- scripit init-->
    <script src="<?php echo base_url('assets/js/lib/toastr/toastr.init.js'); ?>"></script>
    <!-- chartJS -->
    <script src="<?php echo base_url('assets/js/lib/chart-js/Chart.bundle.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/lib/chart-js/chartjs-init.js'); ?>"></script>
    <!-- chart morris -->
    <script src="<?php echo base_url('assets/js/lib/morris-chart/raphael-min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/lib/morris-chart/morris.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/lib/morris-chart/morris-init.js'); ?>"></script>

    <!-- DataTable -->
    <script src="<?php echo base_url('assets/js/lib/datatables/datatables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/lib/datatables/datatables-init.js'); ?>"></script>

    <!--Custom JavaScript -->
    <script src="<?php echo base_url('assets/js/custom.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/script-rifki.js'); ?>"></script> 

</body>

</html>