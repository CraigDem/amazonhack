<?php
class Retrieval_model extends CI_Model {
	function get_file($url_slug)
	{
        $this->load->library("s3");

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


		// We need to solve what viewer we want to open the file with!
		$view = "download"; // Fall back to this if nothing better exists

		$sql = "SELECT `view` FROM `file_types` WHERE `extension`=?";

		$database_result = $this->db->query($sql, array($file->type));

		if ($database_result->num_rows() != 0)
		{
			$row = $database_result->row();
			$view = $row->view;
		}

        $s3_url = $this->s3->getAuthenticatedURL($file->bucket, "{$file->file_identifier}/{$file->name}", S3_URL_LIFETIME);

		// Build final array of data
		$data = array(
			's3_url'	        => $s3_url,
			'name'				=> $file->name,
			'size'				=> $file->size,
			'view'				=> $view
		);

		return $data;
	}
}