
<?php 

class Barangs extends MX_Controller
{
    
    function __construct()
    {        
        parent::__construct();
        $this->load->model('Barang_model');
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

    function tambah(){
        // function ini hanya boleh diakses oleh superadmin/owner =3 dan admin=1 dengan kode akses 
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
            $barang = array();
            if ($this->input->method() == "post") {
                 $barang = array(array(
                        'barang_nama'   => $this->input->post("barang_nama"),
                        'harga'         => $this->input->post("harga"),
                        'insentif'      => $this->input->post("insentif"),
                        'detail'        => $this->input->post("detail"),
                        'created_at'    => date("Y-m-d H:i:s")
                    ));

                if ($this->form_validation->run('form_barang') == TRUE) {                  
                   
                   $insert = $this->Barang_model->tambah($barang);

                    if ($insert) {
                        sa_alert('success', 'Mantul..', 'Data baru berhasil di simpan', base_url('barangs'));
                    } else {
                        sa_alert('error', 'Oops..', 'Gagal menyimpan data baru!!!', base_url('barangs/tambah'));
                    } 
                }   
            }

            $data['title']            = 'index | Barangs | tambah';
            $data['breadcrumb']       = array(
                    base_url('')        => "Home",
                    base_url('barangs') => "Barang"
                );
            $data['breadcrumb_active']= 'Barang Baru';        
            $data['barang']             = $barang;

            $page = 'barangs/barang_form';

            echo modules::run('new_template/loadview', $data, $page);
        }else{
              sa_alert('error', 'Oops..!', 'Anda tidak memiliki hak akses!!!', base_url('auth'));
        }
    }

    function ubah($id = 0){
        // function ini hanya boleh diakses oleh superadmin/owner =3 dan admin=1 dengan kode akses 1,3
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){

            $barang = $this->Barang_model->detail($id);

            if ($this->input->method() == "post") {
                $barang = array(array(
                    'barang_nama'   => $this->input->post("barang_nama"),
                    'harga'         => $this->input->post("harga"),
                    'insentif'      => $this->input->post("insentif"),
                    'detail'        => $this->input->post("detail"),
                    'update_at'     => date("Y-m-d H:i:s")
                ));
                              

                if ($this->form_validation->run('form_barang') == TRUE) {   //menjalankan validasi
                    $update = $this->Barang_model->ubah($barang, $id); //menjalankan update
                    
                    if ($update) {
                        //echo $this->db->last_query();
                        sa_alert('success', 'Mantul..', 'Data lama berhasil diupdate!!', base_url('barangs'));
                    } else {
                        sa_alert('error', 'Oops..', 'Gagal mengubah data lama!!!', base_url('barangs/ubah/'.$id));
                    }
                }    
               
            }

            $data['title']             = 'index | barangs';
            $data['breadcrumb']        = array(
                                base_url('')        => "Home",
                                base_url('barangs') => "Barangs"
                            );
            $data['breadcrumb_active'] = 'Update Barang Lama';        
            $data['barang']            = $barang;
            $page                      = 'barangs/barang_form';

            echo modules::run('new_template/loadview', $data, $page);
        }else{
              sa_alert('error', 'Oops..!', 'Anda tidak memiliki hak akses!!!', base_url('auth'));
        }
    }

     function hapus($id = 0){
        // function ini hanya boleh diakses oleh superadmin/owner =3 dan admin=1 dengan kode akses 
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
            
            $delete = $this->Barang_model->hapus($id);

            if ($delete) {
                sa_alert('success', 'Mantul..', 'Data telah berhasil dihapus', base_url('barangs'));
            } else {
                sa_alert('error', 'Oops..', 'Gagal hapus data!!!', base_url('barangs'));
            } 
        }                
    }

    //method for datatable server side, hanya memanggil Model
    function get_barang_json() { //get product data and encode to be JSON object//percobaan datatable server side
      header('Content-Type: application/json');
      echo $this->Barang_model->get_all_barang();
    }

}
?>