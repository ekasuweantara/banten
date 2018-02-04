<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$data = array (
			'nama' => 'Devi Lingga Pratiwi',
			'alamat' => 'jimabaran',
			'kampus' => 'unud'

		);
		$this->load->view('welcome_message',$data);

	}

	public function cetak($satu = 'devi',$dua = 'eka')
	{
	//	$this->load->view('welcome_message');
		echo 'parameter pertama '.$satu.'<br />';
		echo 'parameter dua '.$dua.'<br />';

	}
}
