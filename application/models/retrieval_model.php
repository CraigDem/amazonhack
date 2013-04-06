<?php
class Retrieval_model extends CI_Model {
	function get_file($url_slug)
	{
		$sql = "
			SELECT
				`file_identifier`, `bucket`, `size`, `name`, `type`
			FROM
				`files`
			WHERE
				`url` = ?;
		";
		
		$database_result = $this->db->query($sql, array($url_slug));
		
		if ($database_result->num_rows() == 0)
		{
			return false;
		}
		
		$file = $database_result->row();
		
		$this->load->library("s3");
		
		// Make a directory to hold the file
		if (!file_exists("./download/" . $file->file_identifier))
		{
			mkdir("./download/" . $file->file_identifier);

			$this->s3->getObject($file->bucket, $file->file_identifier, "./download/" . $file->file_identifier . "/" . $file->name);
		}
			
		// We need to solve what viewer we want to open the file with!
		$view = "download"; // Fall back to this if nothing better exists
		
		$sql = "SELECT `view` FROM `editors` WHERE `name` IN (
			SELECT `editor` FROM `file_types` WHERE `extension`=?
		)";
		
		$database_result = $this->db->query($sql, array($file->type));
		
		if ($database_result->num_rows() != 0)
		{
			$row = $database_result->row();
			$view = $row->view;
		}
		
		// Build final array of data
		$data = array(
			'file_identifier'	=> $file->file_identifier,
			'name'				=> $file->name,
			'size'				=> $file->size,
			'view'				=> $view
		);
		
		return $data;
	}
}