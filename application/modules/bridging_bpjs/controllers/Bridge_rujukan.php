<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bridge_rujukan extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation','session');
        $this->load->helper(['url', 'form', 'bpjs_bridge_helper']);
        // MY_Controller::check_logged_in();
        $this->load->database();
	}

    public function cek_rujukan($jenis = '', $nomor = ''){        //$jenis = 'rs/'
        /* --- bridging BPJS ----*/
        $url        = "Rujukan/".$jenis.$nomor;
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

 	public function cek_rujukan_kartu_satu($jenis = '', $nomor = ''){        //$jenis = 'rs/'
        /* --- bridging BPJS ----*/
        //$id         = '0001482813854';
        $id         = (strlen($no_kartu)>7)?$no_kartu:'';
        $tglSEP     = date('Y-m-d');//"2018-10-09";
        $subDomain  = (strlen($id) > 15) ? "Rujukan/".$jenis."Peserta/" : "Rujukan/"; //Lihat katalog
        $url        = $subDomain.$id;

        $resultarr  = get_bridge($url);
        json_encode($data = array(
        'status'            => $resultarr['metaData']['message'],
        'Code'              => $resultarr['metaData']['code'],
        // /'nama' => $url
        'kdDiagnosa'        => $resultarr['response']['rujukan']['diagnosa']['kode'],
        'nmDiagnosa'        => $resultarr['response']['rujukan']['diagnosa']['nama'],
        'keluhan'           => $resultarr['response']['rujukan']['keluhan'],
        'noKunjungan'       => $resultarr['response']['rujukan']['noKunjungan'],
        'kdPelayanan'       => $resultarr['response']['rujukan']['pelayanan']['kode'],
        'nmPelayanan'       => $resultarr['response']['rujukan']['pelayanan']['nama'],
        'nmAsuransi'        => $resultarr['response']['rujukan']['cob']['nmAsuransi'],
        'noAsuransi'        => $resultarr['response']['rujukan']['cob']['noAsuransi'],
        'cob_tglTAT'        => $resultarr['response']['rujukan']['cob']['tglTAT'],
        'cob_tglTMT'        => $resultarr['response']['rujukan']['cob']['tglTMT'],
        'hakKelas'          => $resultarr['response']['rujukan']['hakKelas']['keterangan'],
        'hakKelasKode'      => $resultarr['response']['rujukan']['hakKelas']['kode'],
        'dinsos'            => $resultarr['response']['rujukan']['informasi']['dinsos'],
        'noSKTM'            => $resultarr['response']['rujukan']['informasi']['noSKTM'],
        'prolanisPRB'       => $resultarr['response']['rujukan']['informasi']['prolanisPRB'],
        'ketJenisPeserta'   => $resultarr['response']['jenisPeserta']['keterangan'],
        'kdJenisrPeserta'   => $resultarr['response']['jenisPeserta']['kode'],
        'noMR'              => $resultarr['response']['rujukan']['mr']['noMR'],
        'noTelepon'         => $resultarr['response']['rujukan']['mr']['noTelepon'],
        'nama'              => $resultarr['response']['rujukan']['nama'],
        'nik'               => $resultarr['response']['rujukan']['nik'],
        'noKartu'           => $resultarr['response']['rujukan']['noKartu'],
        'pisa'              => $resultarr['response']['rujukan']['pisa'],
        'kdProvider'        => $resultarr['response']['rujukan']['provUmum']['kdProvider'],
        'nmProvider'        => $resultarr['response']['rujukan']['provUmum']['nmProvider'],
        'sex'               => $resultarr['response']['rujukan']['sex'],
        'ketStatusPeserta'  => $resultarr['response']['rujukan']['statusPeserta']['keterangan'],
        'kdStatusPeserta'   => $resultarr['response']['rujukan']['statusPeserta']['kode'],
        'tglCetakKartu'     => $resultarr['response']['rujukan']['tglCetakKartu'],
        'tglLahir'          => $resultarr['response']['rujukan']['tglLahir'],
        'tglTAT'            => $resultarr['response']['rujukan']['tglTAT'],
        'tglTMT'            => $resultarr['response']['rujukan']['tglTMT'],
        'umurSaatPelayanan' => $resultarr['response']['rujukan']['umur']['umurSaatPelayanan'],
        'umurSekarang'      => $resultarr['response']['rujukan']['umur']['umurSekarang'],
        'kdPoliRujukan'     => $resultarr['response']['rujukan']['poliRujukan']['kode'],
        'nmPoliRujukan'     => $resultarr['response']['rujukan']['poliRujukan']['nama'],
        'kdProvPerujuk'     => $resultarr['response']['rujukan']['provPerujuk']['kode'],
        'nmProvPerujuk'     => $resultarr['response']['rujukan']['provPerujuk']['nama'],
        'tglKunjungan'      => $resultarr['response']['rujukan']['tglKunjungan'],
        ));


        return $data;

        /* --- bridging BPJS ----*/
    }

    public function echo_cek_rujukan_kartu_satu($jenis = '', $nomor = ''){
        $data = $this->cek_rujukan_kartu_satu($jenis, $nomor);
        $data = json_encode($data);

        echo $data;
    }

    public function cek_rujukan_kartu_multi($nomor = ''){        
        /* --- bridging BPJS ----*/
        $url        = "Rujukan/List/Peserta/".$nomor; // atau Rujukan/RS/Peserta/ utk PCare
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


    public function insert_rujukan(){
        
        /* --- bridging BPJS ----*/
        $url        = "Rujukan/insert";

         $arr = array(
            "request" => array(
                "t_rujukan" => array(
                    "noSep"         => "0001006073684", //1
                    "tglRujukann"   => "2018-09-25", //2
                    "ppkDirujuk"    => "1023R001", //3
                    "jnsPelayanan"  => "1", //4
                    "catatan"       => "test", //5
                    "diagRujukan"   => "A00.1", //6
                    "tipeRujukan"   => "1", //7
                    "poliRujukan"   => "INT", //8
                    "user"          => "Coba Ws" //9
                )
            )
        );

        $resultarr  = post_bridge($url, $arr);
        json_encode($data = array(
        'status'            => $resultarr['metaData']['message'],
        'Code'              => $resultarr['metaData']['code'],
        // /'nama' => $url
        'rujukan'        => $resultarr['response']['rujukan']
        ));


        $data = json_encode($data);

        echo $data;
        /* --- bridging BPJS ----*/
    }


     public function update_rujukan(){        
        /* --- bridging BPJS ----*/
        $url        = "Rujukan/Update";

         $arr = array(
            "request" => array(
                "t_rujukan" => array(
                    "noRujukan"         => "0301R0011117B000014", //1
                    "ppkDirujuk"    => "0301R002", //2
                    "tipe"          => "0", //3
                    "jnsPelayanan"  => "1", //4
                    "catatan"       => "test 3", //5
                    "diagRujukan"   => "A00.1", //6
                    "tipeRujukan"   => "1", //7
                    "poliRujukan"   => "INT", //8
                    "user"          => "Coba Ws" //9
                )
            )
        );

        $resultarr  = put_bridge($url, $arr);
        json_encode($data = array(
        'status'            => $resultarr['metaData']['message'],
        'Code'              => $resultarr['metaData']['code'],
        // /'nama' => $url
        'rujukan'        => $resultarr['response']
        ));


        $data = json_encode($data);

        echo $data;
        /* --- bridging BPJS ----*/
    }

    public function delete_rujukan(){        
        /* --- bridging BPJS ----*/
        $url        = "Rujukan/delete";

         $arr = array(
            "request" => array(
                "t_rujukan" => array(
                    "noRujukan" => "0301R0011117B000015",
                    "user"      => "Coba Ws"
                    )
                )
        );

        $resultarr  = delete_bridge($url, $arr);
        json_encode($data = array(
        'status'            => $resultarr['metaData']['message'],
        'Code'              => $resultarr['metaData']['code'],
        // /'nama' => $url
        'sep'        => $resultarr['response']
        ));


          $data = json_encode($data);

        echo $data;
        /* --- bridging BPJS ----*/
    }

}

/* End of file Bridging_bpjs.php */
/* Location: ./application/modules/bridging_bpjs/Bridging_bpjs.php */
