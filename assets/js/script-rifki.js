jQuery(document).ready(function($){
        $('.hapus-sa').on('click',function(){
            var getLink = $(this).attr('id');
            swal({
                title:'Alert',
                text: 'Yakin hapus data?',
                type: 'warning',
                html: true,
                confirmButtonColor: '#d9534f',
                showCancelButton: true,
            },function(){
                window.location.href = getLink
            });
            return false;
        });
    });

jQuery(document).ready(function($){
        $('.delete-link').on('click',function(){
            var getLink = $(this).attr('id');
            swal({
                title: "Are you sure to delete ?",
                text: "You will not be able to recover this data !!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it !!",
                cancelButtonText: "No, cancel it !!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm){
                if (isConfirm) {                                      
                    window.location.href = getLink;                    
                }
                else {
                    swal({
                        title: "Cancelled !!",
                        text: "Hey, your data is remain safe !!",
                        timer: 2000,
                        type: 'error',
                        showConfirmButton: false
                    });
                }
            });            
            return false;
        });
    });


jQuery(document).ready(function($){
        $('.edit-link').on('click',function(){
            var getLink = $(this).attr('href');
            swal({
                title:'Alert',
                text: 'Update Data?',
                type: 'warning',
                html: true,
                confirmButtonColor: '#d9534f',
                showCancelButton: true,
            },function(){
                window.location.href = getLink
            });
            return false;
        });
    });

$(document).ready(function(){
        $('#confirm_password').change(function(){
        var passpertama=$('#password').val();
        var passkedua=$('#confirm_password').val();
            if($('#password').val() != $('#confirm_password').val()){
                 $('#confirm_password').css('background','#e74c3c');
                 $("#pesan-password").html('<img src="assets/icons/cancel-ic.png" width="16px"> <font color="red">password doesnt match !</font>');
        }else if(passpertama == passkedua){
            $('#confirm_password').css('background','#2ecc71');
            $("#pesan-password").html('<img src="assets/icons/check-ic.png" width="16px">');
        }
      });  
       $("#username").change(function()
        {
            var username = $("#username").val();
            $("#pesan").html("<img src='assets/icons/spinner-gif-ic.gif' width='16px'> Cheking Username..");

            if(username=='')
            {
                $("#pesan").html('<img src="assets/icons/cancel-ic.png" width="16px"> <font color="red">Username cant be empty</font>');
                $("#username").css('border', '3px #C33 solid');
            }
            else
                $.ajax({type: "POST", url: "pages/users/user_add_validation.php", data: "username="+username, success:function(data)
                {
                    if(data == 0)
                    {
                        $("#pesan").html('<img src="assets/icons/check-ic.png" width="16px">');
                        $("#username").css('border', '3px #090 solid');
                    }
                   else
                   {
                    $("#pesan").html('<img src="assets/icons/cancel-ic.png" width="16px"> <font color="red">Username not available</font>');
                    $("#username").css('border', '3px #C33 solid');
                   }
                }});
        });             
    });