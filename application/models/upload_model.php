<?php
class Upload_model extends CI_Model {
	function move_to_s3($file_name, $bucket, $file_identifier)
	{
		$this->load->library("s3");
		
		$file = $this->s3->inputFile("./temp/$file_name");
		$success = $this->s3->putObject($file, $bucket, $file_identifier);
		
		// Delete the temp file
		unlink("./temp/$file_name");
		
		return $success;
	}
	
	function get_nearest_bucket()
	{
		// TODO: Implement multiple buckets and selecting the nearest
		return "amznhack-ireland";
	}
	
	function store_upload($file_identifier, $user, $name, $type, $bucket, $size, $parent='')
	{
		$data = array(
			'file_identifier'	=> $file_identifier,
			'user'				=> $user,
			'name'				=> $name,
			'type'				=> $type,
			'bucket'			=> $bucket,
			'size'				=> $size,
			'url'				=> $this->generate_next_url(),
			'parent'			=> $parent
		);
		
		$this->db->insert('files', $data);
	}
	
	function generate_next_url()
	{
		$this->db->select('url');
		$this->db->from('files');
		$this->db->order_by('id', 'desc');
		
		$data = $this->db->get();
		
		$url = "kdyek";
		if ($data->num_rows() != 0)
		{
			$url = $data->row();
			$url = $url->url;
			$url++; // Increment to get next url
		}
		
		return $url;
	}
}