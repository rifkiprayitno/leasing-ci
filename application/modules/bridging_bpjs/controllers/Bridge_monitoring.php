<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bridge_monitoring extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation','session');
        $this->load->helper(['url', 'form', 'bpjs_bridge_helper']);
        // MY_Controller::check_logged_in();
        $this->load->database();
	}

 	public function cek_kunjungan($tgl_sep, $jenis = '2'){        
        /* --- bridging BPJS ----*/
        $tglSEP     = date('Y-m-d');//"2018-10-09";
        $url        = "Monitoring/Kunjungan/Tanggal/".$tgl_sep."/JnsPelayanan/".$jenis;

        $resultarr  = get_bridge($url);
            json_encode($data = array(
                'url'               => $url,
                'status'            => $resultarr['metaData']['message'],
                'Code'              => $resultarr['metaData']['code'],
                // /'nama' => $url
                'response'        => $resultarr['response']['sep']
            )
        );


        $data = json_encode($data);
        echo $data;
        /* --- bridging BPJS ----*/
    }

    public function cek_klaim($tgl_pulang, $jenis_layanan = '2', $status_klaim = '3'){        
        /* --- bridging BPJS ----*/
        $url        = "Monitoring/Klaim/Tanggal/".$tgl_pulang."/JnsPelayanan/".$jenis_layanan."/Status/".$status_klaim;
        $resultarr  = get_bridge($url);
        json_encode($data = array(
            
            'status'            => $resultarr['metaData']['message'],
            'Code'              => $resultarr['metaData']['code'],
            // /'nama' => $url
            'response'        => $resultarr['response'],
            'url'               => $url
        ));

        $data = json_encode($data);

        echo $data;
        /* --- bridging BPJS ----*/
    }


    public function cek_histori($nomor = '', $tgl_mulai = '', $tgl_akhir = ''){        
        /* --- bridging BPJS ----*/
        $url        = "monitoring/HistoriPelayanan/NoKartu/".$nomor."/tglMulai/".$tgl_mulai."/tglAkhir/".$tgl_akhir;
        $resultarr  = get_bridge($url);
        json_encode($data = array(
            
            'status'            => $resultarr['metaData']['message'],
            'Code'              => $resultarr['metaData']['code'],
            // /'nama' => $url
            'response'        => $resultarr['response'],
            'url'               => $url
        ));

        $data = json_encode($data);

        echo $data;
        /* --- bridging BPJS ----*/
    }

    public function cek_jasa_raharja($tgl_mulai = '', $tgl_akhir = ''){        
        /* --- bridging BPJS ----*/
        $url        = "monitoring/JasaRaharja/tglMulai/".$tgl_mulai."/tglAkhir/".$tgl_akhir;
        $resultarr  = get_bridge($url);
        json_encode($data = array(
            'status'            => $resultarr['metaData']['message'],
            'Code'              => $resultarr['metaData']['code'],
            // /'nama' => $url
            'response'        => $resultarr['response'],
            'url'               => $url
        ));

        $data = json_encode($data);

        echo $data;
        /* --- bridging BPJS ----*/
    }

    
}

/* End of file Bridging_bpjs.php */
/* Location: ./application/modules/bridging_bpjs/Bridging_bpjs.php */
