<html>
    <head>
        <title>Belajaphp.net - Codeigniter Datatable</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h3>DATA KARYAWAN</h3>
            <table id="table" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr><th>FOTO</th><th>NAMA</th><th>EMAIL</th><th>NO HP</th><th>ACTION</th></tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript">
 
            var save_method; //for save method string
            var table;
 
            $(document).ready(function() {
                //datatables
                table = $('#table').DataTable({ 
                    "processing": true, //Feature control the processing indicator.
                    "serverSide": true, //Feature control DataTables' server-side processing mode.
                    "order": [], //Initial no order.
                    // Load data for the table's content from an Ajax source
                    "ajax": {
                        "url": '<?php echo site_url('aplikasis/json'); ?>',
                        "type": "POST"
                    },
                    //Set column definition initialisation properties.
                    "columns": [
                        {"data": "foto",width:170},
                        {"data": "nama_lengkap",width:100},
                        {"data": "email",width:100},
                        {"data": "no_hp",width:100},
                        {"data": "action",width:100}
                    ],
 
                });
 
            });
        </script>
 
    </body>
</html>