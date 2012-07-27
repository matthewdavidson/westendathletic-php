<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		authentication_required();
	}

	public function index()
	{
		$this->load->view('admin/dashboard');
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/admin/dashboard.php */