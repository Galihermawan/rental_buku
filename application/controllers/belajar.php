<?php
class Belajar extends CI_Controller {
	function __contruct(){
		parent:: __contruct();

	}
	public function index (){
		echo "ini method index pada controller Belajar | cara membuat controller pada codeigniter";

	}
	public function halo(){
//memparsing data ke view
		$data['nama_web']="Codeigniter.com";
		$this->load->view('view_belajar',$data);

	}
}