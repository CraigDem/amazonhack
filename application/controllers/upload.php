<?php
class Upload extends CI_Controller {
	function index()
	{
		// This code will do the upload
		$config['upload_path'] = UPLOAD_TEMP;
		$config['allowed_types'] = '*';
		
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload())
		{
			$data = array('error' => $this->upload->display_errors());
			
			print_r($data);
			
			// TODO: Load a view to handle errors
		}
		else
		{
			
			$data = $this->upload->data();
			
			$this->load->model('upload_model');
			
			//$file_identifier, $user, $name, $type, $bucket, $size, $url, $parent='
			
			// Calculate the file identifier
			$file_identifier = hash_file('sha256', UPLOAD_TEMP . $data['file_name']);
			$file_identifier .= hash_file('md5', UPLOAD_TEMP . $data['file_name']);
			
			$bucket = $this->upload_model->get_nearest_bucket();
			
			$this->upload_model->move_to_s3($data['file_name'], $bucket, $file_identifier);
			
			$result = $this->upload_model->store_upload(
					$file_identifier,
					'anonymous',
					$data['file_name'],
					$data['file_ext'],
					'sendr-dev',
					$data['file_size']
			);
			
			echo $result;
		}
	}
}
