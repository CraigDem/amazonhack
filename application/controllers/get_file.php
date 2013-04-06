<?php
class Get_file extends CI_Controller {
	function index($token)
	{
		// This function loads the basic view with a loader
		$this->load->view("assets/header");
		$this->load->view("assets/nav");
		$this->load->view("file_display_container_top", array("token" => $token));
		$this->load->view("file_loading");
		$this->load->view("file_display_container_bottom");
		$this->load->view("assets/footer");
	}
	
	function get_viewer($token)
	{
		// This retrieves the file and eventually presents a view!
		$this->load->library("s3");
		$this->load->model("retrieval_model");
		
		$data = $this->retrieval_model->get_file($token);
		
		$url_to_file = base_url("download/{$data['file_identifier']}/{$data['name']}");
		
		echo "<pre>";
		print_r($data);
		echo "</pre>";
		
		echo $url_to_file;
	}
}