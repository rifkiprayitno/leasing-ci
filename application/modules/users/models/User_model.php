<?php 
/**
* 
*/
class User_model extends CI_Model
{
	
	public function tampil()
	{
		# code...
		$data = $this->db->query("SELECT * FROM users");
		return $data->result();
	}

	public function detail($id)
	{
		$this->load->database();
		$this->db->where('user_id', $id);
		return $this->db->get("users")->result_array();
	}

	public function tambah($data = array())
	{
		$this->load->database();
		return $this->db->insert("users", $data[0]);
	}

	public function ubah($data = array(), $id){
		$this->load->database();
		$this->db->where('user_id', $id);
		return $this->db->update('users', $data[0]);
	}

	public function hapus($id){
		$this->load->database();
		$this->db->where('user_id', $id);
		return $this->db->delete('users');	
	}
}
 ?>