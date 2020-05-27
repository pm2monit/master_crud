<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_finance extends CI_Model {
	public function select_all_production() {
		$sql = "SELECT * FROM finance";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_all() {
		$sql = " SELECT * FROM finance";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM finance WHERE id = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function select_by_posisi($id) {
		$sql = "SELECT COUNT(*) AS jml FROM finance";

		$data = $this->db->query($sql);

		return $data->row();
	}

	// public function select_by_kota($id) {
	// 	$sql = "SELECT COUNT(*) AS jml FROM pegawai WHERE id_kota = {$id}";
	//
	// 	$data = $this->db->query($sql);
	//
	// 	return $data->row();
	// }

	public function update($data) {
		$sql = "UPDATE finance SET date_update='" .$data['date_update'] ."', keterangan='" .$data['keterangan'] ."', kredit='" .$data['kredit'] ."', debit='" .$data['debit']. "', saldo='" .$data['saldo']. "' WHERE id='" .$data['id'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM finance WHERE id='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert($data) {
		// $id = md5(DATE('ymdhms').rand());
		$sql = "INSERT INTO finance (`id`, `date_insert`, `date_update`, `keterangan`, `debit`, `kredit`, `saldo`) VALUES( NULL , '" .$data['date_insert'] ."', '" . $data['date_update'] . "','" .$data['keterangan'] ."','" .$data['kredit'] ."','" .$data['debit'] ."','" .$data['saldo'] ."')";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert_batch($data) {
		$this->db->insert_batch('finance', $data);

		return $this->db->affected_rows();
	}

	public function check_nama($nama) {
		$this->db->where('nama_produk', $nama);
		$data = $this->db->get('finance');

		return $data->num_rows();
	}

	public function total_rows() {
		$data = $this->db->get('finance');

		return $data->num_rows();
	}
}

/* End of file M_finance.php */
/* Location: ./application/models/M_finance.php */
