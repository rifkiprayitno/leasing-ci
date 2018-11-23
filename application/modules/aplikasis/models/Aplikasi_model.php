<?php 
/**
* 
*/
class Aplikasi_model extends CI_Model
{
	
	public function tampil()
	{
		$data = $this->db->query("SELECT * FROM aplikasis a, Users u, Barangs b
							WHERE u.user_id=a.aplikasi_user_id AND a.aplikasi_barang_id=b.barang_id");
		return $data->result();
	}
	public function tampil_user()
	{
		$data = $this->db->query("SELECT * FROM users WHERE level ='member'");
		return $data->result();
	}
	public function tampil_barang()
	{
		$data = $this->db->query("SELECT * FROM barangs");
		return $data->result();
	}

	public function getData(){
		$hasil = $this->db->query("SELECT a.apliaksi_id, a.aplikasi_kode, a.aplikasi_barang_id, a.aplikasi_user_id, a.barang_harga,
										a.barang_insentif, a.dp, a.angsuran, a.tenor, a.total, a.tanggal_berlaku,
										a.awal_tempo, a.jatuh_tempo, a.status, a.aplikasi_created_at, a.aplikasi_updated_at
									FROM aplikasis a
									INNER JOIN users u ON u.user_id=a.aplikasi_user_id
									INNER JOIN Barangs b ON a.aplikasi_barang_id=b.barang_id");
		return $hasil->result();
	}
	
	//generate dataTable serverside method
  	function get_all_product() {
      $this->datatables->from('aplikasis a');
      //select kolom yang dimunculkan di tabel saja, bila tidak search|sort tidak akan berjalan
      $this->datatables->select('aplikasi_kode, dp, angsuran, tenor, nama, barang_nama, apliaksi_id');
      $this->datatables->join('users', 'aplikasi_user_id=user_id');
      $this->datatables->join('barangs', 'aplikasi_barang_id=barang_id');
      $this->datatables->add_column('action', 
      		'<a href="'.base_url().'angsurans/tambah/$1" class="btn btn-success btn-flat btn-addon btn-sm m-b-10 m-l-5" title="Tambah Angsuran"><i class="fa fa-money"></i></a>
      		<a href="'.base_url().'aplikasis/ubah/$1" class="btn btn-primary btn-flat btn-addon btn-sm m-b-10 m-l-5" title="Lihat Data"><i class="fa fa-eye"></i></a>
      		<a class="edit-link btn btn-warning btn-flat btn-addon btn-sm m-b-10 m-l-5" title="Edit Data" href="'.base_url().'aplikasis/ubah/$1"><i class="fa fa-edit"></i></a>
      		<a class="hapus-link btn btn-danger btn-flat btn-addon btn-sm m-b-10 m-l-5" title="Hapus Data" onClick=del("$1")><i class="fa fa-trash"></i></a>'
      	, 'apliaksi_id, aplikasi_kode');
      return $this->datatables->generate();
  }

	public function detail($where)
	{
		$this->db->select('*');
		$this->db->from('aplikasis');
		$this->db->join('barangs', 'barangs.barang_id = aplikasis.aplikasi_barang_id');
		$this->db->join('users', 'users.user_id = aplikasis.aplikasi_user_id');
		$this->db->where($where);
		
		$query = $this->db->get();

		return $query;
	}

	//dipake
	public function get_detail($where)
	{
		$this->db->select('*');
		$this->db->join('barangs', 'barangs.barang_id = aplikasis.aplikasi_barang_id');
		$this->db->join('users', 'users.user_id = aplikasis.aplikasi_user_id');
		$this->db->where('apliaksi_id', $where);
		return $this->db->get("aplikasis")->result_array();
	}

	public function tambah($data = array())
	{
		$this->load->database();
		return $this->db->insert("aplikasis", $data[0]);
	}

	public function ubah($data = array(), $id){
		$this->load->database();
		$this->db->where('apliaksi_id', $id);
		return $this->db->update('aplikasis', $data[0]);
	}

	public function hapus($id){
		$this->load->database();
		$this->db->where('aplikasi_id', $id);
		return $this->db->delete('aplikasis');	
	}
}
 ?>