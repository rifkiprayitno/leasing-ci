<div class="content">
 <div class="content">
    <div class="animated fadeIn">
        <div class="row">

<div class="col-lg-12">
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Data Barang</h4>
        <h6 class="card-subtitle">berikut tabel tetang barang yang terdata dalam sistem</h6>
        <button class="btn btn-success" onclick="window.location.href='<?php echo base_url('barangs/tambah'); ?>'"><i class="fa fa-plus-circle"></i> Tambah Data</button>
        <button class="btn btn-default" onclick="reload_table()"><i class="fa fa-refresh"></i> Muat Ulang</button>
        <hr>
        <div class="table-responsive m-t-40">
            <table id="data-table-barang" class="table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
<div class="col-lg-12">
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Data Export</h4>
        <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
        <div class="table-responsive m-t-40">
            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Insentif</th>
                        <th>Detail</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                
                <tbody >
                    <!-- isi data dari ajax -->   
                <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Insentif</th>
                        <th>Detail</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                    foreach ($tampil as $baris) {
                ?>
                    <tr>
                        <td><?php echo $baris->barag_nama; ?></td>
                        <td><?php echo $baris->harga; ?></td>
                        <td><?php echo $baris->insentif; ?></td>
                        <td><?php echo $baris->detail; ?></td>
                        <td>
                            <a href="<?php echo 'users/ubah/'.$baris->barang_id; ?>">Lihat</a>
                            <a class="edit-link" href="<?php echo 'users/ubah/'.$baris->barang_id; ?>">Edit</a>
                            <a class="hapus-link" href="<?php echo 'users/hapus/'.$baris->barang_id; ?>">Hapus</a>                          
                        </td>
                    </tr>  
                <?php } ?>  
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

        table = $("#data-table-barang").dataTable({
            initComplete: function() {
                var api = this.api();
                $('#data-table_filter input')
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
                "url": '<?php echo site_url('barangs/get_barang_json'); ?>',
                "type": "POST"
            },
            //Set column definition initialisation properties.
            "columns": [
                {"data": "barang_id",width:70},
                {"data": "barang_nama",width:170},
                {"data": "harga",width:100},
                {"data": "insentif",width:70},
                {"data": "detail",width:100},
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
    table.ajax.reload(null,false); //reload datatable ajax 
}

function del(id){
    if(confirm('Yakin menghapus data ?')){
        $.ajax({
                url :"<?php echo site_url();?>barangs/hapus/"+id,
                type:"post",
                success:function(){
                    location.reload();
                }
            })
    }
}
</script>
</div>
</script>
