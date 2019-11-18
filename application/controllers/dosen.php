<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function __construct() {
	    parent::__construct();
	    date_default_timezone_set('Asia/Makassar');
	    if($this->session->userdata('status') != "login"){
	        redirect('auth');
	    }
	}

	public function index() {
		redirect(base_url('dosen/pembimbing'));
	}

	public function pembimbing(){
		$data = array(  'title'             => 'Mahasiswa Dashboard',
		                'isi'               => 'admin/dashboard/dosen/dosen_pembimbing',
		            	// 'dataScript'        => 'admin/dataScript/beranda-script'
		            );
		$this->load->view('admin/_layout/wrapper', $data);
	}

	public function penguji(){
		$data = array(  'title'             => 'Mahasiswa Dashboard',
		                'isi'               => 'admin/dashboard/dosen/dosen_penguji',
		            	// 'dataScript'        => 'admin/dataScript/beranda-script'
		            );
		$this->load->view('admin/_layout/wrapper', $data);
	}

	public function PenugasanIn(){
		$data = array(  'title'             => 'Mahasiswa Dashboard',
		                'isi'               => 'admin/dashboard/dosen/penugasan_in',
		            	// 'dataScript'        => 'admin/dataScript/beranda-script'
		            );
		$this->load->view('admin/_layout/wrapper', $data);
	}

	public function penugasanOut(){
		$data = array(  'title'             => 'Mahasiswa Dashboard',
		                'isi'               => 'admin/dashboard/dosen/penugasan_out',
		            	// 'dataScript'        => 'admin/dataScript/beranda-script'
		            );
		$this->load->view('admin/_layout/wrapper', $data);
	}
	
}
