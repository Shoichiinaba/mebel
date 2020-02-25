<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl_app extends CI_Controller {
	private $template_header = 'template/header';
	private $template_footer = 'template/footer';
	function index(){
		$this->load->view('login');
	}
	public function home()
	{
		$this->load->view($this->template_header);
		$this->load->view('home');
		$this->load->view($this->template_footer);
	}
	function tambah(){
		$this->load->view($this->template_header);
		$this->load->view('form');
		$this->load->view($this->template_footer);
	}
	function daftar(){
		$sql = $this->db->query("select * from produksi");
		$data['data'] = $sql->result_array();
		$this->load->view($this->template_header);
		$this->load->view('daftar', $data);
		$this->load->view($this->template_footer);
	}
	function editable(){
		$id = $_GET['id'];
		$sql = $this->db->query("select * from produksi where id='$id'");
		if($sql->num_rows() == 1){
			$data['data'] = $sql->result_array();
		}
		$this->load->view($this->template_header);
		$this->load->view('form', $data);
		$this->load->view($this->template_footer);
	}
	function cetak(){
		$this->load->library('godompdf');
		$sql = $this->db->query("select * from produksi");
		$data['data'] = $sql->result_array();
		$html = $this->load->view('cetak/print', $data, true);
    	$this->godompdf->generate($html, 'Laporan Produksi');
	}
	function log_out(){
		$this->session->sess_destroy();
		redirect('Ctrl_app/index');
	}
}
