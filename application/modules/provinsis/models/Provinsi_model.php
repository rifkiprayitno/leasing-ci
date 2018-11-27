<?php 
/**
* 
*/
class Provinsi_model extends CI_Model
{
	
	public function tampil()
	{
		$data = $this->db->query("SELECT * FROM Provinsis");
		return $data->result();
	}

	public function tambah($data = array())
	{
		$this->load->database();
		return $this->db->insert("Provinsis", $data[0]);
	}

	public function ubah($data = array(), $id){
		$this->load->database();
		$this->db->where('Provinsi_id', $id);
		return $this->db->update('Provinsis', $data[0]);
	}

	public function hapus($id){
		$this->load->database();
		$this->db->where('Provinsi_id', $id);
		return $this->db->delete('Provinsis');	
	}

	//generate dataTable serverside method
	function get_all_user() { //datatable server side, colom sesuaikan dgn tabel jgn di lebihi id saja
      $this->datatables->from('provinsis p');
      //select kolom yang dimunculkan di tabel saja, bila tidak search|sort tidak akan berjalan
      $this->datatables->select('nama, user_id');
      $this->datatables->add_column('action', 
      		'<a href="'.base_url().'provinsis/ubah/$1" class="btn btn-primary btn-flat btn-addon btn-sm m-b-10 m-l-5" title="Lihat Data"><i class="fa fa-eye"></i></a>
      		<a class="edit-link btn btn-warning btn-flat btn-addon btn-sm m-b-10 m-l-5" title="Edit Data" href="'.base_url().'provinsis/ubah/$1"><i class="fa fa-edit"></i></a>
      		<a class="hapus-link btn btn-danger btn-flat btn-addon btn-sm m-b-10 m-l-5" title="Hapus Data" onClick=del("$1")><i class="fa fa-trash"></i></a>'
      	, 'user_id');
      return $this->datatables->generate();
  }
}
 ?>