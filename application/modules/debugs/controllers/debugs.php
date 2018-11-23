
<?php 

class Debugs extends MX_Controller
{
    
    function __construct()
    {        
        parent::__construct();
        $this->load->helper('alert'); //untuk menampilkan sweetalert sa_alert() 
        $this->load->library('form_validation'); //untuk melakukan validasi inputan      
        //validasi jika user belum login
        if($this->session->userdata('masuk') != TRUE){           
            sa_alert('error', 'Oops..!', 'Anda tidak memiliki hak akses!!!', base_url('auth'));
        }
    }
    

    function index_dua(){
        $this->load->view('pegawai_dua');
    }

    function angsuran_form(){
        $this->load->view('angsuran_form');
    }

     function aplikasi_form(){
        $this->load->view('aplikasis/aplikasi_form');
    }


    function example_dua(){
        $this->load->view('sample_modal_dt');
    }
   
}
?>