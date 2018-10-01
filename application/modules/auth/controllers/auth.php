<?php
/**
* 
*/
class Auth extends MX_Controller
{
	
	function __construct()
	{
		# code...
		
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->helper('alert');
	}
 
	function index()
	{
		$data['title'] = 'login | member baru';
		
		 $this->load->view('login_view',$data); 
	}

	function login(){
		
        $username=htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek_role=$this->Login_model->m_cekuser_login($username,$password);
 
        if($cek_role->num_rows() > 0){ //jika username dan password sesuai
            $data=$cek_role->row_array();
            $this->session->set_userdata('masuk',TRUE);
            $this->session->set_userdata('ses_id',$data['user_id']);
            $this->session->set_userdata('ses_email',$data['email']);
            $this->session->set_userdata('ses_level',$data['level']);

            if($data['level']=='admin'){ //Akses dosen superadmin
                $this->session->set_userdata('akses','1');
                sa_alert('success', 'Login Berhasil!', 'Selamat datang kembali '.$data['nama'], base_url('users'));
                //redirect('users'); 
            } else if($data['level']=='member'){ //akses pelanggan
                $this->session->set_userdata('akses','2');                
                redirect('bank_akun'); //ganti redirect dengan sa_alert(type, title, message, link)
            } else { //akses owner
                $this->session->set_userdata('akses','3');
                redirect('bang'); //ganti redirect dengan sa_alert(type, title, message, link)
            }
 
        } else { 
            // jika username dan password tidak ditemukan atau salah
            $url=base_url('auth');
                      
			sa_alert('error', 'Terjasi kesalahan!', 'Username atau Password tidak valid!!!', $url);
			
            echo $this->session->set_flashdata('msg','Username Atau Password Salah'); 
        }
 
    }

	function logout()
	{
		
		$url=base_url('auth');

		$item = array('masuk', 'sess_id', 'sess_email', 'sess_level', 'akses');
		$this->session->unset_userdata($item);
		//$this->session->unset_userdata('is_mail');
		session_destroy();
		$this->session->set_flashdata('msg', 'Anda telah keluar dari sistem.');

        sa_alert('success', 'Berhasil!', 'Anda sudah keluar dari sistem!', $url);
	}
}
?>

