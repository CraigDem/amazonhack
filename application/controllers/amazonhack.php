<?php 

	class Amazonhack extends CI_Controller 
	{

		function __construct() 
		{			
			parent::__construct();
		}

		// Main Page
		
		function index()
		{				
			$this->load->view('assets/header');
			$this->load->view('main');
			$this->load->view('assets/footer');
		}
		
		function video()
		{				
			$file_url = 'placeholder';
			$this->load->view('assets/header');
			$this->load->view('assets/nav');
			$this->load->view('video');
			$this->load->view('assets/footer');
		}
		function audio()
		{		
			$file_url = 'placeholder';		
			$this->load->view('assets/header');
			$this->load->view('assets/nav');
			$this->load->view('audio');
			$this->load->view('assets/footer');
		}
		function text()
		{		
			$file_url = 'placeholder';		
			$this->load->view('assets/header');
			$this->load->view('assets/nav');
			$this->load->view('text');
			$this->load->view('assets/footer');
		}
		function image()
		{	
			$file_url = 'placeholder';			
			$this->load->view('assets/header');
			$this->load->view('assets/nav');
			$this->load->view('image');
			$this->load->view('assets/footer');
		}
		function download()
		{
			$file_url = 'placeholder';
			$this->load->view('assets/header');
			$this->load->view('assets/nav');
			$this->load->view('download');
			$this->load->view('assets/footer');
			
		}
		
	}
	
/* End of file Namepending.php */
/* Location: ../application/controllers */