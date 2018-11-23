<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MCarabayar extends CI_Model {
	public function getall() {
		$all_carabayar = $this->db->get('carabayar');
		return $all_carabayar->result();
	}
	

}

/* End of file MCarabayar.php */
/* Location: ./application/modules/carabayar/models/MCarabayar.php */
