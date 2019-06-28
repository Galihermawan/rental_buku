<?php
class Hello2 extends CI_Controller{
	public function index(){
	$this->load->model('Hello_model');
	$model=$this->Hello_model;
	echo"<html>
	<head><title>Controller dan Model</title></head>
	<body>";
    
    echo"<h2>".$model->str."</h2>";
    echo"</body>";
    echo"</html>";

	}
}