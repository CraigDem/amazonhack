<?php
class Upload_model extends CI_Model {
	function move_to_s3($file_name, $bucket, $file_identifier)
	{
		$this->load->library("s3");
		
		$file = $this->s3->inputFile(UPLOAD_TEMP . $file_name);

		$success = $this->s3->putObject($file, $bucket, "$file_identifier/$file_name");

		// Delete the temp file
		unlink(UPLOAD_TEMP . $file_name);
		
		return $success;
	}
	
	function get_nearest_bucket()
	{
		// TODO: Implement multiple buckets and selecting the nearest
		return "sendr-dev";
	}
	
	function store_upload($file_identifier, $user, $name, $type, $bucket, $size, $parent='')
	{
		$data = array(
			'file_identifier'	=> $file_identifier,
			'user'				=> $user,
			'name'				=> $name,
			'type'				=> strtolower($type),
			'bucket'			=> $bucket,
			'size'				=> $size,
			'url'				=> $this->generate_next_url(),
			'parent'			=> $parent
		);
		
		$this->db->insert('files', $data);
		
		return $data['url'];
	}
	
	function generate_next_url()
	{
        $slug_length = 7;

		// Generate random URL slugs, loop until one is free
        $slug = '';
        do
        {
            $slug = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $slug_length);

            $this->db->where('url', $slug);
            $database_response = $this->db->get('files');
        }
        while ($database_response->num_rows() != 0);

        return $slug;
    }
}
