<?php 

class Dashboard extends MX_Controller
{
	function __construct()
    {        
        parent::__construct();
        $this->load->model('Dashboard_model');
        $this->load->helper('alert'); //untuk menampilkan sweetalert sa_alert() 
        $this->load->library('form_validation'); //untuk melakukan validasi inputan      
        //validasi jika user belum login
        if($this->session->userdata('masuk') != TRUE){           
            sa_alert('error', 'Oops..!', 'Anda tidak memiliki hak akses!!!', base_url('auth'));
        }
    }

	function index()
    {
    	$data['title'] = 'index | Dadhsboard';   	

        $page = 'dashboard/new_dashboard';

        $data['jumlah_konsumen'] = $this->Dashboard_model->total_konsumen();
        $data['jumlah_barang'] = $this->Dashboard_model->total_barang();
        $data['jumlah_aplikasi'] = $this->Dashboard_model->total_aplikasi();

        $data['lima_angsuran'] = $this->Dashboard_model->tampil_lima_angsuran();

        echo modules::run('new_template/loadview', $data, $page);
    }
}