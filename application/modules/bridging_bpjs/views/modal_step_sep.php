<style>
  .ui-autocomplete-loading {
    background: white url("<?php echo base_url(); ?>new_images/Load_88.gif") right center no-repeat;
  }
  </style>
<!-- MODAL STEP-->
        <div id="sampleModal" class="modal" tabindex="-1" role="dialog" aria-labelledby="myTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true" class="visible-xs">&times;</span>

                        </button>
                         <h4 class="modal-title" id="myTitle">CEK/BUAT SEP</h4>

                    </div>
                    <div class="modal-body">
<!-- langkah pertama -->
                        <div id="step1" class="step1"> <span>Memeriksa Kepesertaan BPJS</span>

                            <input type="text" name="no_kartu_cek" class="form-control" id="no_kartu_cek" placeholder="No Kartu / NIK" required>
                            <button id="btnEndStep1" class="btn btn-success" onclick="cekNoBPJS()">CEK PESERTA</button>
                        </div>
                        <hr>
<!-- /langkah pertama -->
<!-- langkah kedua -->
                        <div id="step2" class="hideMe"> <span>Status Kepesertaan BPJS</span>
                            
                        <div class="row form-horizontal">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputnorm" class="col-sm-4 control-label">Cek No kartu</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="no_param" class="form-control" id="no_param" placeholder="Nama Ibu" tabindex="23" required readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputnorm" class="col-sm-4 control-label">Cek response</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="msg_res" class="form-control" id="msg_res" placeholder="Nama Ibu" tabindex="23" required readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-horizontal">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputnorm" class="col-sm-4 control-label">No Kartu BPJS</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="no_bpjs" id="no_bpjs" class="form-control" tabindex="23" required readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputnorm" class="col-sm-4 control-label">Nama Peserta</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nm_peserta" id="nm_peserta" class="form-control" tabindex="23" required readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-horizontal">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputnorm" class="col-sm-4 control-label">No NIK/KTP</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="no_nik" id="no_nik" class="form-control" tabindex="23" required readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputnorm" class="col-sm-4 control-label">Klinik</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="klinik" id="klinik" class="form-control" tabindex="23" required readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-horizontal">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputnorm" class="col-sm-4 control-label">Kelas Layanan</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="kelas" id="kelas" class="form-control" tabindex="23" required readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputnorm" class="col-sm-4 control-label">Status</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="status" id="status" class="form-control" tabindex="23" required readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-horizontal">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputnorm" class="col-sm-4 control-label">Tanggal Lahir</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control" tabindex="23" required readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputnorm" class="col-sm-4 control-label">Pekerjaan</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" tabindex="23" required readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-horizontal">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputnorm" class="col-sm-4 control-label"></label>
                                    <div class="col-sm-8">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputnorm" class="col-sm-4 control-label"></label>
                                    <div class="col-sm-8">
                                        <button id="btnEndStep2" class="btn btn-warning">BUAT SEP</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        </div>
<!-- /langkah kedua -->
<hr>
<!-- langkah ketiga -->
                        <div id="step3" class="hideMe"> <span>Pembuatan SEP</span>

                        <div class="row form-horizontal">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputnorm" class="col-sm-4 control-label">Pilih</label>
                                    <div class="col-sm-8">
                                        <input type="radio" name="plih" value="rujukan">Rujukan
                                        <input type="radio" name="plih" value="manual">Rujukan Manual/IGD
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputnorm" class="col-sm-4 control-label">Pelayanan</label>
                                    <div class="col-sm-8">
                                        <select>
                                            <option>pelayanan satu</option>
                                            <option>pelayanan dua</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-horizontal">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputnorm" class="col-sm-4 control-label">Tanggal SEP</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="tgl_sep">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputnorm" class="col-sm-4 control-label">PPK Asal Peserta</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="ppk" id="ppk" placeholder="ketik kode atau nama ppk asal rujukan min 3 karakter">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-horizontal">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputnorm" class="col-sm-4 control-label">Nomor</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nomoran" id="nomoran" placeholder="ketik nomor">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputnorm" class="col-sm-4 control-label"></label>
                                    <div class="col-sm-8">
                                        <input type="radio" name="nomorradio" value="bpjs">BPJS
                                        <input type="radio" name="nomorradio" value="nik">NIK(eKTP)
                                        <input type="radio" name="nomorradio" value="reader">eKTP-Reader
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-horizontal">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputnorm" class="col-sm-4 control-label"></label>
                                    <div class="col-sm-8">
                                         <div id="log" style="height: 200px; width: 300px; overflow: auto;" class="ui-widget-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputnorm" class="col-sm-4 control-label"></label>
                                    <div class="col-sm-8">
                                        <button id="btnEndStep3" class="btn btn-danger">BUAT SEP</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        </div>
<!-- /langkah ketiga -->
                    </div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>
        <!-- /.MODAL STEP -->

<script type="text/javascript">


function cekNoBPJS(){
    //window.location = "<?php //echo base_url();?>Rawat_jalan/cek_kartu/" + document.getElementById("no_kartu_cek").value;
        var nomor   = document.getElementById("no_kartu_cek").value;
        var url     = "<?php echo base_url();?>rawat_jalan/echo_cek_kartu/"+nomor; 
        $.ajax({
            url : url,
            method : "GET",
            dataType: 'json',
            success :function(data){
                document.getElementById("no_param").value = data.Code;
                document.getElementById("msg_res").value = data.status;
                document.getElementById("no_bpjs").value = data.noKartu;
                document.getElementById("nm_peserta").value = data.nama;                           
                document.getElementById("no_nik").value = data.nik;
                document.getElementById("klinik").value = data.nmProvider;                           
                document.getElementById("kelas").value = data.hakKelas;
                document.getElementById("status").value = data.statusPeserta;                           
                document.getElementById("tgl_lahir").value = data.tglLahir;
                document.getElementById("pekerjaan").value = data.jenisPeserta;                           
            },
            error: function(jqxhr, status, exception) {
                alert('Exception:', exception);
                console.log("ajax request-> error");
                console.log("url-> "+url);
            }
        });
}

//reset modal -> FAILED
// $(document).ready(function() {
//   $(".modal").on("hidden.bs.modal", function() {
//     $(".step1").html("");
//   });
// });
</script>
<!--  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> 
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<link rel="stylesheet" href="<?php echo base_url('new_assets/js/lib/jquery/jquery.autocomplete.css'); ?>">
<script src="<?php echo base_url('new_assets/js/lib/jquery/jquery.autocomplete.js'); ?>"></script>
<script type='text/javascript'>
        
        $(document).ready(function(){
            var site = "<?php echo site_url();?>";
            var ppk_char = document.getElementById('ppk').value;
            var url_ppk     = "<?php echo site_url();?>bridging_bpjs/bridge_referensi/cek_faskes_satu/cia"; 
            console.log("url_ppk -> "+url_ppk);
            $('#ppk').autocomplete({
                // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
                serviceUrl: url_ppk,
                // minLength: 3,
                // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
                onSelect: function (faskes) {
                    $('#nomoran').val(''+faskes.kode); // membuat id 'v_nim' untuk ditampilkan
                    $('#ppk').val(''+faskes.value); // membuat id 'v_nim' untuk ditampilkan
                    // $('#handphone').val(''+faskes.kode); // membuat id 'v_jurusan' untuk ditampilkan
                },

            });
        });
</script> 
<!-- <script type="text/javascript">
  $(document).ready( function() {
    function log( message ) {
      $( "<div>" ).text( message ).prependTo( "#log" );
      $( "#log" ).scrollTop( 0 );log
    }

    $( "#ppks" ).autocomplete({
        // console.log("autom complete ppk berjalan");
      source: function( request, response ) {
         var ppk_char = document.getElementById('ppk').value;
         var url_ppk     = "<?php echo base_url();?>rawat_jalan/echo_cek_faskes_satu/"+ppk_char; 
        $.ajax( {
          // val : document.getElementById('ppk').value,
          url: url_ppk,
          dataType: "json",
          minLength: 3,
          data: {
            term: request.term
          },
          success: function( data ) {
            // alert('request autocomplete succcess');
             // Re-rendering the JSON -> Stringify > Parse
            // data = jQuery.parseJSON(JSON.stringify(data));
            // Debugging the JSON object in console
            console.log(data); 
            // ----------------------------------------------
           response(data);
            // debugger;
            // callback($.map(data.cities, function (obj) {
            //     return obj.Main
            // }))
             // response($.map( data, function(item) {
             //    return {
             //        label: item.stateName,
             //        value: item.nama,
             //        abbrev: item.stateAbbrev
             //      };
             //    }));
          },
            error: function(jqxhr, status, exception) {
                alert('Exception:', exception);
                console.log("ajax request-> error | "+url_ppk);
            }
        } );
      },
      minLength: 3,
      select: function( event, ui ) {
        log( "Selected: " + ui.item.value + " aka " + ui.item.id );
      }
    } );
  } );
  </script> -->