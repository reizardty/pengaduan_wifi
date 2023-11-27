<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminControl extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata('sess_admin')) {
			redirect("AuthLogin");
		}

		$this->load->model('AdminModel');
		//  $this->load->library('form_validation', 'session');
	}

	// fungsi tampilan halaman index admin 
	public function index(){
		$session_data = $this->session->userdata('sess_admin');
		$datacontent['session'] = $session_data;
		$data['title'] = 'Welcome to Website PENJAWI';
		// $this->template->view('template/admin/main_content', 1, $datacontent);
		//$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('template/header', $datacontent, $data);
		$this->load->view('template/sidebar', $datacontent, $data);
		$this->load->view('template/topbar', $datacontent, $data);
		$this->load->view('template/admin/index', 1, $datacontent, $data);
		$this->load->view('template/footer');
	}

	// fungsi tampilan dashboard admin 
	public function dashboard(){
		$session_data = $this->session->userdata('sess_admin');
		$datacontent['session'] = $session_data;

		$this->load->view('template/header', $datacontent);
		$this->load->view('template/sidebar', $datacontent);
		$this->load->view('template/topbar', $datacontent);
		$this->load->view('template/admin/index', 1, $datacontent);
		$this->load->view('template/footer');
	}

	// fungsi konfirmasi keluhan admin 
	public function konfirmasi_keluhan(){
		$session_data = $this->session->userdata('sess_admin');
		$datacontent['session'] = $session_data;
		$this->load->view('template/header', $datacontent);
		$this->load->view('template/sidebar', $datacontent);
		$this->load->view('template/topbar', $datacontent);
		$this->load->view('template/admin/konfirmasi_keluhan', 1, $datacontent);
		$this->load->view('template/footer');
	}

	// fungsi konfirmasi pasang baru admin 
	public function konfirmasi_pasangbaru(){
		$session_data = $this->session->userdata('sess_admin');
		$datacontent['session'] = $session_data;
		$this->load->view('template/header', $datacontent);
		$this->load->view('template/sidebar', $datacontent);
		$this->load->view('template/topbar', $datacontent);
		$this->load->view('template/admin/laporan_pasangbaru', 1, $datacontent);
		$this->load->view('template/footer');
	}

	// fungsi konfirmasi konsultasi admin
	public function konfirmasi_konsultasi(){
		$session_data = $this->session->userdata('sess_admin');
		$datacontent['session'] = $session_data;
		$this->load->view('template/header', $datacontent);
		$this->load->view('template/sidebar', $datacontent);
		$this->load->view('template/topbar', $datacontent);
		$this->load->view('template/admin/konfirmasi_konsultasi', 1, $datacontent);
		$this->load->view('template/footer');
	}

	// fungsi pilih chat pelanggan admin
	public function pilih_chat_pelanggan(){
		$session_data = $this->session->userdata('sess_admin');
		$datacontent['session'] = $session_data;
		$this->load->view('template/header', $datacontent);
		$this->load->view('template/sidebar', $datacontent);
		$this->load->view('template/topbar', $datacontent);
		$this->load->view('template/admin/pilih_chat_pelanggan', 1, $datacontent);
		$this->load->view('template/footer', $datacontent);
	}

	// fungsi input pengumuman admin 
	public function input_pengumuman(){
		$session_data = $this->session->userdata('sess_admin');
		$datacontent['session'] = $session_data;
		$this->load->view('template/header', $datacontent);
		$this->load->view('template/sidebar', $datacontent);
		$this->load->view('template/topbar', $datacontent);
		$this->load->view('template/admin/input_pengumuman', 1, $datacontent);
		$this->load->view('template/footer', $datacontent);
	}

	// fungsi rekap konsultasi admin 
	public function rekap_konsultasi(){
		$session_data = $this->session->userdata('sess_admin');
		$datacontent['session'] = $session_data;
		$this->load->view('template/header', $datacontent);
		$this->load->view('template/sidebar', $datacontent);
		$this->load->view('template/topbar', $datacontent);
		$this->load->view('template/admin/rekap_konsultasi', 1, $datacontent);
		$this->load->view('template/footer');
	}

	// fungsi get data ajuan pasang baru 
	public function get_aju_pasangbaru(){
		$session_data = $this->session->userdata('sess_admin');
		$data['session'] = $session_data;
		$result = $this->AdminModel->get_aju_pasangbaru($data);
		echo json_encode($result);
	}

	// fungsi get data rekap keluhan 
	public function get_rekap_keluhan(){
		$session_data = $this->session->userdata('sess_admin');
		$data['session'] = $session_data;
		$result = $this->AdminModel->get_all_keluhan($data);
		echo json_encode($result);
	}

	// fungsi get data personal keluhan 
	public function get_personal_keluhan(){
		$id_keluhan = $this->input->GET('id_keluhan');
		$result = $this->AdminModel->get_personal_keluhan($id_keluhan);
		echo json_encode($result);
	}

	// fungsi get data balasan keluhan 
	public function get_balasan_keluhan(){
		$id_keluhan = $this->input->GET('id_keluhan');
		$result = $this->AdminModel->get_balasan_keluhan($id_keluhan);
		echo json_encode($result);
	}

	// fungsi get data nama chat 
	public function get_name_chat(){
		$session_data = $this->session->userdata('sess_admin');
		//$data['session'] = $session_data;
		$result = $this->AdminModel->get_chat_name();
		echo json_encode($result);
	}

	// fungsi kirim reply 
	public function kirim_reply(){
		$id_keluhan = $this->input->GET('id_keluhan');
		$isi_balasan = $this->input->GET('isi_balasan');
		$result = $this->AdminModel->update_balasan($id_keluhan, $isi_balasan);
		echo json_encode($result);
	}

	// fungsi konfirmasi pasang baru 
	public function konfirm_pasangbaru(){
		$data['no_kontrol'] = $this->input->post('no_kontrol');
		$data['status'] = $this->input->POST('status');
		//  echo "aku =" . $data['status'];
		$res = $this->AdminModel->update_konfirmasi($data);
		echo json_encode($res);
	}

	// fungsi submit pengumuman 
	public function submit_pengumuman(){
		$session_data = $this->session->userdata('sess_member');
		$data['no_kontrol'] = $session_data['no_kontrol'];
		$data['judul'] = $this->input->post('judul');
		$data['tgl_pengumuman'] = $this->input->post('tgl_pengumuman');
		$data['waktu_pengumuman'] = $this->input->post('waktu_pengumuman');
		$data['wilayah'] = $this->input->post('wilayah');
		$data['isi_pengumuman'] = $this->input->post('isi_pengumuman');
		$result = $this->AdminModel->tambah_pengumuman($data);
	}

	// fungsi chat pelanggan 
	public function chat_pelanggan(){
		$session_data = $this->session->userdata('sess_admin');
		$datacontent['session'] = $session_data;
		$data['userid'] = $this->input->GET('id');

		$data['name'] = $this->input->GET('name');
		$data['title'] = 'Form Pelayanan Kepuasan Layanan';
		$this->load->view('template/header', $datacontent, $data);
		$this->load->view('template/sidebar', $datacontent, $data);
		$this->load->view('template/topbar', $datacontent, $data);
		$this->load->view('template/chat/chat', $data);
		$this->load->view('template/footer');
	}
}
