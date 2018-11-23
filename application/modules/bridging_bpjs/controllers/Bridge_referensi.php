<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bridge_referensi extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation','session');
        $this->load->helper(['url', 'form', 'bpjs_bridge_helper']);
        // MY_Controller::check_logged_in();
        $this->load->database();
	}

 	
    public function cek_diagnosa($nama_nomor = ''){        
        /* --- bridging BPJS ----*/
        $url        = "referensi/diagnosa/".$nama_nomor;
        $resultarr  = get_bridge($url);
        json_encode($data = array(
        'status'            => $resultarr['metaData']['message'],
        'Code'              => $resultarr['metaData']['code'],
        // /'nama' => $url
        'response'        => $resultarr['response']
        ));

        $data = json_encode($data);
        echo $data;
        /* --- bridging BPJS ----*/
    } 

    public function cek_poli($nama_nomor = ''){        
        /* --- bridging BPJS ----*/
        $url        = "referensi/poli/".$nama_nomor;
        $resultarr  = get_bridge($url);
        json_encode($data = array(
        'status'            => $resultarr['metaData']['message'],
        'Code'              => $resultarr['metaData']['code'],
        // /'nama' => $url
        'response'        => $resultarr['response']
        ));

        $data = json_encode($data);
        echo $data;
        /* --- bridging BPJS ----*/
    }

    public function cek_faskes_satu($nama_nomor, $level_faskes ='1'){        
        /* --- bridging BPJS ----*/
        $url     = "referensi/faskes/".$nama_nomor."/".$level_faskes;
        $resultarr  = get_bridge($url);

            // $arr['query']   = $nama_nomor; 
            // $arr['queryLvl']= $level_faskes;          
            // $arr['message'] = $resultarr['metaData']['message'];
            // $arr['code']    = $resultarr['metaData']['code'];     
            foreach ($resultarr['response']['faskes'] as $value) {
                $arr[] = array(
                    'value' => $value['nama'],
                    'data'   =>$value['kode']
                 );
            }                
           
        
       $data = json_encode($arr);

        echo $data;
        /* --- bridging BPJS ----*/
    }    

    public function cek_dokter_dpjp($jnsPelayanan='1', $tgl='2018-10-15', $nama_nomor = ''){        
        /* --- bridging BPJS ----*/
        // $tgl = date('Y-m-d');
        $url        = "referensi/dokter/pelayanan/".$jnsPelayanan."/tglPelayanan/".$tgl."/Spesialis/".$nama_nomor;
        $resultarr  = get_bridge($url);
        json_encode($data = array(
        'status'            => $resultarr['metaData']['message'],
        'Code'              => $resultarr['metaData']['code'],
        // /'nama' => $url
        'response'        => $resultarr['response']
        ));

        $data = json_encode($data);
        echo $data;
        /* --- bridging BPJS ----*/
    }

    public function cek_propinsi($nama_nomor = ''){        
        /* --- bridging BPJS ----*/
        $url        = "referensi/propinsi";
        $resultarr  = get_bridge($url);
        json_encode($data = array(
            'url'               => $url,
            'status'            => $resultarr['metaData']['message'],
            'Code'              => $resultarr['metaData']['code'],
            // /'nama' => $url
            'response'        => $resultarr['response']
        ));

        $data = json_encode($data);
        echo $data;
        /* --- bridging BPJS ----*/
    }

    public function cek_kabupaten($nama_nomor = ''){        
        /* --- bridging BPJS ----*/
        $url        = "referensi/kabupaten/propinsi/".$nama_nomor;
        $resultarr  = get_bridge($url);
        json_encode($data = array(
        'status'            => $resultarr['metaData']['message'],
        'Code'              => $resultarr['metaData']['code'],
        // /'nama' => $url
        'response'        => $resultarr['response']
        ));

        $data = json_encode($data);
        echo $data;
        /* --- bridging BPJS ----*/
    }

    public function cek_kecamatan($nama_nomor = ''){        
        /* --- bridging BPJS ----*/
        $url        = "referensi/kecamatan/kabupaten/".$nama_nomor;
        $resultarr  = get_bridge($url);
        json_encode($data = array(
        'status'            => $resultarr['metaData']['message'],
        'Code'              => $resultarr['metaData']['code'],
        // /'nama' => $url
        'response'        => $resultarr['response']
        ));

        $data = json_encode($data);
        echo $data;
        /* --- bridging BPJS ----*/
    }


    public function cek_procedure($nama_kode){        //hanya untuk LPK!
        /* --- bridging BPJS ----*/
        $url        = "referensi/procedure/".$nama_kode;
        $resultarr  = get_bridge($url);
        json_encode($data = array(
        'status'            => $resultarr['metaData']['message'],
        'Code'              => $resultarr['metaData']['code'],
        // /'nama' => $url
        'response'        => $resultarr['response']
        ));

         $data = json_encode($data);

        echo $data;    
        /* --- bridging BPJS ----*/
    }

    public function cek_kelas_rawat(){        //hanya untuk LPK!
        /* --- bridging BPJS ----*/
        $url        = "referensi/kelasrawat";
        $resultarr  = get_bridge($url);
        json_encode($data = array(
        'status'            => $resultarr['metaData']['message'],
        'Code'              => $resultarr['metaData']['code'],
        // /'nama' => $url
        'response'        => $resultarr['response']
        ));

         $data = json_encode($data);

        echo $data;    
        /* --- bridging BPJS ----*/
    }

    public function cek_ruang_rawat(){        //hanya untuk LPK!
        /* --- bridging BPJS ----*/
        $url        = "referensi/ruangrawat";
        $resultarr  = get_bridge($url);
        json_encode($data = array(
        'status'            => $resultarr['metaData']['message'],
        'Code'              => $resultarr['metaData']['code'],
        // /'nama' => $url
        'response'        => $resultarr['response']
        ));

         $data = json_encode($data);

        echo $data;    
        /* --- bridging BPJS ----*/
    }

    public function cek_dokter($nama_dpjp){        //hanya untuk LPK!
        /* --- bridging BPJS ----*/
        $url        = "referensi/dokter/".$nama_dpjp;
        $resultarr  = get_bridge($url);
        json_encode($data = array(
        'status'            => $resultarr['metaData']['message'],
        'Code'              => $resultarr['metaData']['code'],
        // /'nama' => $url
        'response'        => $resultarr['response']
        ));

        $data = json_encode($data);

        echo $data;    
        /* --- bridging BPJS ----*/
    }

    public function cek_spesialistik(){        //hanya untuk LPK!
        /* --- bridging BPJS ----*/
        $url        = "referensi/spesialistik";
        $resultarr  = get_bridge($url);
        json_encode($data = array(
        'status'            => $resultarr['metaData']['message'],
        'Code'              => $resultarr['metaData']['code'],
        // /'nama' => $url
        'response'        => $resultarr['response']
        ));

        $data = json_encode($data);

        echo $data;    
        /* --- bridging BPJS ----*/
    }    

    public function cek_cara_keluar(){        //hanya untuk LPK!
        /* --- bridging BPJS ----*/
        $url        = "referensi/carakeluar";
        $resultarr  = get_bridge($url);
        json_encode($data = array(
        'status'            => $resultarr['metaData']['message'],
        'Code'              => $resultarr['metaData']['code'],
        // /'nama' => $url
        'response'        => $resultarr['response']
        ));

        $data = json_encode($data);

        echo $data;    
        /* --- bridging BPJS ----*/
    }

    public function cek_pasca_pulang(){        //hanya untuk LPK!
        /* --- bridging BPJS ----*/
        $url        = "referensi/pascapulang";
        $resultarr  = get_bridge($url);
        json_encode($data = array(
        'status'            => $resultarr['metaData']['message'],
        'Code'              => $resultarr['metaData']['code'],
        // /'nama' => $url
        'response'        => $resultarr['response']
        ));

         $data = json_encode($data);

        echo $data;    
        /* --- bridging BPJS ----*/
    }
}

/* End of file Bridging_bpjs.php */
/* Location: ./application/modules/bridging_bpjs/Bridging_bpjs.php */
