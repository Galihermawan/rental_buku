<?php
class lingkaran extends CI_Controller{
	public function index(){
		$this->load->model('lingkaran_model');
		$model=$this->lingkaran_model;
		$model->set_jarijari(3);
		$this->load->view('lingkaranview',array('model'=>$model));
	}
}