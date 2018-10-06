<?php 
/**
* 
*/
class Aplikasi_model extends CI_Model
{
	
	public function tampil()
	{
		# code...
		$data = $this->db->query("SELECT * FROM aplikasis");
		return $data->result();
	}

	public function detail($id)
	{
		$this->load->database();
		$this->db->where('aplikasi_id', $id);
		return $this->db->get("aplikasis")->result_array();
	}

	public function tambah($data = array())
	{
		$this->load->database();
		return $this->db->insert("aplikasis", $data[0]);
	}

	public function ubah($data = array(), $id){
		$this->load->database();
		$this->db->where('aplikasi_id', $id);
		return $this->db->update('aplikasis', $data[0]);
	}

	public function hapus($id){
		$this->load->database();
		$this->db->where('aplikasi_id', $id);
		return $this->db->delete('aplikasis');	
	}
}
 ?>