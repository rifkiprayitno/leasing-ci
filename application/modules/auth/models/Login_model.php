<?php 
/**
* 
*/
class Login_model extends CI_Model
{
	
	function m_cekuser_login($email, $password)
	{
 		$query=$this->db->query("SELECT * FROM users WHERE email='$email' AND password=MD5('$password') LIMIT 1");
        return $query;
	}

//cek nama dan password admin
    function auth_admin($email,$password){
        $query=$this->db->query("SELECT * FROM users WHERE email='$email' AND password=MD5('$password') AND level='admin' LIMIT 1");
        return $query;
    }
 
    //cek nama dan password member
    function auth_member($email,$password){
        $query=$this->db->query("SELECT * FROM users WHERE email='$email' AND password=MD5('$password') AND level='member' LIMIT 1");
        return $query;
    }

}
 ?>