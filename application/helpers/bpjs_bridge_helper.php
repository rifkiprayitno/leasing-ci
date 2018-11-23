<?php
const CONS_ID = '12409';
const SECRET_KEY = '8nLAF65B4B';

function get_bridge($subdomain){
        $data       = '12409'; //$GLOBALS['CONS_ID']; //Ganti dengan consumerID dari BPJS
        $secretKey  = '8nLAF65B4B'; //$GLOBALS['SECRET_KEY']; //Ganti dengan consumerSecret dari BPJS
        $tglSEP     = date('Y-m-d');//"2018-10-09";
        $domain     = "https://dvlp.bpjs-kesehatan.go.id/vclaim-rest/";
        $url        = $domain.$subdomain;
        date_default_timezone_set('UTC');
        $tStamp             = strval(time()-strtotime('1970-01-01 00:00:00'));
        $signature          = hash_hmac('sha256', $data."&".$tStamp, $secretKey, true);
        $encodedSignature   = base64_encode($signature);
        $urlencodedSignature= urlencode($encodedSignature);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "X-cons-id: $data",
        "X-timestamp: $tStamp",
        "X-signature: $encodedSignature" 
        ));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        $send = curl_exec($ch);
        curl_close($ch);
        $resultarr=json_decode($send, true);

        return $resultarr;
}

function post_bridge($subdomain, $arr){
        $data       = '12409'; //$GLOBALS['CONS_ID']; //Ganti dengan consumerID dari BPJS
        $secretKey  = '8nLAF65B4B'; //$GLOBALS['SECRET_KEY']; //Ganti dengan consumerSecret dari BPJS
        $tglSEP     = date('Y-m-d');//"2018-10-09";
        $domain     = "https://dvlp.bpjs-kesehatan.go.id/vclaim-rest/";
        //$subDomain  = (strlen($id) > 15) ? "Peserta/nik/" : "Peserta/nokartu/"; //Lihat katalog
        $url        = $domain.$subdomain;
        date_default_timezone_set('UTC');
        $tStamp             = strval(time()-strtotime('1970-01-01 00:00:00'));
        $signature          = hash_hmac('sha256', $data."&".$tStamp, $secretKey, true);
        $encodedSignature   = base64_encode($signature);
        $urlencodedSignature= urlencode($encodedSignature);

        $headers = array(
            "X-cons-id: $data",
            "X-timestamp: $tStamp",
            "X-signature: $encodedSignature" 
        );       
       
        $json = json_encode($arr);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_TIMEOUT, 3);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $send = curl_exec($ch);
        curl_close($ch);
        $resultarr=json_decode($send, true);

        return $resultarr;
}   

function put_bridge($subdomain, $arr){
        $data       = '12409'; //$GLOBALS['CONS_ID']; //Ganti dengan consumerID dari BPJS
        $secretKey  = '8nLAF65B4B'; //$GLOBALS['SECRET_KEY']; //Ganti dengan consumerSecret dari BPJS
        $tglSEP     = date('Y-m-d');//"2018-10-09";
        $domain     = "https://dvlp.bpjs-kesehatan.go.id/vclaim-rest/";
        //$subDomain  = (strlen($id) > 15) ? "Peserta/nik/" : "Peserta/nokartu/"; //Lihat katalog
        $url        = $domain.$subdomain;
        date_default_timezone_set('UTC');
        $tStamp             = strval(time()-strtotime('1970-01-01 00:00:00'));
        $signature          = hash_hmac('sha256', $data."&".$tStamp, $secretKey, true);
        $encodedSignature   = base64_encode($signature);
        $urlencodedSignature= urlencode($encodedSignature);

        $headers = array(
            "X-cons-id: $data",
            "X-timestamp: $tStamp",
            "X-signature: $encodedSignature" 
        );       
       
        $json = json_encode($arr);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_TIMEOUT, 3);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $send = curl_exec($ch);
        curl_close($ch);
        $resultarr=json_decode($send, true);

        return $resultarr;
}   

function delete_bridge($subdomain, $arr){
        $data       = '12409'; //$GLOBALS['CONS_ID']; //Ganti dengan consumerID dari BPJS
        $secretKey  = '8nLAF65B4B'; //$GLOBALS['SECRET_KEY']; //Ganti dengan consumerSecret dari BPJS
        $tglSEP     = date('Y-m-d');//"2018-10-09";
        $domain     = "https://dvlp.bpjs-kesehatan.go.id/vclaim-rest/";
        //$subDomain  = (strlen($id) > 15) ? "Peserta/nik/" : "Peserta/nokartu/"; //Lihat katalog
        $url        = $domain.$subdomain;
        date_default_timezone_set('UTC');
        $tStamp             = strval(time()-strtotime('1970-01-01 00:00:00'));
        $signature          = hash_hmac('sha256', $data."&".$tStamp, $secretKey, true);
        $encodedSignature   = base64_encode($signature);
        $urlencodedSignature= urlencode($encodedSignature);

        $headers = array(
            "X-cons-id: $data",
            "X-timestamp: $tStamp",
            "X-signature: $encodedSignature" 
        );       
       
        $json = json_encode($arr);
        // $delete = "delete";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_TIMEOUT, 3);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "delete");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $send = curl_exec($ch);
        curl_close($ch);
        $resultarr=json_decode($send, true);

        return $resultarr;
}   