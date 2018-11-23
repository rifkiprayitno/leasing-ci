 <div class="content">
    <div class="animated fadeIn">
        <div class="row">

<div class="col-lg-12">
<div class="card">
    <div class="card-header">
        <strong class="card-title">Data Table</strong>
    </div>
    <div class="card-body">
        <input type="text" class="form-control typeahead border-primary" name="query" id="query" placeholder="Start typing something to search..." data-provide="typeahead" autocomplete="off" hidden="">
        <div class="table-responsive m-t-40">
            <table id="datatable-aplikasi" class="table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Pilih</th>
                        <th>No</th>
                        <th>Kode Aplikasi</th>
                        <th>Pelanggan</th>
                        <th>Barang</th>
                        <th>Tenor</th>
                        <th>DP</th>
                        <th>Angsuran</th>
                    </tr>
                </thead>
                
                <tbody >
                    <!-- isi data dari ajax -->                     
                                                                            
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

</div><!-- .row -->
</div><!-- .animated -->
</div><!-- .content -->

<!-- javascript get data to datatable -->

<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
<script src="<?php echo base_url('new_assets/js/vendor/jquery-2.1.4.min.js'); ?>"></script>
<script src="<?php echo base_url('new_assets/js/lib/data-table/datatables.min.js'); ?>"></script>
<script src="<?php echo base_url('new_assets/js/lib/data-table/dataTables.bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('new_assets/js/lib/data-table/dataTables.buttons.min.js'); ?>"></script>
<script src="<?php echo base_url('new_assets/js/lib/data-table/buttons.bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('new_assets/js/lib/data-table/jszip.min.js'); ?>"></script>
<script src="<?php echo base_url('new_assets/js/lib/data-table/pdfmake.min.js'); ?>"></script>
<script src="<?php echo base_url('new_assets/js/lib/data-table/vfs_fonts.js'); ?>"></script>
<script src="<?php echo base_url('new_assets/js/lib/data-table/buttons.html5.min.js'); ?>"></script>
<script src="<?php echo base_url('new_assets/js/lib/data-table/buttons.print.min.js'); ?>"></script>
<script src="<?php echo base_url('new_assets/js/lib/data-table/buttons.colVis.min.js'); ?>"></script>
<script src="<?php echo base_url('new_assets/js/lib/data-table/datatables-init.js'); ?>"></script>

<!-- typehead auto complete json -->
<script src="<?php echo base_url('new_assets/js/bootstrap3-typeahead.js'); ?>"></script>
<script type="text/javascript">
    //json-genarator.com for mock data
    $.get("https://next.json-generator.com/api/json/get/V1cGoKmDV", function(data){
        console.log(data);
        // use a data source with 'id' and 'name' keys
        $("#query").typeahead({ source:data });
    },'json');


</script>
<script type="text/javascript">
 
    var save_method; //for save method string
    var table;
 
    $(document).ready(function() {
    //data table load setting
        $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
        {
            return {
                "iStart": oSettings._iDisplayStart,
                "iEnd": oSettings.fnDisplayEnd(),
                "iLength": oSettings._iDisplayLength,
                "iTotal": oSettings.fnRecordsTotal(),
                "iFilteredTotal": oSettings.fnRecordsDisplay(),
                "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
            };
        };

        table = $("#datatable-aplikasi").dataTable({
            initComplete: function() {
                var api = this.api();
                $('#datatable-aplikasi_filter input')
                    .off('.DT')
                    .on('input.DT', function() {
                        api.search(this.value).draw();
                    }
                );
            },
            oLanguage: {
                sProcessing: '<p style="color: green"><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></p><span class="sr-only">Loading…</span>',
            },
            processing: true,
            serverSide: true,
            "ajax": {
                "url": '<?php echo site_url('angsurans/get_aplikasi_json'); ?>',
                "type": "POST"
            },
            //Set column definition initialisation properties.
            "columns": [
                {"data": "action",width:50},
                {"data": "apliaksi_id",width:30},
                {"data": "aplikasi_kode",width:170},
                {"data": "nama",width:100},
                {"data": "barang_nama",width:170},
                {"data": "tenor",width:100},
                {"data": "dp",width:100},                        
                {"data": "angsuran",width:100}                
            ],
            order: [[2, 'desc']],
            rowCallback: function(row, data, iDisplayIndex) {
                var info = this.fnPagingInfo();
                var page = info.iPage;
                var length = info.iLength;
                var index = page * length + (iDisplayIndex + 1);
                $('td:eq(1)', row).html(index);
            }
        });
    //**end**
    });


//for autocomplete in search
// $(document).ready(function() {
//    var table = $('#datatable-aplikasi').DataTable({
//       'initComplete': function(){
//          var api = this.api();
//          console.log(api);
//          // Initialize Typeahead plug-in
//          $('.dataTables_filter input[type="search"]', api.table().container())
//             .typeahead({
//                source: function(query, process){
//                   $.getJSON('https://api.myjson.com/bins/e66c3', { q: query }, function (data){
//                      return process(data);
//                   });
//                },
//                afterSelect: function(value){
//                   api.search(value).draw();
//                }
//             }
//          );
//       }
//    });
// });
</script>
