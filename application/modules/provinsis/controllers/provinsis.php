
<?php 

class Provinsis extends MX_Controller
{
    
    function __construct()
    {        
        parent::__construct();
        $this->load->model('Provinsi_model');
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

            $data['title'] = 'index | Provinsis';
            $data['breadcrumb'] = array(
                                base_url('')      => "Home"
                            );
            $data['breadcrumb_active'] = 'Provinsis';        
            $data['tampil'] = $this->Provinsi_model->tampil();

            $page = 'Provinsis/Provinsi_index';

            echo modules::run('new_template/loadview', $data, $page);
        }else{
              sa_alert('error', 'Oops..!', 'Anda tidak memiliki hak akses!!!', base_url('auth'));
        }
    }

    function tambah(){
        // function ini hanya boleh diakses oleh superadmin/owner =3 dan admin=1 dengan kode akses 
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
            $Provinsi = array();
            if ($this->input->method() == "post") {
                 $Provinsi = array(array(
                        'provinsi_nama'   => $this->input->post("provinsi_nama"),
                        'provinsi_created_at'    => date("Y-m-d H:i:s")
                    ));

                if ($this->form_validation->run('form_Provinsi') == TRUE) {                  
                   
                   $insert = $this->Provinsi_model->tambah($Provinsi);

                    if ($insert) {
                        sa_alert('success', 'Mantul..', 'Data baru berhasil di simpan', base_url('Provinsis'));
                    } else {
                        sa_alert('error', 'Oops..', 'Gagal menyimpan data baru!!!', base_url('Provinsis/tambah'));
                    } 
                }   
            }

            $data['title']            = 'index | Provinsis | tambah';
            $data['breadcrumb']       = array(
                    base_url('')        => "Home",
                    base_url('Provinsis') => "Provinsi"
                );
            $data['breadcrumb_active']= 'Provinsi Baru';        
            $data['Provinsi']             = $Provinsi;

            $page = 'Provinsis/Provinsi_form';

            echo modules::run('new_template/loadview', $data, $page);
        }else{
              sa_alert('error', 'Oops..!', 'Anda tidak memiliki hak akses!!!', base_url('auth'));
        }
    }

    function ubah($id = 0){
        // function ini hanya boleh diakses oleh superadmin/owner =3 dan admin=1 dengan kode akses 1,3
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){

            $Provinsi = $this->Provinsi_model->detail($id);

            if ($this->input->method() == "post") {
                $Provinsi = array(array(
                    'provinsi_nama'   => $this->input->post("Provinsi_nama"),
                    'provinsi_update_at'     => date("Y-m-d H:i:s")
                ));
                              

                if ($this->form_validation->run('form_Provinsi') == TRUE) {   //menjalankan validasi
                    $update = $this->Provinsi_model->ubah($Provinsi, $id); //menjalankan update
                    
                    if ($update) {
                        //echo $this->db->last_query();
                        sa_alert('success', 'Mantul..', 'Data lama berhasil diupdate!!', base_url('Provinsis'));
                    } else {
                        sa_alert('error', 'Oops..', 'Gagal mengubah data lama!!!', base_url('Provinsis/ubah/'.$id));
                    }
                }    
               
            }

            $data['title']             = 'index | Provinsis';
            $data['breadcrumb']        = array(
                                base_url('')        => "Home",
                                base_url('Provinsis') => "Provinsis"
                            );
            $data['breadcrumb_active'] = 'Update Provinsi Lama';        
            $data['Provinsi']            = $Provinsi;
            $page                      = 'Provinsis/Provinsi_form';

            echo modules::run('new_template/loadview', $data, $page);
        }else{
              sa_alert('error', 'Oops..!', 'Anda tidak memiliki hak akses!!!', base_url('auth'));
        }
    }

     function hapus($id = 0){
        // function ini hanya boleh diakses oleh superadmin/owner =3 dan admin=1 dengan kode akses 
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
            
            $delete = $this->Provinsi_model->hapus($id);

            if ($delete) {
                sa_alert('success', 'Mantul..', 'Data telah berhasil dihapus', base_url('Provinsis'));
            } else {
                sa_alert('error', 'Oops..', 'Gagal hapus data!!!', base_url('Provinsis'));
            } 
        }                
    }

    //method for datatable server side, hanya memanggil Model
    function get_Provinsi_json() { //get product data and encode to be JSON object//percobaan datatable server side
      header('Content-Type: application/json');
      echo $this->Provinsi_model->get_all_Provinsi();
    }

}
?>