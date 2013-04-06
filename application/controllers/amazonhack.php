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
	}
	
/* End of file Namepending.php */
/* Location: ../application/controllers */