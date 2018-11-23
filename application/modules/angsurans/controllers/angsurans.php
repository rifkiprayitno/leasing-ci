
<?php 

class Angsurans extends MX_Controller
{
    
    function __construct()
    {        
        parent::__construct();
        $this->load->model('Angsuran_model');
        $this->load->helper('alert'); //untuk menampilkan sweetalert sa_alert() 
        $this->load->library('form_validation'); //untuk melakukan validasi inputan      
        //validasi jika angsuran belum login
        if($this->session->userdata('masuk') != TRUE){           
            sa_alert('error', 'Oops..!', 'Anda tidak memiliki hak akses!!!', base_url('auth'));
        }
    }
 
    function index()
    {
        // function ini hanya boleh diakses oleh superadmin/owner =3 dan admin=1 dengan kode akses 
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){

            $data['title'] = 'index | angsurans';
            $data['breadcrumb'] = array(
                                base_url('')      => "Home"
                            );
            $data['breadcrumb_active'] = 'angsurans';        
            $data['tampil'] = $this->Angsuran_model->tampil();

            $page = 'angsurans/angsuran_index';

            echo modules::run('new_template/loadview', $data, $page);
        }else{
              sa_alert('error', 'Oops..!', 'Anda tidak memiliki hak akses!!!', base_url('auth'));
        }
    }

    function tambah($id = 0){
        // function ini hanya boleh diakses oleh superadmin/owner =3 dan admin=1 dengan kode akses 
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
            $this->load->model('aplikasis/Aplikasi_model');
            $angsuran = (isset($id)) ? $this->Aplikasi_model->get_detail($id) : array();
            
            if ($this->input->method() == "post") {
                 $angsuran = array(array(
                        'angsuran_aplikasi_kode' => $this->input->post("nomor_cari"),
                        'angsuran_ke'   => $this->input->post("select_tenor"),
                        'bayar'         => $this->input->post("bayar"),
                        'tanggal_bayar' => $this->input->post("tgl_bayar"),
                        
                        'created_at'=> date("Y-m-d H:i:s")
                    ));
                if ($this->form_validation->run('form_angsuran') == TRUE) {    
                    
                    $insert = $this->Angsuran_model->tambah($angsuran);

                    if ($insert) {
                        sa_alert('success', 'Mantul..', 'Data baru berhasil di simpan', base_url('angsurans'));
                    } else {
                        sa_alert('error', 'Oops..', 'Gagal menyimpan data baru!!!', base_url('angsurans/tambah'));
                    } 
                }                
            }

            $data['title']            = 'index | angsurans';
            $data['breadcrumb']       = array(
                    base_url('')      => "Home",
                    base_url('angsurans') => "angsuran"
                );
            $data['breadcrumb_active']= 'Angsurans Baru';        
            $data['angsuran']             = $angsuran;

            $page = 'angsurans/angsuran_form';

            echo modules::run('new_template/loadview', $data, $page);

        }else{
              sa_alert('error', 'Oops..!', 'Anda tidak memiliki hak akses!!!', base_url('auth'));
        }
    }

    function ubah($id = 0){
        // function ini hanya boleh diakses oleh superadmin/owner =3 dan admin=1 dengan kode akses 1,3
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){

            $angsuran = $this->Angsuran_model->detail($id);

            if ($this->input->method() == "post") {
                  
                $angsuran = array(array(
                    'angsuran_aplikasi_kode' => $this->input->post("nomor_cari"),
                    'angsuran_ke'   => $this->input->post("select_tenor"),
                    'bayar'         => $this->input->post("bayar"),
                    'tanggal_bayar' => $this->input->post("tgl_bayar"),
                    'updated_at'=> date("Y-m-d H:i:s")
                ));
                              

                if ($this->form_validation->run('form_angsuran') == TRUE) {   //menjalankan validasi
                    $update = $this->Angsuran_model->ubah($angsuran, $id); //menjalankan update
                    
                    if ($update) {
                        //echo $this->db->last_query();
                        sa_alert('success', 'Mantul..', 'Data lama berhasil diupdate!!', base_url('angsurans'));
                    } else {
                        sa_alert('error', 'Oops..', 'Gagal mengubah data lama!!!', base_url('angsurans/ubah/'.$id));
                    }
                }    
               
            }

            $data['title']             = 'index | angsurans';
            $data['breadcrumb']        = array(
                                base_url('')      => "Home",
                                base_url('angsurans') => "angsuran"
                            );
            $data['breadcrumb_active'] = 'Update angsuran Lama';        
            $data['angsuran']              = $angsuran;
            $page = 'angsurans/angsuran_form';

            echo modules::run('new_template/loadview', $data, $page);
        }else{
              sa_alert('error', 'Oops..!', 'Anda tidak memiliki hak akses!!!', base_url('auth'));
        }
    }

     function hapus($id = 0){
        // function ini hanya boleh diakses oleh superadmin/owner =3 dan admin=1 dengan kode akses 
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
            
            $delete = $this->Angsuran_model->hapus($id);

            if ($delete) {
                sa_alert('success', 'Mantul..', 'Data telah berhasil dihapus', base_url('angsurans'));
            } else {
                sa_alert('error', 'Oops..', 'Gagal hapus data!!!', base_url('angsurans'));
            } 
        }                
    }

    function get_aplikasi_json() { //get product data and encode to be JSON object//percobaan datatable server side
      header('Content-Type: application/json');
      echo $this->Angsuran_model->get_all_aplikasi();
    }

    function get_angsuran_dt() { //get product data and encode to be JSON object//percobaan datatable server side
      header('Content-Type: application/json');
      echo $this->Angsuran_model->get_all_angsuran();
    }
}
?>