 <div class="content">
    <div class="animated fadeIn">
        <div class="row">

<div class="col-lg-12">
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Data Provinsi</h4>
        <h6 class="card-subtitle">berikut tabel tetang Provinsi yang terdata dalam sistem</h6>
        <button class="btn btn-success"  data-toggle="modal" data-target="#myModalAdd"><i class="fa fa-plus-circle"></i> Tambah Data</button>
        <button class="btn btn-default" onclick="reload_table()"><i class="fa fa-refresh"></i> Muat Ulang</button>
        <hr>
        <div class="table-responsive m-t-40">
            <table id="data-table-Provinsi" class="table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Aksi</th>
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

<!-- MODALS IS HERE BELOW -->
 <!-- Modal Add Product-->
      <form id="add-row-form" action="<?php echo site_url('Provinsis/tambah');?>" method="post">
         <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
               <div class="modal-content">
                   <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                       <h4 class="modal-title" id="myModalLabel">Add New</h4>
                   </div>
                   <div class="modal-body">
                     <div class="form-body">
                    <h3 class="card-title m-t-15">Info Provinsi</h3>
                    <hr>
                    <?php echo validation_errors('<div class="alert alert-danger alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>'); ?>
                    
                   
                    <div class="row p-t-20">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Nama</label>
                                <input type="text" id="Provinsi_nama" name="Provinsi_nama" class="form-control" value="<?php echo (isset($Provinsi[0])) ? $Provinsi[0]['Provinsi_nama'] : ''; ?>" required>
                                <small class="form-control-feedback"> Isi nama </small> 
                            </div>
                        </div>
                        <!--/span-->
                    <!--/span-->
                    </div>
                    <!--/row-->
                </div>
                   </div>
                   <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                   </div>
                    </div>
            </div>
         </div>
     </form>

     <!-- Modal UPDATE Product-->
      <form id="add-row-form" action="<?php echo site_url('Provinsis/ubah');?>" method="post">
         <div class="modal fade" id="modalUbahProvinsi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
               <div class="modal-content">
                   <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                       <h4 class="modal-title" id="myModalLabel">Add New</h4>
                   </div>
                   <div class="modal-body">
                     <div class="form-body">
                    <h3 class="card-title m-t-15">Info Provinsi</h3>
                    <hr>
                    <?php echo validation_errors('<div class="alert alert-danger alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>'); ?>
                    
                   
                    <div class="row p-t-20">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Nama</label>
                                <input type="text" id="Provinsi_nama" name="Provinsi_nama" class="form-control" value="<?php echo (isset($Provinsi[0])) ? $Provinsi[0]['Provinsi_nama'] : ''; ?>" required>
                                <small class="form-control-feedback"> Isi nama </small> 
                            </div>
                        </div>
                        <!--/span-->
                    <!--/span-->
                    </div>
                    <!--/row-->
                </div>
                   </div>
                   <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                   </div>
                    </div>
            </div>
         </div>
     </form>

      <!-- Modal delete Product-->
      <form id="add-row-form" action="<?php echo site_url('Provinsis/hapus');?>" method="post">
         <div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                       <h4 class="modal-title" id="myModalLabel">Delete Product</h4>
                   </div>
                   <div class="modal-body">
                           <input type="text" name="product_code" class="form-control" required readonly>
                                                 <strong>Are you sure to delete this record?</strong>
                   </div>
                   <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-success">Yes</button>
                   </div>
                    </div>
            </div>
         </div>
     </form>
 
     
<!-- MODALS IS UP THERE -->

</div><!-- .animated -->
</div><!-- .content -->


<!-- javascript get data to datatable -->

<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
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

        table = $("#data-table-Provinsi").dataTable({
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
                "url": '<?php echo site_url('Provinsis/get_provinsi_json'); ?>',
                "type": "POST"
            },
            //Set column definition initialisation properties.
            "columns": [
                {"data": "Provinsi_id",width:70},
                {"data": "Provinsi_nama",width:170},
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

              // end setup datatables
            // get Edit Records
            $('#data-table-Provinsi').on('click','.edit_record',function(){
                var name    =$(this).data('nama');
            $('#modalUbahProvinsi').modal('show');
                    $('[name="Provinsi_nama"]').val(name);
      });
            // End Edit Records
            // get delete Records
            $('#data-table-Provinsi').on('click','.delete_record',function(){
            var code=$(this).data('code');
            $('#ModalDelete').modal('show');
            $('[name="product_code"]').val(code);
            });
            // End delete Records

    });


function reload_table()
{
    $('#data-table-Provinsi').DataTable().ajax.reload(); //reload datatable ajax 
}

function del(id){
    // var code=$(this).data('code');
    // $('[name="product_code"]').val(code);
    if(confirm('Yakin menghapus data ?')){
        $.ajax({
                url :"<?php echo site_url();?>Provinsis/hapus/"+id,
                type:"post",
                success:function(){
                    location.reload();
                }
            })
    }
}
</script>