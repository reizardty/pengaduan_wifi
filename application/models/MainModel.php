<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MainModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	// fungsi query ambil data statistik buruk 
	public function get_statistik_buruk(){
		$sql = "SELECT COUNT(nilai) as banyak FROM penilaian WHERE nilai = 1";
		$res = $this->db->query($sql);
		return $res->result_array();
	}

	// fungsi query ambil data statistik cukup 
	public function get_statistik_cukup(){
		$sql = "SELECT COUNT(nilai) as banyak FROM penilaian WHERE nilai = 2";
		$res = $this->db->query($sql);
		return $res->result_array();
	}
	// fungsi query ambil data statistik baik
	public function get_statistik_baik(){
		$sql = "SELECT COUNT(nilai) as banyak FROM penilaian WHERE nilai = 3";
		$res = $this->db->query($sql);
		return $res->result_array();
	}

	// fungsi query ambil data statistik sangat baik
	public function get_statistik_sangatbaik(){
		$sql = "SELECT COUNT(nilai) as banyak FROM penilaian WHERE nilai = 4";
		$res = $this->db->query($sql);
		return $res->result_array();
	}
}
