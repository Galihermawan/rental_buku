<?php
class lingkaran_model extends CI_model{
	const PI=3.14;
	private $jarijari;
	public function set_jarijari($r){
		$this->jarijari=$r;

	}

	public function get_jarijari(){
		return $this->jarijari;
	}

	public function hitung_luas(){
		return self:: PI*$this->jarijari*$this->jarijari;
	}

	public function hitung_keliling(){
		return 2*self::PI*$this->jarijari;
	}
}