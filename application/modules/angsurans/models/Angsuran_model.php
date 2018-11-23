<?php 
/**
* 
*/
class Angsuran_model extends CI_Model
{
	
	public function tampil()
	{
		$data = $this->db->query("SELECT * FROM angsurans an, aplikasis a, users u, barangs b
								WHERE an.angsuran_aplikasi_kode=a.aplikasi_kode AND a.aplikasi_user_id=u.user_id 
									AND a.aplikasi_barang_id=b.barang_id");
		return $data->result();
	}

	public function detail($id)
	{
		$this->load->database();

	    //select kolom yang dimunculkan di tabel saja, bila tidak search|sort tidak akan berjalan
	    $this->db->select('*');
	    $this->db->join('aplikasis', 'angsuran_aplikasi_kode=aplikasi_kode');
	    $this->db->join('users', 'aplikasi_user_id=user_id');
	    $this->db->join('barangs', 'aplikasi_barang_id=barang_id');
		$this->db->where('angsuran_id', $id);
		return $this->db->get("angsurans")->result_array();
	}

	public function tambah($data = array())
	{
		$this->load->database();
		return $this->db->insert("angsurans", $data[0]);
	}

	public function ubah($data = array(), $id){
		$this->load->database();
		$this->db->where('angsuran_id', $id);
		return $this->db->update('angsurans', $data[0]);
	}

	public function hapus($id){
		$this->load->database();
		$this->db->where('angsuran_id', $id);
		return $this->db->delete('angsurans');	
	}

	//generate dataTable serverside method (*dipakai di modal pencarian aplkasi pada tamabah angsuran)
  	function get_all_aplikasi() {
      $this->datatables->from('aplikasis a');
      //select kolom yang dimunculkan di tabel saja, bila tidak search|sort tidak akan berjalan
      $this->datatables->select('aplikasi_kode, dp, angsuran, tenor, nama, barang_nama, apliaksi_id');
      $this->datatables->join('users', 'aplikasi_user_id=user_id');
      $this->datatables->join('barangs', 'aplikasi_barang_id=barang_id');
      $this->datatables->add_column('action', 
      		'<a href="javascript:void(0);" class="pilih btn btn-primary btn-flat btn-addon btn-sm m-b-10 m-l-5" title="pilih Aplikasi" data-id="$1" onclick="pilihlah($1)"><i class="fa fa-eye"></i></a>
      		'
      	, 'apliaksi_id, aplikasi_kode');
      return $this->datatables->generate();
  }

//dipakai di form index angsuran
  function get_all_angsuran() {
      $this->datatables->from('angsurans a');
      //select kolom yang dimunculkan di tabel saja, bila tidak search|sort tidak akan berjalan
      $this->datatables->select('angsuran_aplikasi_kode, tanggal_bayar, angsuran_ke, bayar, nama, barang_nama, angsuran_id');
      $this->datatables->join('aplikasis', 'angsuran_aplikasi_kode=aplikasi_kode');
      $this->datatables->join('users', 'aplikasi_user_id=user_id');
      $this->datatables->join('barangs', 'aplikasi_barang_id=barang_id');
      $this->datatables->add_column('action', 
      		'<a href="'.base_url().'angsurans/ubah/$1" class="btn btn-primary btn-flat btn-addon btn-sm m-b-10 m-l-5" title="Lihat Data"><i class="fa fa-eye"></i></a>
      		<a class="edit-link btn btn-warning btn-flat btn-addon btn-sm m-b-10 m-l-5" title="Edit Data" href="'.base_url().'angsurans/ubah/$1"><i class="fa fa-edit"></i></a>
      		<a class="hapus-link btn btn-danger btn-flat btn-addon btn-sm m-b-10 m-l-5" title="Hapus Data" onClick=del("$1")><i class="fa fa-trash"></i></a>'
      	, 'angsuran_id');
      return $this->datatables->generate();
  }

}
 ?>