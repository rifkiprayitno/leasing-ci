
<?php 

class Users extends MX_Controller
{
    
    function __construct()
    {        
        parent::__construct();
        $this->load->model('User_model');
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

            $page = 'users/user_index';

            echo modules::run('template/loadview', $data, $page);
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

            echo modules::run('template/loadview', $data, $page);
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

            echo modules::run('template/loadview', $data, $page);
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

}
?>