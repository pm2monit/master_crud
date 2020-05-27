<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {
	public function update($data, $id) {
		$this->db->where("id", $id);
		$this->db->update("admin", $data);

		return $this->db->affected_rows();
	}

	public function select($id = '') {
		if ($id != '') {
			$this->db->where('id', $id);
		}

		$data = $this->db->get('admin');

		return $data->row();
	}

	public function select2($id = '') {
		if ($id != '') {
			$this->db->where('id', $id);
		}

		$data = $this->db->get('admin');

		return $data->result();
	}

	public function selectAll() {
		$this->db->select("*");
		$this->db->from("admin");
		$data = $this->db->get();
		return $data->result();
	}

	public function total_rows() {
		$data = $this->db->get('admin');

		return $data->num_rows();
	}
}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */
