<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Production extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_pegawai');
		$this->load->model('M_posisi');
		$this->load->model('M_kota');
		$this->load->model('M_production');
	}

	public function index() {
		$data['userdata'] = $this->userdata;
		$data['dataProduction'] = $this->M_production->select_all();
		// $data['dataPosisi'] = $this->M_posisi->select_all();
		// $data['dataKota'] = $this->M_kota->select_all();

		$data['page'] = "production";
		$data['judul'] = "Data Produk";
		$data['deskripsi'] = "Manage Data Produk";

		$data['modal_tambah_produk'] = show_my_modal('modals/modal_tambah_produk', 'tambah-produk', $data);

		$this->template->views('production/home', $data);
	}

	public function tampil() {
		$data['dataProduction'] = $this->M_production->select_all();
		$this->load->view('production/list_data', $data);
	}

	public function prosesTambah() {
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'trim|required');
		$this->form_validation->set_rules('deskripsi_produk', 'Deskripsi Produk', 'trim|required');
		$this->form_validation->set_rules('stok', 'Stok Awal', 'trim|required');
		// $this->form_validation->set_rules('posisi', 'Posisi', 'trim|required');

		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_production->insert($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Production Berhasil ditambahkan', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Data Production Gagal ditambahkan', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
	}

	public function update() {
		$id = trim($_POST['id']);

		// $data['dataPegawai'] = $this->M_production->select_by_id($id);
		// $data['dataPosisi'] = $this->M_production->select_all();
		// $data['dataKota'] = $this->M_production->select_all();
		$data['dataProduction'] = $this->M_production->select_by_id($id);
		$data['userdata'] = $this->userdata;

		echo show_my_modal('modals/modal_update_produk', 'update-produk', $data);
	}

	public function prosesUpdate() {
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'trim|required');
		$this->form_validation->set_rules('deskripsi_produk', 'Deskripsi Produk', 'trim|required');
		$this->form_validation->set_rules('stok', 'Stok', 'trim|required');


		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_production->update($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Production Berhasil diupdate', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Production Gagal diupdate', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
	}

	public function delete() {
		$id = $_POST['id'];
		$result = $this->M_production->delete($id);

		if ($result > 0) {
			echo show_succ_msg('Data Production Berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Data Production Gagal dihapus', '20px');
		}
	}

	public function export() {
		error_reporting(E_ALL);
		$spreadsheet = new Spreadsheet(); // instantiate Spreadsheet
		$sheet = $spreadsheet->getActiveSheet();

		$sheet->SetCellValue('A1', "ID");
		$sheet->SetCellValue('B1', "Date");
		$sheet->SetCellValue('C1', "Nama Produk");
		$sheet->SetCellValue('D1', "Deskripsi Produk");
		$sheet->SetCellValue('E1', "Stok");
		// $sheet->SetCellValue('F1', "Saldo");

		$data = $this->M_production->select_all();
		$rowCount = 2;
		foreach($data as $value){
				$sheet->SetCellValue('A'.$rowCount, $value->id);
				$sheet->SetCellValue('B'.$rowCount, $value->date_insert);
				$sheet->SetCellValue('C'.$rowCount, $value->nama_produk);
				$sheet->SetCellValue('D'.$rowCount, $value->deskripsi_produk);
				$sheet->SetCellValue('E'.$rowCount, $value->stok);
				// $sheet->SetCellValue('F'.$rowCount, $value->saldo);
				$rowCount++;
		}

		$writer = new Xlsx($spreadsheet); // instantiate Xlsx
		$filename = 'list-of-production'; // set filename for excel file to be exported
		header('Content-Type: application/vnd.ms-excel'); // generate excel file
		header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"');
		header('Cache-Control: max-age=0');
		$writer->save('php://output');	// download file

	}


}

/* End of file Production.php */
/* Location: ./application/controllers/Production.php */
