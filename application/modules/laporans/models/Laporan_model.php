<?php 
/**
* 
*/
class Barang_model extends CI_Model
{
	
	public function tampil()
	{
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

	//generate dataTable serverside method
	function get_all_barang() { //datatable server side, colom sesuaikan dgn tabel jgn di lebihi id saja
      $this->datatables->from('barangs b');
      //select kolom yang dimunculkan di tabel saja, bila tidak search|sort tidak akan berjalan
      $this->datatables->select('barang_nama, harga, insentif, detail, barang_id');
      $this->datatables->add_column('action', 
      		'<a href="'.base_url().'barangs/ubah/$1" class="btn btn-primary btn-flat btn-addon btn-sm m-b-10 m-l-5" title="Lihat Data"><i class="fa fa-eye"></i></a>
      		<a class="edit_record btn btn-warning btn-flat btn-addon btn-sm m-b-10 m-l-5" title="Edit Data" href="javascript:void(0);" data-code="$1" data-nama="$2" data-harga="$3" data-insentif="$4" data-detail="$5"><i class="fa fa-edit"></i></a>
      		<a class="delete_record btn btn-danger btn-flat btn-addon btn-sm m-b-10 m-l-5" title="Hapus Data" href="#" data-code="$1"  ><i class="fa fa-trash" on></i></a>'
      	, 'barang_id, barang_nama, harga, insentif, detail');
      return $this->datatables->generate();
  }
}
 ?>