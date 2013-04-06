<?php
class Testing extends CI_Controller {
	function index()
	{
		$this->load->library("s3");
		
		$file = $this->s3->inputFile('./temp/poster.jpg');
		$this->s3->putObject($file, "amznhack-ireland", "kim.jpg");
		
		$data = $this->s3->getBucket("amznhack-ireland");
		
		print_r($data);
	}
}