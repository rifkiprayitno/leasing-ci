
<?php 

class Pelanggans extends MX_Controller
{
    
    function __construct()
    {        
        parent::__construct();
        $this->load->model('Pelanggan_model');
        $this->load->model('auth/Login_model');
        $this->load->helper('alert'); //untuk menampilkan sweetalert sa_alert() 
        $this->load->library('form_validation'); //untuk melakukan validasi inputan      
        //validasi jika pelanggan belum login
        if($this->session->userdata('masuk') != TRUE){           
            sa_alert('error', 'Oops..!', 'Anda tidak memiliki hak akses!!!', base_url('auth'));
        }
    }
 
    function index()
    {
        // function ini hanya boleh diakses oleh superadmin/owner =3 dan admin=1 dengan kode akses 
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){

            $data['title'] = 'index | pelanggans';
            $data['breadcrumb'] = array(
                                base_url('')      => "Home"
                            );
            $data['breadcrumb_active'] = 'pelanggans';        
            $data['tampil'] = $this->Pelanggan_model->tampil();

            $page = 'pelanggans/pelanggan_index';

            echo modules::run('new_template/loadview', $data, $page);
        }else{
              sa_alert('error', 'Oops..!', 'Anda tidak memiliki hak akses!!!', base_url('auth'));
        }
    }

    function tambah(){
        // function ini hanya boleh diakses oleh superadmin/owner =3 dan admin=1 dengan kode akses 
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
            $pelanggan = array();
            if ($this->input->method() == "post") {
                 $pelanggan = array(array(
                        'email'     => $this->input->post("email"),
                        'level'     => "member",
                        'nama'      => $this->input->post("nama"),
                        'alamat'    => $this->input->post("alamat"),
                        'handphone' => $this->input->post("no_hp"),
                        'no_ktp'    => $this->input->post("no_ktp"),
                        'created_at'=> date("Y-m-d H:i:s")
                    ));
                if ($this->form_validation->run('registrasi_p') == TRUE) {                  
                    // $pelanggan[0]['password'] = md5($this->input->post("password")); //tambah password ke array $pelanggan
                    
                    $insert = $this->Pelanggan_model->tambah($pelanggan);

                    if ($insert) {
                        sa_alert('success', 'Mantul..', 'Data baru berhasil di simpan', base_url('pelanggans'));
                    } else {
                        sa_alert('error', 'Oops..', 'Gagal menyimpan data baru!!!', base_url('pelanggans/tambah'));
                    } 
                }                
            }

            $data['title']            = 'Tambah | Pelanggan';
            $data['breadcrumb']       = array(
                    base_url('')      => "Home",
                    base_url('pelanggans') => "Pelanggan"
                );
            $data['breadcrumb_active']= 'Pelanggan Baru';        
            $data['pelanggan']             = $pelanggan;

            $page = 'pelanggans/pelanggan_form';

            echo modules::run('new_template/loadview', $data, $page);
        }else{
              sa_alert('error', 'Oops..!', 'Anda tidak memiliki hak akses!!!', base_url('auth'));
        }
    }

    function ubah($id = 0){
        // function ini hanya boleh diakses oleh superadmin/owner =3 dan admin=1 dengan kode akses 1,3
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){

            $pelanggan = $this->Pelanggan_model->detail($id);

            if ($this->input->method() == "post") {
                 if (md5($this->input->post("password")) != $pelanggan[0]['password']) { //jika password berubah                    
                        $pelanggan[0]['password']  = md5($this->input->post("password"));
                } 
                $pelanggan = array(array(
                    'email'     => $this->input->post("email"),
                    'password'  => $pelanggan[0]['password'],
                    'level'     => $this->input->post("level"),
                    'nama'      => $this->input->post("nama"),
                    'alamat'    => $this->input->post("alamat"),
                    'handphone' => $this->input->post("no_hp"),
                    'no_ktp'    => $this->input->post("no_ktp"),
                    'updated_at'=> date("Y-m-d H:i:s")
                ));
                              

                if ($this->form_validation->run('registrasi') == TRUE) {   //menjalankan validasi
                    $update = $this->Pelanggan_model->ubah($pelanggan, $id); //menjalankan update
                    
                    if ($update) {
                        //echo $this->db->last_query();
                        sa_alert('success', 'Mantul..', 'Data lama berhasil diupdate!!', base_url('pelanggans'));
                    } else {
                        sa_alert('error', 'Oops..', 'Gagal mengubah data lama!!!', base_url('pelanggans/ubah/'.$id));
                    }
                }    
               
            }

            $data['title']             = 'index | pelanggans';
            $data['breadcrumb']        = array(
                                base_url('')      => "Home",
                                base_url('pelanggans') => "pelanggan"
                            );
            $data['breadcrumb_active'] = 'Update pelanggan Lama';        
            $data['pelanggan']              = $pelanggan;
            $page = 'pelanggans/user_form';

            echo modules::run('new_template/loadview', $data, $page);
        }else{
              sa_alert('error', 'Oops..!', 'Anda tidak memiliki hak akses!!!', base_url('auth'));
        }
    }

     function hapus($id = 0){
        // function ini hanya boleh diakses oleh superadmin/owner =3 dan admin=1 dengan kode akses 
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
            
            $delete = $this->Pelanggan_model->hapus($id);

            if ($delete) {
                sa_alert('success', 'Mantul..', 'Data telah berhasil dihapus', base_url('pelanggans'));
            } else {
                sa_alert('error', 'Oops..', 'Gagal hapus data!!!', base_url('pelanggans'));
            } 
        }                
    }

    //method for datatable server side, hanya memanggil Model
    function get_customer_json() { //get product data and encode to be JSON object//percobaan datatable server side
      header('Content-Type: application/json');
      echo $this->Pelanggan_model->get_all_customer();
    }

    function profile()
    {
        // function ini hanya boleh diakses oleh superadmin/owner =3 dan admin=1 dengan kode akses 
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){

            $data['title'] = ' pelanggans Profile';
            $data['breadcrumb'] = array(
                                base_url('')      => "Home"
                            );
            $data['breadcrumb_active'] = 'Profile';        
            $data['tampil'] = $this->Pelanggan_model->tampil();

            $page = 'pelanggans/user_profile';

            echo modules::run('new_template/loadview', $data, $page);
        }else{
              sa_alert('error', 'Oops..!', 'Anda tidak memiliki hak akses!!!', base_url('auth'));
        }
    }

    
    function cek_pelanggan($no_ktp, $no_tlp, $alamat){
        $cek_valid_id=$this->Pelanggan_model->m_cekuser_valid($no_ktp,$no_tlp,$alamat);
 
        if($cek_valid_id->num_rows() > 0){ //jika username dan password sesuai
            $num_rows = $cek_valid_id->num_rows();
            echo $num_rows;
        }
    }
}
?>