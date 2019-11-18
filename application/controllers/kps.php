<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kps extends CI_Controller {

	public function __construct() {
	    parent::__construct();
	    date_default_timezone_set('Asia/Makassar');
	    if($this->session->userdata('status') != "login"){
	        redirect('auth');
	    }
	}

	public function index() {
		redirect(base_url('kps/daftarJudul'));
	}

	public function daftarJudul(){
		$data = array(  'title'             => 'KPS Dashboard',
		                'isi'               => 'admin/dashboard/kps/daftar_judul',
		            	// 'dataScript'        => 'admin/dataScript/beranda-script'
		            );
		$this->load->view('admin/_layout/wrapper', $data);
	}

	public function seminarHasil(){
		$data = array(  'title'             => 'KPS Dashboard',
		                'isi'               => 'admin/dashboard/kps/seminar_hasil',
		            	// 'dataScript'        => 'admin/dataScript/beranda-script'
		            );
		$this->load->view('admin/_layout/wrapper', $data);
	}

	public function ujianSkripsi(){
		$data = array(  'title'             => 'KPS Dashboard',
		                'isi'               => 'admin/dashboard/kps/ujian_skripsi',
		            	// 'dataScript'        => 'admin/dataScript/beranda-script'
		            );
		$this->load->view('admin/_layout/wrapper', $data);
	}

	public function persetujuanJadwalHasil(){
		$data = array(  'title'             => 'KPS Dashboard',
		                'isi'               => 'admin/dashboard/kps/persetujuan_jadwal',
		            	// 'dataScript'        => 'admin/dataScript/beranda-script'
		            );
		$this->load->view('admin/_layout/wrapper', $data);
	}

	public function persetujuanJadwalTutup(){
		$data = array(  'title'             => 'KPS Dashboard',
		                'isi'               => 'admin/dashboard/kps/persetujuan_jadwal',
		            	// 'dataScript'        => 'admin/dataScript/beranda-script'
		            );
		$this->load->view('admin/_layout/wrapper', $data);
	}

	public function komunikasiJadwalHasil(){
		$data = array(  'title'             => 'KPS Dashboard',
		                'isi'               => 'admin/dashboard/kps/komunikasi_jadwal_hasil',
		            	// 'dataScript'        => 'admin/dataScript/beranda-script'
		            );
		$this->load->view('admin/_layout/wrapper', $data);
	}


	public function komunikasiJadwalTutup(){
		$data = array(  'title'             => 'KPS Dashboard',
		                'isi'               => 'admin/dashboard/kps/komunikasi_jadwal_tutup',
		            	// 'dataScript'        => 'admin/dataScript/beranda-script'
		            );
		$this->load->view('admin/_layout/wrapper', $data);
	}

	public function daftarMahasiswa(){
		$data = array(  'title'             => 'KPS Dashboard',
		                'isi'               => 'admin/dashboard/kps/daftar_mahasiswa',
		            	// 'dataScript'        => 'admin/dataScript/beranda-script'
		            );
		$this->load->view('admin/_layout/wrapper', $data);
	}

	public function daftarDosen(){
		$data = array(  'title'             => 'KPS Dashboard',
		                'isi'               => 'admin/dashboard/kps/daftar_dosen',
		            	// 'dataScript'        => 'admin/dataScript/beranda-script'
		            );
		$this->load->view('admin/_layout/wrapper', $data);
	}
}
