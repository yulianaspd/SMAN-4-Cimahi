<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Historysejarah_dua extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->is_logged_in();

		// Load Model
		$this->load->model("m_history");
		$this->load->model("m_pengaturan");

		// Setting
		$tampilnama = $this->m_pengaturan->tampilnama();
		$this->load->vars('tnma', $tampilnama);

		$tampilgambar = $this->m_pengaturan->tampilgambar();
		$this->load->vars('tgam', $tampilgambar);
	}
	
	function index(){		
		// List Siswa 
		$historysejarah = $this->m_history->historysejarah_dua();
		$this->load->vars('hia', $historysejarah);

		// View Administrator
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/history/historysejarah_dua");
		$this->load->view("admin/footer");
	}

	// Start Hapus
	function hapus_historysejarah_dua($jam){
		$this->m_history->hapus_historysejarah_dua($jam);
		redirect('historysejarah_dua');
	}
	// End Hapus
	
	// Session
	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in !== TRUE){
			redirect('loginadmin/');
		}
	}
	
}