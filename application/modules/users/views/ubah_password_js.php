
<!--script AJAX password validation-->
<script type="text/javascript">
$(document).ready(function(){
	$("#passwordLama").change(function(){
        var passwordLama = $("#passwordLama").val();
        $("#pesan").html("<img src='loading.gif'> Cek Username");

        if(passwordLama==''){
                $("#pesan").html('<img src="<?php echo base_url('new_images/wrong.png'); ?>" width="20"> Passwrod tidak boleh kosong');
                $("#passwordLama").css('border', '3px #C33 solid');
        } else{
            $.ajax({
            	type: "POST", 
            	url: "<?php echo site_url('users/cek_password'); ?>", 
            	data: "passwordLama="+passwordLama, 
            	success:function(data){
            		console.log('log deck_password -> '+data);
                	if(data >0){
                    	$("#pesan").html('<img src="<?php echo base_url('new_images/true.png'); ?>" width="20">');
                    	$("#passwordLama").css('border', '3px #090 solid');
                	} else {
                    	$("#pesan").html('<img src="<?php echo base_url('new_images/wrong.png'); ?>" width="20"> Password tidak sesuai!');
                    	$("#passwordLama").css('border', '3px #C33 solid');
                	}
            	}
            });
        }
    })
});
</script> 

<!-- script validasi ulang password   -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#password_retype').change(function(){
        var passpertama=$('#password_baru').val();
        var passkedua=$('#password_retype').val();
            if($('#password_baru').val() != $('#password_retype').val()){
                 $('#password_retype').css('background','#e74c3c');
        }else if(passpertama == passkedua){
            $('#password_retype').css('background','#2ecc71');
        }
      });               
    });     
</script>