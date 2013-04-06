<?php
class Testing extends CI_Controller {
	function index()
	{
		$this->load->library("s3");
		$this->load->model("retrieval_model");
		
		$this->retrieval_model->get_file("kdyek");
	}
}