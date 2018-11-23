<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bridge_lpk extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation','session');
        $this->load->helper(['url', 'form', 'bpjs_bridge_helper']);
        // MY_Controller::check_logged_in();
        $this->load->database();
	}

    

    public function insert_lpk(){
        
        /* --- bridging BPJS ----*/
        $url        = "LPK/insert";

//FORMAT INPUT POST MASIH BELUM SESUAI *multidimensionalarray
         $arr = array(
            "request" => array(
                "t_lpk" => array(
                    "noSep" => "0301R0011017V000015", //1
                    "tglMasuk" => "2017-10-25", //2
                    "tglKeluar" => "2017-10-25", //2
                    "jaminan"   => "1",
                    "poli"      => array(
                        "poli"          => "INT"
                    ),
                    "perawatan" => array(
                        "ruangRawat"    => "1",    
                        "kelasRawat"    => "1",
                        "spesialistik"  => "1",
                        "caraKeluar"    => "1",
                        "kondisiPulang" => "1"
                    ), //3
                    "diagnosa" => array(
                        array(
                            "kode"  => "N88.0",
                            "level"  => "1"
                        ),
                        array(
                            "kode"  => "A00.1",
                            "level"  => 2
                        )
                    ), //4
                    "procedure" => array(
                        array(
                            "kode"  => "00.82"
                        ),
                        array(
                            "kode"  => "00.83"
                        )
                    ), //4
                    "recanaTL" => array(
                        "tindakLanjut"  => "1", //7
                        "dirujukKe"     => array(
                            "kodePPK"       => ""
                        ), //8
                        "kontrolKembali"=> array(
                            "tglKontrol"    => "2017-11-10",
                            "poli"          => ""
                        )
                    ),
                    "DPJP" => "3", //11
                    "user" => "Coba Ws"
                )
            )
        );

        $resultarr  = post_bridge($url, $arr);
        json_encode($data = array(
        'status'            => $resultarr['metaData']['message'],
        'Code'              => $resultarr['metaData']['code'],
        // /'nama' => $url
        'lpk'        => $resultarr['response']
        ));


        $data = json_encode($data);

        echo $data;
        /* --- bridging BPJS ----*/
    }

     public function update_lpk(){
        
        /* --- bridging BPJS ----*/
        $url        = "LPK/Update";

//FORMAT INPUT POST MASIH BELUM SESUAI *multidimensionalarray
         $arr = array(
            "request" => array(
                "t_lpk" => array(
                    "noSep" => "0301R0011017V000015", //1
                    "tglMasuk" => "2017-10-25", //2
                    "tglKeluar" => "2017-10-25", //2
                    "jaminan"   => "1",
                    "poli"      => array(
                        "poli"          => "INT"
                    ),
                    "perawatan" => array(
                        "ruangRawat"    => "1",    
                        "kelasRawat"    => "1",
                        "spesialistik"  => "1",
                        "caraKeluar"    => "1",
                        "kondisiPulang" => "1"
                    ), //3
                    "diagnosa" => array(
                        array(
                            "kode"  => "N88.0",
                            "level"  => "1"
                        ),
                        array(
                            "kode"  => "A00.1",
                            "level"  => 2
                        )
                    ), //4
                    "procedure" => array(
                        array(
                            "kode"  => "00.82"
                        ),
                        array(
                            "kode"  => "00.83"
                        )
                    ), //4
                    "recanaTL" => array(
                        "tindakLanjut"  => "1", //7
                        "dirujukKe"     => array(
                            "kodePPK"       => ""
                        ), //8
                        "kontrolKembali"=> array(
                            "tglKontrol"    => "2017-11-10",
                            "poli"          => ""
                        )
                    ),
                    "DPJP" => "3", //11
                    "user" => "Coba Ws"
                )
            )
        );

        $resultarr  = put_bridge($url, $arr);
        json_encode($data = array(
        'status'            => $resultarr['metaData']['message'],
        'Code'              => $resultarr['metaData']['code'],
        // /'nama' => $url
        'lpk'        => $resultarr['response']
        ));


        $data = json_encode($data);

        echo $data;
        /* --- bridging BPJS ----*/
    }

    public function delete_lpk(){        
        /* --- bridging BPJS ----*/
        $url        = "LPK/delete";

         $arr = array(
            "request" => array(
                "t_lpk" => array(
                    "noSep" => "0301R0011017V000015"
                    )
                )
        );

        $resultarr  = delete_bridge($url, $arr);
        json_encode($data = array(
        'status'            => $resultarr['metaData']['message'],
        'Code'              => $resultarr['metaData']['code'],
        // /'nama' => $url
        'lpk'        => $resultarr['response']
        ));


        $data = json_encode($data);

        echo $data;
        /* --- bridging BPJS ----*/
    }

    public function cek_lpk($tgl_masuk, $jenis ='2'){        
        /* --- bridging BPJS ----*/
        $url        = "LPK/TglMasuk/".$tgl_masuk."/JnsPelayanan/".$jenis;
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
