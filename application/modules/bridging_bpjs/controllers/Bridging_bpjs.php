<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bridging_bpjs extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation','session');
        $this->load->helper(['url', 'form']);
        // MY_Controller::check_logged_in();
        $this->load->database();
	}

	public function index(){
		    $data['title'] = 'index | Aplikasi';
            $data['breadcrumb'] = array(
                                base_url('')      => "Home"
                            );
            $data['breadcrumb_active'] = 'BPJS';        
            // $data['tampil'] = $this->Aplikasi_model->getData();

            $page = 'bridging_bpjs/index';

            echo modules::run('new_template/loadview', $data, $page);
		// $this->template->title('Birdging BPJS','SIM RSUD');
		// $this->loadThis();
		// $this->template->build('index');
	}

	public function sep(){
		  $data['title'] = 'index | Aplikasi';
            $data['breadcrumb'] = array(
                                base_url('')      => "Home"
                            );
            $data['breadcrumb_active'] = 'BPJS';        
            // $data['tampil'] = $this->Aplikasi_model->getData();

            $page = 'bridging_bpjs/sep';

            echo modules::run('new_template/loadview', $data, $page);
	}
	

	public function c_peserta(){
		    $data['title'] = 'index | Aplikasi';
            $data['breadcrumb'] = array(
                                base_url('')      => "Home"
                            );
            $data['breadcrumb_active'] = 'BPJS';        
            // $data['tampil'] = $this->Aplikasi_model->getData();

            $page = 'bridging_bpjs/pasien_bpjs';

            echo modules::run('new_template/loadview', $data, $page);
	}

	// public function c_rujukan(){
	// 	$this->template->title('Birdging BPJS','SIM RSUD');
	// 	$this->loadThis();
	// 	$this->template->build('c_rujukan');	
	// }
}

/* End of file Bridging_bpjs.php */
/* Location: ./application/modules/bridging_bpjs/Bridging_bpjs.php */
