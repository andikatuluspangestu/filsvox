<?php

class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_model');
    $this->load->model('auth_model');
    if (!$this->auth_model->current_user()) {
      redirect('auth/login');
    }
  }

  public function index()
  {
    $data['title'] = 'Administrator';
    $data['users'] = $this->user_model->get();
    $this->load->view('admin/users/list_users', $data);
  }

  // Hapus data user
  public function delete($id)
  {
    $this->user_model->delete($id);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User has been deleted!</div>');
    redirect('admin/users/list_users');
  }

}

?>