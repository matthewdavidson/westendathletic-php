<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sessions extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('session_model');
	}

	public function new_session()
	{
		$session = new $this->session_model();

		$this->load->view('admin/sessions/new', array('session' => $session));
	}

	public function create_session()
	{
		$session = new $this->session_model($this->input->post());

		if ($session->is_valid())
		{
			$this->session->set_userdata('user_id', $session->user->id);
			redirect('/');
		}
		else
		{
			$data = array(
				'alerts' => array('error' => 'Your login attempt was unsuccessful.'),
				'session' => $session
			);

			$this->load->view('admin/sessions/new', $data);
		}
	}

	public function destroy_session()
	{
		$this->session->unset_userdata('user_id');

		$data = array(
			'alerts' => array('info' => 'You have successfully logged out.')
		);
		$this->load->view('home', $data);
	}

}

/* End of file sessions.php */
/* Location: ./application/controllers/admin/sessions.php */