<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_pegawai');
		$this->load->model('M_posisi');
		$this->load->model('M_kota');
		$this->load->model('M_admin');
	}


	public function index() {



		$data['jml_pegawai'] 	= $this->M_pegawai->total_rows();
		$data['jml_posisi'] 	= $this->M_posisi->total_rows();
		$data['jml_kota'] 		= $this->M_kota->total_rows();
		$data['jml_user']	= $this->M_admin->total_rows();
		$data['userdata'] 		= $this->userdata;

		// if($data['userdata']->username !== 'admin') {
		// 	echo 'Anda tidak berhak mengakses halaman ini';
		// 	// return;
		// }

		$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');

		$posisi 				= $this->M_posisi->select_all();
		$index = 0;
		foreach ($posisi as $value) {
		    $color = '#' .$rand[rand(0,15)] .$rand[rand(0,15)] .$rand[rand(0,15)] .$rand[rand(0,15)] .$rand[rand(0,15)] .$rand[rand(0,15)];

			$pegawai_by_posisi = $this->M_pegawai->select_by_posisi($value->id);

			$data_posisi[$index]['value'] = $pegawai_by_posisi->jml;
			$data_posisi[$index]['color'] = $color;
			$data_posisi[$index]['highlight'] = $color;
			$data_posisi[$index]['label'] = $value->nama;

			$index++;
		}

		$kota 				= $this->M_kota->select_all();
		$index = 0;
		foreach ($kota as $value) {
		    $color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];

			$pegawai_by_kota = $this->M_pegawai->select_by_kota($value->id);

			$data_kota[$index]['value'] = $pegawai_by_kota->jml;
			$data_kota[$index]['color'] = $color;
			$data_kota[$index]['highlight'] = $color;
			$data_kota[$index]['label'] = $value->nama;

			$index++;
		}

		$data['data_posisi'] = json_encode($data_posisi);
		$data['data_kota'] = json_encode($data_kota);

		$data['page'] 			= "home";
		$data['judul'] 			= "Beranda";
		$data['deskripsi'] 		= "Manage Data";
		$this->template->views('home', $data);
	}

	public function list_user() {
		$data['userdata'] 		= $this->userdata;
		$data['page'] 			= "data_user";
		$data['judul'] 			= "Data User";
		$data['deskripsi'] 		= "Manage Data User";
		$data['listuser'] = $this->M_admin->selectAll();
		$this->template->views('listuser', $data);
	}

	public function detailuser() {
		$data['userdata'] 		= $this->userdata;
		$iduser = $this->input->get('id');
		$data['page'] 			= "detail_data_user";
		$data['judul'] 			= "Detail Data User";
		$data['deskripsi'] 		= "Manage Detail Data User";
		$data['detailData'] = $this->M_admin->select2($iduser);
		$this->template->views('listuser_detail', $data);
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
