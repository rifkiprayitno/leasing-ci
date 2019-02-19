
<?php 

class Pembelian extends MX_Controller
{
    
    function __construct()
    {        
        parent::__construct();
        // $this->load->model('Barang_model');
        $this->load->helper('alert'); //untuk menampilkan sweetalert sa_alert() 
        $this->load->library('form_validation'); //untuk melakukan validasi inputan      
        //validasi jika user belum login
        if($this->session->userdata('masuk') != TRUE){           
            sa_alert('error', 'Oops..!', 'Anda tidak memiliki hak akses!!!', base_url('auth'));
        }
    }
 
    function index()
    {
        // function ini hanya boleh diakses oleh superadmin/owner =3 dan admin=1 dengan kode akses 
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){

            $data['title'] = 'index | Barangs';
            $data['breadcrumb'] = array(
                                base_url('')      => "Home"
                            );
            $data['breadcrumb_active'] = 'Barangs';        
            $data['tampil'] = $this->Barang_model->tampil();

            $page = 'barangs/barang_index_2';

            echo modules::run('new_template/loadview', $data, $page);
        }else{
              sa_alert('error', 'Oops..!', 'Anda tidak memiliki hak akses!!!', base_url('auth'));
        }
    }

    function index_error(){
        echo modules::run('dashboard/index');
        ?>
        <script type="text/javascript">
            toastr.error("Halaman Belum Tersedia...","Maaf..");
        </script>
        <?php
    }
    

}
?>