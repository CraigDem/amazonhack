<?php
class Get_file extends CI_Controller {
	function index($token)
	{
        $this->load->model("retrieval_model");

        $data = $this->retrieval_model->get_file($token);

		$this->load->view("assets/header");
		$this->load->view("assets/nav");
		$this->load->view("file_display_container_top", array("token" => $token));

        $this->load->view($data['view'], array('file_url' => $data['s3_url'], 'file_size' => $data['size'], 'title' => $data['name']));

		$this->load->view("file_display_container_bottom");
		$this->load->view("assets/footer");
	}
}