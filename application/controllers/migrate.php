<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migrate extends CI_Controller {

	public function index()
	{
		$this->load->library('migration');

		$result = $this->migration->current();

		if( ! $result)
		{
			exit($this->migration->error_string() . PHP_EOL);
		}
		else if (is_numeric($result))
		{
			exit('Schema migrated to version ' . $result . PHP_EOL);
		}
		else
		{
			exit('Schema is already up to date' . PHP_EOL);
		}

	}
}

/* End of file migrate.php */
/* Location: ./application/controllers/migrate.php */