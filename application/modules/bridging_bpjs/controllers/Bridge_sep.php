<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bridge_sep extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation','session');
        $this->load->helper(['url', 'form', 'bpjs_bridge_helper']);
        // MY_Controller::check_logged_in();
        $this->load->database();
	}

 	public function cek_kartu($no_kartu = ''){
        
        /* --- bridging BPJS ----*/
        $id         = (strlen($no_kartu)>7)?$no_kartu:'';
        $tglSEP     = date('Y-m-d');//"2018-10-09";
        $subDomain  = (strlen($id) > 15) ? "Peserta/nik/" : "Peserta/nokartu/"; //Lihat katalog
        $url        = $subDomain.$id."/tglSEP/".$tglSEP;

        $resultarr  = get_bridge($url);
        json_encode($data = array(
        'status'            => $resultarr['metaData']['message'],
        'Code'              => $resultarr['metaData']['code'],
        // /'nama' => $url
        'nmAsuransi'        => $resultarr['response']['peserta']['cob']['nmAsuransi'],
        'noAsuransi'        => $resultarr['response']['peserta']['cob']['noAsuransi'],
        'cob_tglTAT'        => $resultarr['response']['peserta']['cob']['tglTAT'],
        'cob_tglTMT'        => $resultarr['response']['peserta']['cob']['tglTMT'],
        'hakKelas'          => $resultarr['response']['peserta']['hakKelas']['keterangan'],
        'hakKelasKode'      => $resultarr['response']['peserta']['hakKelas']['kode'],
        'dinsos'            => $resultarr['response']['peserta']['informasi']['dinsos'],
        'noSKTM'            => $resultarr['response']['peserta']['informasi']['noSKTM'],
        'prolanisPRB'       => $resultarr['response']['peserta']['informasi']['prolanisPRB'],
        'jenisPeserta'      => $resultarr['response']['peserta']['jenisPeserta']['keterangan'],
        'jenisPesertaKode'  => $resultarr['response']['peserta']['jenisPeserta']['kode'],
        'noMR'              => $resultarr['response']['peserta']['mr']['noMR'],
        'noTelepon'         => $resultarr['response']['peserta']['mr']['noTelepon'],
        'nama'              => $resultarr['response']['peserta']['nama'],
        'nik'               => $resultarr['response']['peserta']['nik'],
        'noKartu'           => $resultarr['response']['peserta']['noKartu'],
        'pisa'              => $resultarr['response']['peserta']['pisa'],
        'kdProvider'        => $resultarr['response']['peserta']['provUmum']['kdProvider'],
        'nmProvider'        => $resultarr['response']['peserta']['provUmum']['nmProvider'],
        'sex'               => $resultarr['response']['peserta']['sex'],
        'statusPeserta'     => $resultarr['response']['peserta']['statusPeserta']['keterangan'],
        'statusPesertaKode' => $resultarr['response']['peserta']['statusPeserta']['kode'],
        'tglCetakKartu'     => $resultarr['response']['peserta']['tglCetakKartu'],
        'tglLahir'          => $resultarr['response']['peserta']['tglLahir'],
        'tglTAT'            => $resultarr['response']['peserta']['tglTAT'],
        'tglTMT'            => $resultarr['response']['peserta']['tglTMT'],
        'umurSaatPelayanan' => $resultarr['response']['peserta']['umur']['umurSaatPelayanan'],
        'umurSekarang'      => $resultarr['response']['peserta']['umur']['umurSekarang'],
        ));


        $data = json_encode($data);

        echo $data;
        /* --- bridging BPJS ----*/
    }

    // public function echo_cek_kartu($no_kartu = ''){
    //     $data = $this->cek_kartu($no_kartu);
    //     $data = json_encode($data);

    //     echo $data;
    // }

    public function cek_sep($nama_nomor = ''){        
        /* --- bridging BPJS ----*/
        $url        = "SEP/".$nama_nomor;
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

    // public function echo_cek_sep($no_kartu = ''){
    //     $data = $this->cek_sep($no_kartu);
    //     $data = json_encode($data);

    //     echo $data;
    // }

    public function cek_faskes_satu($nama_nomor = ''){        
        /* --- bridging BPJS ----*/
        $url     = "referensi/faskes/".$nama_nomor."/1";
        $resultarr  = get_bridge($url);

            $arr['query'] = $nama_nomor;          
                foreach ($resultarr['response']['faskes'] as $value) {
                    $arr['suggestions'][] = array(
                        'Value' => $value['nama'],
                        'kode'   =>$value['kode']
                     );

                }

        // json_encode($data = $arr);

        // return $data;
        return $arr;
        /* --- bridging BPJS ----*/
    }
     public function echo_cek_faskes_satu($no_kartu = ''){
        $keyword = $this->uri->segment(3);

        $data = $this->cek_faskes_satu($keyword);
        $data = json_encode($data);

        echo $data;
    }

    public function insert_sep(){
        
        /* --- bridging BPJS ----*/
        $url        = "SEP/1.1/insert";

         $arr = array(
            "request" => array(
                "t_sep" => array(
                    "noKartu" => "0001006073684", //1
                    "tglSep" => "2018-09-25", //2
                    "ppkPelayanan" => "1023R001", //3
                    "jnsPelayanan" => "2", //4
                    "klsRawat" => "3", //5
                    "noMR" => "512345", //6
                    "rujukan" => array(
                        "asalRujukan" => "2", //7
                        "tglRujukan" => "2017-10-17", //8
                        "noRujukan" => "102301010918Y001491", //9
                        "ppkRujukan" => "1001R012" //10
                    ),
                    "catatan" => "test", //11
                    "diagAwal" => "A00.1", //12
                    "poli" => array(
                        "tujuan" => "INT", //13
                        "eksekutif" => "0" //14
                    ),
                    "cob" => array(
                        "cob" => "0" //15
                    ),
                    "katarak" => array(
                        "katarak" => "0" //16
                    ),
                    "jaminan" => array(
                        "lakaLantas" => "0", //17
                        "penjamin" => array(
                            "penjamin" => "1", //18
                            "tglKejadian" => "2018-08-06", //19
                            "keterangan" => "kll", //20
                            "suplesi" => array(
                                "suplesi" => "0", //21
                                "noSepSuplesi" => "0301R0010718V000001", //22
                                "lokasiLaka" => array(
                                    "kdPropinsi" => "03", //23
                                    "kdKabupaten" => "0050", //24
                                    "kdKecamatan" => "0574" //25
                                )
                            )
                        )
                    ),
                    "skdp" => array(
                        "noSurat" => "000002",//26
                        "kodeDPJP" => "31661" //27
                    ),
                    "noTelp" => "081919999", //28
                    "user" => "Coba Ws" //29
                    )
                )
        );

        $resultarr  = post_bridge($url, $arr);
        json_encode($data = array(
        'status'            => $resultarr['metaData']['message'],
        'Code'              => $resultarr['metaData']['code'],
        // /'nama' => $url
        'sep'        => $resultarr['response']['sep']
        ));


         $data = json_encode($data);
         echo $data;
        /* --- bridging BPJS ----*/
    }

    // public function echo_insert_sep(){
    //     $data = $this->insert_sep();
    //     $data = json_encode($data);

    //     echo $data;
    // }
    //102301010918Y001491

     public function update_sep(){
        
        /* --- bridging BPJS ----*/
        $url        = "SEP/1.1/Update";

         $arr = array(
            "request" => array(
                "t_sep" => array(
                    "noSep" => "0301R0011117V000008", //4
                    "klsRawat" => "1", //5
                    "noMR" => "123456", //6
                    "catatan" => "test", //11
                    "diagAwal" => "B00.1", //12
                    "poli" => array(
                        "tujuan" => "INT", //13
                        "eksekutif" => "0" //14
                    ),
                    "cob" => array(
                        "cob" => "0" //15
                    ),
                    "katarak" => array(
                        "katarak" => "1" //16
                    ),
                    "skdp" => array(
                        "noSurat" => "12313123",//26
                        "kodeDPJP" => "39508" //27
                    ),
                    "jaminan" => array(
                        "lakaLantas" => "1", //17
                        "penjamin" => array(
                            "penjamin" => "1", //18
                            "tglKejadian" => "2018-08-06", //19
                            "keterangan" => "kll", //20
                            "suplesi" => array(
                                "suplesi" => "0", //21
                                "noSepSuplesi" => "0301R0010718V000001", //22
                                "lokasiLaka" => array(
                                    "kdPropinsi" => "03", //23
                                    "kdKabupaten" => "0050", //24
                                    "kdKecamatan" => "0574" //25
                                )
                            )
                        )
                    ),
                    "noTelp" => "081919999", //28
                    "user" => "Coba Ws" //29
                    )
                )
        );

        $resultarr  = put_bridge($url, $arr);
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

    // public function echo_update_sep(){
    //     $data = $this->update_sep();
    //     $data = json_encode($data);

    //     echo $data;
    // }

    public function delete_sep(){        
        /* --- bridging BPJS ----*/
        $url        = "SEP/Delete";

         $arr = array(
            "request" => array(
                "t_sep" => array(
                    "noSep" => "0301R0011017V000007",
                    "user" => "Coba Ws"
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
        echo $data;$data;
        /* --- bridging BPJS ----*/
    }

    // public function echo_delete_sep(){
    //     $data = $this->delete_sep();
    //     $data = json_encode($data);

    //     echo $data;
    // }
}

/* End of file Bridging_bpjs.php */
/* Location: ./application/modules/bridging_bpjs/Bridging_bpjs.php */
