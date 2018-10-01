<?php

function sa_alert($type, $title = 'Success !!', $text, $location){
	?>
	 <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/images/favicon.png'); ?>">
    <title>
        <?php
        echo (isset($title)) ? $title : 'Sila';
        ?>        
    </title>
	<!-- Sweetalert -->
	<link href="<?php echo base_url('assets/css/lib/sweetalert/sweetalert.css'); ?>" rel="stylesheet">
	<script src="<?php echo base_url('assets/js/lib/sweetalert/sweetalert.min.js'); ?>"></script>
	<?php
	echo "
    <script type='text/javascript'>
        setTimeout(function () {  
            swal({
                title: '".$title."',
                text:  '".$text."',
                type: '".$type."',
                timer: 2000,
                showConfirmButton: true
            });  
        },10); 
        window.setTimeout(function(){ 
            window.location.replace('".$location."');
        } ,2000); 
	</script>
	"; 
}

function trial_alert($type, $title, $text, $location){
	?>
	<!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/images/favicon.png'); ?>">
    <title>
        <?php
        echo (isset($title)) ? $title : 'Sila';
        ?>        
    </title>
	<!-- Sweetalert -->
	<link href="<?php echo base_url('assets/css/lib/sweetalert/sweetalert.css'); ?>" rel="stylesheet">
	<script src="<?php echo base_url('assets/js/lib/sweetalert/sweetalert.min.js'); ?>"></script>
	<?php
	echo "
    <script type='text/javascript'>
        setTimeout(function () {  
            swal({
                title: '".$title." !!',
                text:  '".$text."',
                type: '".$type."',
                timer: 2000,
                showConfirmButton: true
            });  
        },10);  
	</script>
	"; 
}

function alert_default($type, $text){
	echo '
        <div class="alert alert-'.$type.'">
            <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                <i class="nc-icon nc-simple-remove"></i>
            </button>
            <span>
                <b> '.$type.' - </b>'.$text.'</span>
        </div>
    ';
}

function confirm_alert(){
	?>
	<!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/images/favicon.png'); ?>">
    <title>
        <?php
        echo (isset($title)) ? $title : 'Sila';
        ?>        
    </title>
	<!-- Sweetalert -->
	<link href="<?php echo base_url('assets/css/lib/sweetalert/sweetalert.css'); ?>" rel="stylesheet">
	<script src="<?php echo base_url('assets/js/lib/sweetalert/sweetalert.min.js'); ?>"></script>
	<?php
	echo '
		 <script type="text/javascript">
			jQuery(document).ready(function($){
			$(".hapus-sa").on("click", function(){
				var getLink = $(this).attr("id");
				swal({
					title:  			"yakin ingin hapus data ini?",
					text: 				"data yang sudah di hapus tidak akan bisa digunakan lagi!",
					type: 				"warning",
					showCancelButton: 	true,
					confirmButtonColor: "#DD6B55",
					confirmButtonText: 	"ya, hapus data!",
					cancelButtonText: 	"tidak, batalkan!",
					closeOnConfirm: 	false,
					closeOnCancel: 		false
				}).then((result) => {
				  if (result.value) {
				    window.location.href = getLink;
				  } else {
		            swal({
		                title: "Cancelled !!",
		                text: "Hey, your data is remain safe !!",
		                timer: 2000,
		                type: "erro",
		                showConfirmButton: false
		            });
		          }
				});
			});
		});
		 </script>
	';
}

?>