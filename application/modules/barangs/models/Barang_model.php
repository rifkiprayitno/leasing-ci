<?php 
/**
* 
*/
class Barang_model extends CI_Model
{
	
	public function tampil()
	{
		# code...
		$data = $this->db->query("SELECT * FROM barangs");
		return $data->result();
	}

	public function detail($id)
	{
		$this->load->database();
		$this->db->where('barang_id', $id);
		return $this->db->get("barangs")->result_array();
	}

	public function tambah($data = array())
	{
		$this->load->database();
		return $this->db->insert("barangs", $data[0]);
	}

	public function ubah($data = array(), $id){
		$this->load->database();
		$this->db->where('barang_id', $id);
		return $this->db->update('barangs', $data[0]);
	}

	public function hapus($id){
		$this->load->database();
		$this->db->where('barang_id', $id);
		return $this->db->delete('barangs');	
	}
}
 ?>