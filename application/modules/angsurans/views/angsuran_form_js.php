<!-- theme require -->
<script src="<?php echo base_url('new_assets/js/lib/datepicker/bootstrap-datepicker.min.js'); ?>"></script>


<script type="text/javascript">

$(function(){
   $('.datepicker').datepicker({
      format: 'yyyy-mm-dd'
    });
});

$("#bayar").keyup(function() {
  var angka = $("#bayar").val();
  angka = angka.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
  $("#small_bayar").html("Rp. "+angka);       
});

    $("#cari").click(function(){
        $("aplikasi_atas").show();
        $("aplikasi_bawah").show();
    });

    var kode = "<?php echo (isset($angsuran[0])) ? $angsuran[0]['aplikasi_kode'] : (isset($angsuran[0])) ? $angsuran[0]['apliaksi_id'] : '';?>";
    console.log("kode -> "+kode);
    if (kode.length < 9 && kode.length > 0) {
        console.log("panggil pilihlah -> "+kode);
        pilihlah(kode);
    }

    function formatNumber (num) {
         if (!num){
            return false;
        }
        else {
            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
        }
    }

   // function showhide(id) {
   //      var e       = document.getElementById(id);   
   //      var nomor   = document.getElementById("nomor_cari").value;
   //      var url     = "<?php //echo site_url();?>aplikasis/get_data";        
        
   //      e.style.display = (e.style.display == 'block') ? 'none' : 'block';

   //      $.ajax({
   //          url : url,
   //          method : "POST",
   //          dataType: 'json',
   //          data : {id : nomor}, //get value from elementtag (data-id)
   //          success :function(data){
   //              console.log('data->'+data.barang_nama);
   //              console.log('tenor->'+data.tenor);
   //              //read data, and put the value
   //              document.getElementById("nama_barang").value = data.barang_nama;
   //              document.getElementById("nama").value = data.nama;
   //              document.getElementById("dp").value = data.dp;
   //              document.getElementById("jatuh_tempo").value = data.jatuh_tempo;
   //              document.getElementById("tenor").value = data.tenor;
   //              document.getElementById("angsuran").value = data.angsuran;
   //              document.getElementById("status").value = data.status;

   //              document.getElementById("bayar").value = data.angsuran;
   //          },
   //          error: function(jqxhr, status, exception) {
   //              alert('Exception:', exception);
   //              console.log("ajax request-> error");
   //              console.log('url error'+url);
   //              console.log('nomor error'+nomor);
   //          }
   //      });
   //   }

//dipake
     function pilihlah(id){        
        var e   = document.getElementById('info_aplikasi');       
        var url = "<?php echo site_url();?>aplikasis/get_data";        
        console.log('pilih ->'+id+' | '+url);    

        var select = document.getElementById('select_tenor');
        var opt = document.createElement('option');
        var min = 1;
    
            $.ajax({
                url : url,
                method : "POST",
                dataType: 'json',
                data : {id : id}, //get value from elementtag (data-id)
                success :function(data){
                    document.getElementById("insert_angsuran").style.display = "block"; 
                    console.log('nama barang -> '+data.barang_nama);
                    console.log('tenor -> '+data.tenor);
                    console.log('kode -> '+data.aplikasi_kode);
                    
                    //read data, and put the value
                    document.getElementById("nomor_cari").value = data.aplikasi_kode;

                    document.getElementById("nama_barang").value = data.barang_nama;
                    document.getElementById("nama").value = data.nama;
                    document.getElementById("dp").value = formatNumber(data.dp);
                    document.getElementById("jatuh_tempo").value = data.jatuh_tempo;
                    document.getElementById("tenor").value = data.tenor;
                    document.getElementById("angsuran").value = formatNumber(data.angsuran);
                    document.getElementById("status").value = data.status;

                    if (!kode){
                        console.log('angsuran (kode)-> '+data.angsuran);
                        document.getElementById("bayar").value = data.angsuran;
                        populateSelect("select_tenor", 1, data.tenor);
                    }
                    
                                                                      
                },
                error: function(jqxhr, status, exception) {
                    alert('Exception:', exception);
                    console.log("ajax request-> error");
                    console.log('url error'+url);
                    console.log('nomor error'+nomor);
                }
            });

            $('#largeModal').modal('hide');
            $(document.body).removeClass("modal-open");
            $(".modal-backdrop").remove();
            e.style.display = (e.style.display == 'block') ? 'none' : 'block';
     }

function populateSelect(target, min, max){
    if (!target){
        return false;
    }
    else {
        var min = min || 0,
            max = max || min + 11;

        select = document.getElementById(target);

        for (var i = min; i<=max; i++){
            var opt = document.createElement('option');
            opt.value = i;
            opt.innerHTML = i;
            select.appendChild(opt);
        }
    }
}

// $(document).ready(function() {
//     //get data edit
//         $('#data-table').on('click','.pilih',function(){
//             var id  =$(this).data('id');            
//             var url = "<?php echo site_url();?>aplikasis/get_data";        
//                     console.log('pilih ->'+id+' | '+url);    
//             $.ajax({
//                 url : url,
//                 method : "POST",
//                 dataType: 'json',
//                 data : {id : nomor}, //get value from elementtag (data-id)
//                 success :function(data){
//                     console.log('data->'+data.barang_nama);
//                     console.log('tenor -> '+data.tenor);
//                     //read data, and put the value
//                     document.getElementById("nama_barang").value = data.barang_nama;
//                     document.getElementById("nama").value = data.nama;
//                     document.getElementById("dp").value = data.dp;
//                     document.getElementById("jatuh_tempo").value = data.jatuh_tempo;
//                     document.getElementById("tenor").value = data.tenor;
//                     document.getElementById("angsuran").value = data.angsuran;
//                     document.getElementById("status").value = data.status;
//                 },
//                 error: function(jqxhr, status, exception) {
//                     alert('Exception:', exception);
//                     console.log("ajax request-> error");
//                     console.log('url error'+url);
//                     console.log('nomor error'+nomor);
//                 }
//             });

//             $('#largeModal').modal('hide');
//             e.style.display = (e.style.display == 'block') ? 'none' : 'block';
                          
//         });
//         //**end**

//     function cari_tombol() {
//         var e = document.getElementById('');        
//         e.style.display = (e.style.display == 'block') ? 'none' : 'block';        
//     }
// });
 </script>