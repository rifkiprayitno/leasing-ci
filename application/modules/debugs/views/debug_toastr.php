
<div class="content">
<div class="animated fadeIn">
<div class="row">

<div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Toastr Top Right</h4>
                                <div class="card-content">
                                    <div class="toastr m-t-15">
                                        <div class="text-left">
                                            <button type="button" class="btn btn-success m-b-10 m-l-5" id="toastr-success-top-right">Success</button>
                                            <button type="button" class="btn btn-info m-b-10 m-l-5" id="toastr-info-top-center">Info</button>
                                            <button type="button" class="btn btn-warning m-b-10 m-l-5" id="toastr-warning-top-right">Warning</button>
                                            <button type="button" class="btn btn-danger m-b-10 m-l-5" id="toastr-danger-bottom-full-width">Error</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

</div><!-- .row -->
<script src="<?php echo base_url('new_assets/js/vendor/jquery-2.1.4.min.js'); ?>"></script>

<!-- <script src="js/lib/toastr/toastr.min.js"></script> -->
<script type="text/javascript">
    
    $('#toastr-success-top-right').on("click", function() {
    toastr.success('This Is Success Message','Top Right',{
        timeOut: 5000,
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut",
        "tapToDismiss": false

    })
});

    $('#toastr-info-top-center').on("click", function() {
    toastr.info('This Is info Message','Top Center',{
        "positionClass": "toast-top-center",
        timeOut: 5000,
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut",
        "tapToDismiss": false
    })
});


$('#toastr-warning-top-right').on("click", function() {
    toastr.warning('This Is warning Message','Top Right',{
        "positionClass": "toast-top-right",
        timeOut: 5000,
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut",
        "tapToDismiss": false

    })
});

$('#toastr-danger-bottom-full-width').on("click", function() {
    toastr.error('This Is error Message','Bottom Full Width',{
        "positionClass": "toast-bottom-full-width",
        timeOut: 5000,
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut",
        "tapToDismiss": false

    })
});
</script>



</div><!-- .animated -->
</div><!-- .content -->
 