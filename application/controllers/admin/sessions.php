<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sessions extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('session_model', 'model');
	}

	public function new_session()
	{
		$session = $this->model->build();

		$this->load->view('admin/sessions/new', array('session' => $session));
	}

	public function create_session()
	{
		$params = $this->input->post('session');
		$session = $this->model->build($params);

		if ($session->is_valid())
		{
			$this->session->set_userdata('user_id', $session->id);
			redirect('/admin/home');
		}
		else
		{
			$this->session->set_flashdata('error', 'Your login attempt was unsuccessful.');
			$this->load->view('admin/sessions/new');
		}
	}

	public function destroy_session()
	{
		$this->session->unset_userdata('user_id');
		$this->session->set_flashdata('info', 'You have successfully logged out.');
		redirect('/');
	}

}

/* End of file sessions.php */
/* Location: ./application/controllers/admin/sessions.php */