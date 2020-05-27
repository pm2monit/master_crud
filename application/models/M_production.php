<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_production extends CI_Model {
	public function select_all_production() {
		$sql = "SELECT * FROM production";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_all() {
		$sql = " SELECT * FROM production";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM production WHERE id = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function select_by_posisi($id) {
		$sql = "SELECT COUNT(*) AS jml FROM production";

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
		$sql = "UPDATE production SET nama_produk='" .$data['nama_produk'] ."', deskripsi_produk='" .$data['deskripsi_produk'] ."', stok='" .$data['stok'] ."', date_update='" .$data['date_update'] ."' WHERE id='" .$data['id'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM production WHERE id='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert($data) {
		// $id = md5(DATE('ymdhms').rand());
		$sql = "INSERT INTO production (`id`, `nama_produk`, `deskripsi_produk`, `stok`, `date_update`, `date_insert`) VALUES(NULL, '" .$data['nama_produk'] ."','" .$data['deskripsi_produk'] ."','" .$data['stok'] ."','" .$data['date_insert'] ."','" .$data['date_update'] ."')";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert_batch($data) {
		$this->db->insert_batch('production', $data);

		return $this->db->affected_rows();
	}

	public function check_nama($nama) {
		$this->db->where('nama_produk', $nama);
		$data = $this->db->get('production');

		return $data->num_rows();
	}

	public function total_rows() {
		$data = $this->db->get('pegawai');

		return $data->num_rows();
	}
}

/* End of file M_production.php */
/* Location: ./application/models/M_production.php */
