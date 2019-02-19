
<?php 

class Users extends MX_Controller
{
    
    function __construct()
    {        
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('auth/Login_model');
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

            $data['title'] = 'index | Users';
            $data['breadcrumb'] = array(
                                base_url('')      => "Home"
                            );
            $data['breadcrumb_active'] = 'Users';        
            $data['tampil'] = $this->User_model->tampil();

            $page = 'users/user_index_2';

            echo modules::run('new_template/loadview', $data, $page);
        }else{
              sa_alert('error', 'Oops..!', 'Anda tidak memiliki hak akses!!!', base_url('auth'));
        }
    }

    function tambah(){
        // function ini hanya boleh diakses oleh superadmin/owner =3 dan admin=1 dengan kode akses 
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
            $user = array();
            if ($this->input->method() == "post") {
                 $user = array(array(
                        'email'     => $this->input->post("email"),
                        'level'     => $this->input->post("level"),
                        'nama'      => $this->input->post("nama"),
                        'alamat'    => $this->input->post("alamat"),
                        'handphone' => $this->input->post("no_hp"),
                        'no_ktp'    => $this->input->post("no_ktp"),
                        'created_at'=> date("Y-m-d H:i:s")
                    ));
                if ($this->form_validation->run('registrasi') == TRUE) {                  
                    $user[0]['password'] = md5($this->input->post("password")); //tambah password ke array $user
                    
                    $insert = $this->User_model->tambah($user);

                    if ($insert) {
                        sa_alert('success', 'Mantul..', 'Data baru berhasil di simpan', base_url('users'));
                    } else {
                        sa_alert('error', 'Oops..', 'Gagal menyimpan data baru!!!', base_url('users/tambah'));
                    } 
                }                
            }

            $data['title']            = 'index | Users';
            $data['breadcrumb']       = array(
                    base_url('')      => "Home",
                    base_url('users') => "User"
                );
            $data['breadcrumb_active']= 'Users Baru';        
            $data['user']             = $user;

            $page = 'users/user_form';

            echo modules::run('new_template/loadview', $data, $page);
        }else{
              sa_alert('error', 'Oops..!', 'Anda tidak memiliki hak akses!!!', base_url('auth'));
        }
    }

    function ubah($id = 0){
        // function ini hanya boleh diakses oleh superadmin/owner =3 dan admin=1 dengan kode akses 1,3
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){

            $user = $this->User_model->detail($id);

            if ($this->input->method() == "post") {
                 if (md5($this->input->post("password")) != $user[0]['password']) { //jika password berubah                    
                        $user[0]['password']  = md5($this->input->post("password"));
                } 
                $user = array(array(
                    'email'     => $this->input->post("email"),
                    'password'  => $user[0]['password'],
                    'level'     => $this->input->post("level"),
                    'nama'      => $this->input->post("nama"),
                    'alamat'    => $this->input->post("alamat"),
                    'handphone' => $this->input->post("no_hp"),
                    'no_ktp'    => $this->input->post("no_ktp"),
                    'updated_at'=> date("Y-m-d H:i:s")
                ));
                              

                if ($this->form_validation->run('registrasi') == TRUE) {   //menjalankan validasi
                    $update = $this->User_model->ubah($user, $id); //menjalankan update
                    
                    if ($update) {
                        //echo $this->db->last_query();
                        sa_alert('success', 'Mantul..', 'Data lama berhasil diupdate!!', base_url('users'));
                    } else {
                        sa_alert('error', 'Oops..', 'Gagal mengubah data lama!!!', base_url('users/ubah/'.$id));
                    }
                }    
               
            }

            $data['title']             = 'index | Users';
            $data['breadcrumb']        = array(
                                base_url('')      => "Home",
                                base_url('users') => "User"
                            );
            $data['breadcrumb_active'] = 'Update User Lama';        
            $data['user']              = $user;
            $page = 'users/user_form';

            echo modules::run('new_template/loadview', $data, $page);
        }else{
              sa_alert('error', 'Oops..!', 'Anda tidak memiliki hak akses!!!', base_url('auth'));
        }
    }

     function hapus($id = 0){
        // function ini hanya boleh diakses oleh superadmin/owner =3 dan admin=1 dengan kode akses 
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
            
            $delete = $this->User_model->hapus($id);

            if ($delete) {
                sa_alert('success', 'Mantul..', 'Data telah berhasil dihapus', base_url('users'));
            } else {
                sa_alert('error', 'Oops..', 'Gagal hapus data!!!', base_url('users'));
            } 
        }                
    }

    //method for datatable server side, hanya memanggil Model
    function get_user_json() { //get product data and encode to be JSON object//percobaan datatable server side
      header('Content-Type: application/json');
      echo $this->User_model->get_all_user();
    }

    function profile()
    {
        // function ini hanya boleh diakses oleh superadmin/owner =3 dan admin=1 dengan kode akses 
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){

            $data['title'] = ' Users Profile';
            $data['breadcrumb'] = array(
                                base_url('')      => "Home"
                            );
            $data['breadcrumb_active'] = 'Profile';        
            $data['tampil'] = $this->User_model->tampil();

            $page = 'users/user_profile';

            echo modules::run('new_template/loadview', $data, $page);
        }else{
              sa_alert('error', 'Oops..!', 'Anda tidak memiliki hak akses!!!', base_url('auth'));
        }
    }

    function cek_password(){
        $username = $this->session->userdata('ses_email'); //username menggunakan email
        $password=htmlspecialchars($this->input->post('passwordLama',TRUE),ENT_QUOTES);

        $cek_role=$this->Login_model->m_cekuser_login($username,$password);
 
        if($cek_role->num_rows() > 0){ //jika username dan password sesuai
            $num_rows = $cek_role->num_rows();
            echo $num_rows;
        }
    }

    function ubah_password(){
        $username           = $this->session->userdata('ses_email'); //username menggunakan email
        $password           =htmlspecialchars($this->input->post('passwordLama',TRUE),ENT_QUOTES);
        $password_baru      =htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
        $password_baru_lagi =htmlspecialchars($this->input->post('password_retype',TRUE),ENT_QUOTES);

        $cek_role=$this->Login_model->m_cekuser_login($username,$password);
 
        if ($password_baru != $password_baru_lagi){
            sa_alert('error', 'GALAT!!!', 'password baru dan password konfirmasi tidak sama!', $_SERVER['HTTP_REFERER']);
        } else if (strlen($password) < 4 || strlen($password_baru) < 4 || strlen($password_baru_lagi) < 4 ){
            sa_alert('error', 'GALAT!!!', 'data belung lengkap!, minimal 5 karakter'.$password.'|'.$password_baru.'|'.$password_baru_lagi, $_SERVER['HTTP_REFERER']);
        } else {
            if($cek_role->num_rows() > 0){ //jika username dan password sesuai
                $user = array(array(
                        'password'  => md5($password_baru),
                        'updated_at'=> date("Y-m-d H:i:s")
                    ));
                $update = $this->User_model->ubah($user, $this->session->userdata('ses_id')); //menjalankan update
                if ($update) {
                    //echo $this->db->last_query();
                    sa_alert('success', 'Mantul..', 'Password berhasil diupdate!!', $_SERVER['HTTP_REFERER']);
                } else {
                    sa_alert('error', 'Oops..', 'Gagal mengubah password lama!!!', $_SERVER['HTTP_REFERER']);
                }  
            } else {
                sa_alert('error', 'GALAT!!!', 'password lama tidak cocok!', $_SERVER['HTTP_REFERER']);
            }
        }
    }

    function cek_user($no_ktp, $no_tlp, $alamat){
        $cek_valid_id=$this->User_model->m_cekuser_valid($no_ktp,$no_tlp,$alamat);
 
        if($cek_valid_id->num_rows() > 0){ //jika username dan password sesuai
            $num_rows = $cek_valid_id->num_rows();
            echo $num_rows;
        }
    }
}
?>