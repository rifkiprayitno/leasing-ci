 <div class="content">
    <div class="animated fadeIn">
        <div class="row">

<div class="col-lg-12">
<div class="card">
    <div class="card-header">
        <strong class="card-title">Data Table</strong>
    </div>
    <div class="card-body">
        <h4 class="card-title">Data Export</h4>
        <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
        <button class="btn btn-success" onclick="window.location.href='<?php echo base_url('angsurans/tambah'); ?>'"><i class="fa fa-plus-circle"></i> Tambah Data</button>
        <button class="btn btn-default" onclick="reload_table()"><i class="fa fa-refresh"></i> Muat Ulang</button>
        <hr>
        <div class="table-responsive m-t-40">
            <table id="datatable-aplikasi" class="table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Bayar</th>
                        <th>Kode Aplikasi</th>
                        <th>Pelanggan</th>
                        <th>Barang</th>
                        <th>Angsuran ke-</th>
                        <th>Jumlah Bayar</th>
                        <th>Action</th>
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
                "url": '<?php echo site_url('angsurans/get_angsuran_dt'); ?>',
                "type": "POST"
            },
            //Set column definition initialisation properties.
            "columns": [
                {"data": "angsuran_id",width:170},
                {"data": "tanggal_bayar",width:100},
                {"data": "angsuran_aplikasi_kode",width:170},
                {"data": "nama",width:100},
                {"data": "barang_nama",width:170},
                {"data": "angsuran_ke",width:100},
                {"data": "bayar",width:100, render: $.fn.dataTable.render.number(',', '.', '')},
                {"data": "action",width:100}
            ],
            order: [[2, 'desc']],
            rowCallback: function(row, data, iDisplayIndex) {
                var info = this.fnPagingInfo();
                var page = info.iPage;
                var length = info.iLength;
                var index = page * length + (iDisplayIndex + 1);
                $('td:eq(0)', row).html(index);
            }
        });
    //**end**
    });

function add_person()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
}

function reload_table()
{
    $('#datatable-aplikasi').DataTable().ajax.reload(); //reload datatable ajax 
}

function del(id){
    if(confirm('Yakin menghapus data ?')){
        $.ajax({
                url :"<?php echo site_url();?>aplikasis/hapus/"+id,
                type:"post",
                success:function(){
                    location.reload();
                }
            })
    }
}
</script>