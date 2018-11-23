
<?php 

class Aplikasis extends MX_Controller
{
    
<<<<<<< HEAD
    function __construct() //(DIPAKAI)
    {        
        parent::__construct();
        $this->load->model('Aplikasi_model');
=======
    function __construct()
    {        
        parent::__construct();
        $this->load->model('Aplikasi_model','Barang_model','User_model');
        //$this->load->model('Barang_model');
        //$this->load->model('User_model');
>>>>>>> c023b1a3eb82b5762c1ec0628674c6a699dbf9fb
        $this->load->helper('alert'); //untuk menampilkan sweetalert sa_alert() 
        $this->load->library('form_validation'); //untuk melakukan validasi inputan      
        //validasi jika user belum login
        if($this->session->userdata('masuk') != TRUE){           
            sa_alert('error', 'Oops..!', 'Anda tidak memiliki hak akses!!!', base_url('auth'));
        }
    }
 
<<<<<<< HEAD
    function index() //(DIPAKAI)
=======
    function index()
>>>>>>> c023b1a3eb82b5762c1ec0628674c6a699dbf9fb
    {
        // function ini hanya boleh diakses oleh superadmin/owner =3 dan admin=1 dengan kode akses 
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){

<<<<<<< HEAD
            $data['title'] = 'index | Aplikasi';
            $data['breadcrumb'] = array(
                                base_url('')      => "Home"
                            );
            $data['breadcrumb_active'] = 'Aplikasi';        
            $data['tampil'] = $this->Aplikasi_model->getData();

            $page = 'aplikasis/aplikasi_index_2';

            echo modules::run('new_template/loadview', $data, $page);
=======
            $data['title'] = 'index | Aplikasis';
            $data['breadcrumb'] = array(
                                base_url('')      => "Home"
                            );
            $data['breadcrumb_active'] = 'Aplikasis';        
            $data['tampil'] = $this->Aplikasi_model->tampil();

            $page = 'aplikasis/aplikasi_index';

            echo modules::run('template/loadview', $data, $page);
>>>>>>> c023b1a3eb82b5762c1ec0628674c6a699dbf9fb
        }else{
              sa_alert('error', 'Oops..!', 'Anda tidak memiliki hak akses!!!', base_url('auth'));
        }
    }

<<<<<<< HEAD

    function tambah(){ //(DIPAKAI)
        // function ini hanya boleh diakses oleh superadmin/owner =3 dan admin=1 dengan kode akses 
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
            $aplikasi = array();
            //$aplikasi = $this->User_model->tampil();

            if ($this->input->method() == "post") {
                $aplikasi = array(array(
                    'aplikasi_kode'     => $this->input->post("aplikasi_kode"),
                    'aplikasi_barang_id'         => $this->input->post("barang_id"),
                    'aplikasi_user_id'           => $this->input->post("id_user_id"),
                    // 'barang_harga'      => $this->input->post("barang_harga"),
                    // 'barang_insentif'   => $this->input->post("barang_insentif"),
                    'dp'                => $this->input->post("dp"),
                    'angsuran'          => $this->input->post("angsuran"),
                    'tenor'             => $this->input->post("tenor"),
                    // 'total'             => $this->input->post("total"),
                    // 'tanggal_berlaku'   => $this->input->post("tanggal_berlaku"),
                    'awal_tempo'        => $this->input->post("awal_tempo"),
                    'jatuh_tempo'       => $this->input->post("jatuh_tempo"),
                    'status'            => 'diterima', //ubah sesuai alur
                    'aplikasi_created_at'        => date("Y-m-d H:i:s")
                ));
                if ($this->form_validation->run('form_aplikasi') == TRUE) {                  
                    
                    $insert = $this->Aplikasi_model->tambah($aplikasi);
=======
    function tambah(){
        // function ini hanya boleh diakses oleh superadmin/owner =3 dan admin=1 dengan kode akses 
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
            $user = array();
            if ($this->input->method() == "post") {
                 $aplikasi = array(array(
                        'aplikasi_kode'     => $this->input->post("aplikasi_kode"),
                        'barang_id'         => $this->input->post("barang_id"),
                        'user_id'           => $this->input->post("user_id"),
                        'barang_harga'      => $this->input->post("barang_harga"),
                        'barang_insentif'   => $this->input->post("barang_insentif"),
                        'dp'                => $this->input->post("dp"),
                        'angsuran'          => $this->input->post("angsuran"),
                        'tenor'             => $this->input->post("tenor"),
                        'total'             => $this->input->post("total"),
                        'tanggal_berlaku'   => $this->input->post("tanggal_berlaku"),
                        'awal_tempo'        => $this->input->post("awal_tempo"),
                        'jatuh_tempo'       => $this->input->post("jatuh_tempo"),
                        'status'            => $this->input->post("status"),
                        'created_at'        => date("Y-m-d H:i:s")
                    ));
                // if ($this->form_validation->run('registrasi') == TRUE) {                  
                //     $user[0]['password'] = md5($this->input->post("password")); //tambah password ke array $user
                    
                    $insert = $this->Barang_model->tambah($barang);
>>>>>>> c023b1a3eb82b5762c1ec0628674c6a699dbf9fb

                    if ($insert) {
                        sa_alert('success', 'Mantul..', 'Data baru berhasil di simpan', base_url('aplikasis'));
                    } else {
                        sa_alert('error', 'Oops..', 'Gagal menyimpan data baru!!!', base_url('aplikasis/tambah'));
                    } 
<<<<<<< HEAD
                }                
            }

            $data['title']              = 'Tambah Aplikasi';
            $data['breadcrumb']         = array(
                    base_url('')            => "Home",
                    base_url('apikasis')    => "Aplikasi"
                );
            $data['breadcrumb_active']  = 'Aplikasi Baru';        
            $data['barang']             = $this->Aplikasi_model->tampil_barang();
            $data['user']               = $this->Aplikasi_model->tampil_user();
            $data['aplikasi']           = $aplikasi;

            $page = 'aplikasis/aplikasi_form';

            echo modules::run('new_template/loadview', $data, $page);
=======
                //}                
            }

            $data['title']            = 'index | Aplikasis';
            $data['breadcrumb']       = array(
                    base_url('')      => "Home",
                    base_url('apikasis') => "Aplikasi"
                );
            $data['breadcrumb_active']= 'Aplikasis Baru';        
            $data['barang']           = $this->Barang_model->tampil();
            $data['user']             = $this->User_model->tampil();

            $page = 'aplikasis/aplikasi_form';

            echo modules::run('template/loadview', $data, $page);
>>>>>>> c023b1a3eb82b5762c1ec0628674c6a699dbf9fb
        }else{
              sa_alert('error', 'Oops..!', 'Anda tidak memiliki hak akses!!!', base_url('auth'));
        }
    }

<<<<<<< HEAD
    function ubah($id = 0){ //(DIPAKAI)
        // function ini hanya boleh diakses oleh superadmin/owner =3 dan admin=1 dengan kode akses 1,3
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){

            $aplikasi = $this->Aplikasi_model->detail(array('apliaksi_id'=>$id))->result_array();

            if ($this->input->method() == "post") {
                 
                $aplikasi = array(array(
                    'aplikasi_kode'     => $this->input->post("aplikasi_kode"),
                    'aplikasi_barang_id'=> $this->input->post("barang"),
                    'aplikasi_user_id'  => $this->input->post("user_id"),
                    // 'barang_harga'   => $this->input->post("barang_harga"),
                    // 'barang_insentif'=> $this->input->post("barang_insentif"),
                    'dp'                => $this->input->post("dp"),
                    'angsuran'          => $this->input->post("angsuran"),
                    'tenor'             => $this->input->post("tenor"),
                    // 'total'          => $this->input->post("total"),
                    // 'tanggal_berlaku'=> $this->input->post("tanggal_berlaku"),
                    'awal_tempo'        => $this->input->post("awal_tempo"),
                    'jatuh_tempo'       => $this->input->post("jatuh_tempo"),
                    'status'            => 'diterima', //ubah sesuai laur
                    'aplikasi_updated_at'        => date("Y-m-d H:i:s")
                ));
                              

                if ($this->form_validation->run('form_aplikasi') == TRUE) {   //menjalankan validasi
                    $update = $this->Aplikasi_model->ubah($aplikasi, $id); //menjalankan update
=======
    function ubah($id = 0){
        // function ini hanya boleh diakses oleh superadmin/owner =3 dan admin=1 dengan kode akses 1,3
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){

            $aplikasi = $this->Aplikasi_model->detail($id);

            if ($this->input->method() == "post") {
                 if (md5($this->input->post("password")) != $user[0]['password']) { //jika password berubah                    
                        $user[0]['password']  = md5($this->input->post("password"));
                } 
                $aplikasi = array(array(
                    'aplikasi_kode'     => $this->input->post("aplikasi_kode"),
                        'barang_id'         => $this->input->post("barang_id"),
                        'user_id'           => $this->input->post("user_id"),
                        'barang_harga'      => $this->input->post("barang_harga"),
                        'barang_insentif'   => $this->input->post("barang_insentif"),
                        'dp'                => $this->input->post("dp"),
                        'angsuran'          => $this->input->post("angsuran"),
                        'tenor'             => $this->input->post("tenor"),
                        'total'             => $this->input->post("total"),
                        'tanggal_berlaku'   => $this->input->post("tanggal_berlaku"),
                        'awal_tempo'        => $this->input->post("awal_tempo"),
                        'jatuh_tempo'       => $this->input->post("jatuh_tempo"),
                        'status'            => $this->input->post("status"),
                        'update_at'         => date("Y-m-d H:i:s")
                ));
                              

                if ($this->form_validation->run('registrasi') == TRUE) {   //menjalankan validasi
                    $update = $this->aplikasi_model->ubah($aplikasi, $id); //menjalankan update
>>>>>>> c023b1a3eb82b5762c1ec0628674c6a699dbf9fb
                    
                    if ($update) {
                        //echo $this->db->last_query();
                        sa_alert('success', 'Mantul..', 'Data lama berhasil diupdate!!', base_url('aplikasis'));
                    } else {
                        sa_alert('error', 'Oops..', 'Gagal mengubah data lama!!!', base_url('aplikasis/ubah/'.$id));
                    }
                }    
               
            }

<<<<<<< HEAD
            $data['title']             = 'Ubah Aplikasis';
            $data['breadcrumb']        = array(
                                base_url('')      => "Home",
                                base_url('aplikasis') => "Aplikasi"
                            );
            $data['breadcrumb_active'] = 'Update Barang Lama';
            $data['barang']             = $this->Aplikasi_model->tampil_barang();
            $data['user']               = $this->Aplikasi_model->tampil_user();
            $data['aplikasi']           = $aplikasi;        
            $page = 'aplikasis/aplikasi_form';

            echo modules::run('new_template/loadview', $data, $page);
=======
            $data['title']             = 'index | Aplikasis';
            $data['breadcrumb']        = array(
                                base_url('')      => "Home",
                                base_url('aplikasis') => "Aplikasis"
                            );
            $data['breadcrumb_active'] = 'Update Barang Lama';        
            $data['aplikasi']              = $aplikasi;
            $page = 'aplikasis/aplikasi_form';

            echo modules::run('template/loadview', $data, $page);
>>>>>>> c023b1a3eb82b5762c1ec0628674c6a699dbf9fb
        }else{
              sa_alert('error', 'Oops..!', 'Anda tidak memiliki hak akses!!!', base_url('auth'));
        }
    }

<<<<<<< HEAD
     function hapus($id = 0){ //(DIPAKAI)
        // function ini hanya boleh diakses oleh superadmin/owner =3 dan admin=1 dengan kode akses 
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
            
            $delete = $this->Aplikasi_model->hapus($id);
=======
     function hapus($id = 0){
        // function ini hanya boleh diakses oleh superadmin/owner =3 dan admin=1 dengan kode akses 
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
            
            $delete = $this->Barang_model->hapus($id);
>>>>>>> c023b1a3eb82b5762c1ec0628674c6a699dbf9fb

            if ($delete) {
                sa_alert('success', 'Mantul..', 'Data telah berhasil dihapus', base_url('aplikasis'));
            } else {
                sa_alert('error', 'Oops..', 'Gagal hapus data!!!', base_url('aplikasis'));
            } 
        }                
    }

<<<<<<< HEAD
    public function baca_data() //percobaan datatable server side
    {
        $data = $this->Aplikasi_model->getData();
        echo json_encode($data);
    }

    function json(){ //percobaan datatable server side
        $this->datatables->add_column('foto', '<img src="http://www.rutlandherald.com/wp-content/uploads/2017/03/default-user.png" width=20>', 'foto');
        $this->datatables->select('nama_lengkap,email,no_hp');
        $this->datatables->add_column('action', anchor('karyawan/edit/.$1','Edit',array('class'=>'btn btn-danger btn-sm')), 'id_pegawai');
        $this->datatables->from('karyawan');
        return print_r($this->datatables->generate());
    }
    function json_dua(){//percobaan datatable server side
        //$this->load->library('datatables');
        //$this->datatables->add_column('foto', '<img src="http://www.rutlandherald.com/wp-content/uploads/2017/03/default-user.png" width=20>', 'foto');
        $this->datatables->select('aplikasi_kode, nama, barang_nama, tenor, dp, angsuran');
        $this->datatables->add_column('action', anchor('karyawan/edit/.$1','Edit',array('class'=>'btn btn-danger btn-sm')), 'id_pegawai');
        $this->datatables->from('aplikasis');
        $this->datatables->join('users', 'aplikasi_user_id=user_id');
        $this->datatables->join('barangs', 'aplikasi_barang_id=barang_id');
        return print_r($this->datatables->generate());
    }

    function get_product_json() { //get product data and encode to be JSON object//percobaan datatable server side (DIPAKAI)
      header('Content-Type: application/json');
      echo $this->Aplikasi_model->get_all_product();
  }

    function get_data(){ //percobaan datatable server side
        $result     = array();
        $id_aplikasi=$this->input->post('id');
       
        $get = $this->Aplikasi_model->detail(array('apliaksi_id'=>$id_aplikasi))->result_array();

            foreach($get as $row){
            $result['barang_nama'] = $row['barang_nama'];
            $result['nama'] = $row['nama'];
            $result['dp'] = $row['dp'];     
            $result['angsuran'] = $row['angsuran'];
            $result['tenor'] = $row['tenor'];   
            $result['barang_harga'] = $row['harga'];
            $result['barang_insentif'] = $row['insentif'];
            $result['jatuh_tempo'] = $row['jatuh_tempo'];      
            $result['status'] = $row['status']; 
            $result['aplikasi_kode'] = $row['aplikasi_kode']; 
            }
        echo json_encode($result);    //hanya boleh ada satu ECHO untuk json saja!!        
    }

    public function search_user()
    {
        $arr=array();
        // tangkap variabel keyword dari URL
        $keyword = $this->uri->segment(3);

        // cari di database
        $data = $this->db->from('users')->like('nama',$keyword)->get();  

        // format keluaran di dalam array
        foreach($data->result() as $row)
        {
            $arr['query'] = $keyword;
            $arr['suggestions'][] = array(
                'value' =>$row->nama,
                'email'   =>$row->email,
                'no_hp'   =>$row->handphone,
                'user_id'   =>$row->user_id
            );
        }
        // minimal PHP 5.2
        echo json_encode($arr);
    }
    
    public function search_barang()
    {
        $arr=array();
        $keyword = $this->uri->segment(3);

        $data = $this->db->from('barangs')->like('barang_nama',$keyword)->get();  

        foreach($data->result() as $row)
        {
            $arr['query'] = $keyword;
            $arr['suggestions'][] = array(
                'value' =>$row->barang_nama,
                'harga'   =>$row->harga,
                'insentif'   =>$row->insentif,
                'barang_id'   =>$row->barang_id
            );
        }
        echo json_encode($arr);
    }
=======
>>>>>>> c023b1a3eb82b5762c1ec0628674c6a699dbf9fb
}
?>