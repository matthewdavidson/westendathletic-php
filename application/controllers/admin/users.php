<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	var $users;

	public function __construct()
	{
		parent::__construct();

		authentication_required();

		$this->user_model = new User();
	}

	public function index()
	{
		$data = array(
			'users' => $this->user_model->get()
		);

		$this->load->view('admin/users/index', $data);
	}

  public function new_user()
  {
  	$data = array(
			'user' => $this->user_model
		);

		$this->load->view('admin/users/new_user', $data);
  }

  public function edit($id)
  {
  	$this->user_model->get_by_id($id);

  	if ( ! $this->user_model->exists())
  	{
  		show_404();
  	}

  	$data = array(
			'user' => $this->user_model
		);

		$this->load->view('admin/users/edit', $data);
  }

  public function create()
  {
    if ( ! $this->input->post())
    {
      show_404();
    }

    $this->user_model->username = $this->input->post('username');
    $this->user_model->email = $this->input->post('email');
    $this->user_model->password_hash = $this->input->post('password_hash');
    $this->user_model->confirm_password_hash = $this->input->post('confirm_password_hash');

  	if ($this->user_model->save()) 
  	{
  		$this->session->set_flashdata('alerts', array('success' => 'User was successfully created.'));
  		redirect('/admin/users');
  	}
  	else
  	{
  		$data = array(
  			'user' => $this->user_model,
				'alerts' => array('error' => 'User creation was unsuccessful.')
			);

			$this->load->view('admin/users/new_user', $data);
  	}
  }

  public function update($id)
  {
    if ( ! $this->input->post())
    {
    	show_404();
    }

    $this->user_model->get_by_id($id);

    if ( ! $this->user_model->exists())
    {
    	show_404();
    }

    $this->user_model->username = $this->input->post('username');
    $this->user_model->email = $this->input->post('email');
    $this->user_model->password_hash = $this->input->post('password_hash');
    $this->user_model->confirm_password_hash = $this->input->post('confirm_password_hash');

    if ($this->user_model->save()) 
    {
    	$this->session->set_flashdata('alerts', array('success' => 'User was successfully updated.'));
    	redirect('/admin/users');
    }
    else
    {
    	$data = array(
    		'user' => $this->user_model,
    		'alerts' => array('error' => 'User edit was unsuccessful.')
    	);

    	$this->load->view('admin/users/edit', $data);
    }
  }

  public function destroy($id)
  {
    $this->user_model->get_by_id($id);

    if ( ! $this->user_model->exists())
  	{
  		show_404();
  	}

    $this->user_model->delete();

    $this->session->set_flashdata('alerts', array('warn' => 'User was successfully deleted.'));
  	redirect('/admin/users');
  }

}

/* End of file users.php */
/* Location: ./application/controllers/admin/users.php */