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

    // Jika current user memiliki role 1 maka tampilkan halaman ini
    if ($this->auth_model->current_user()->role == 1) {
      $data['title'] = 'Administrator';
      $data['users'] = $this->user_model->get();
      $this->load->view('admin/users/list_users', $data);
    } else {
      // Jika current user memiliki role selain 1 maka tampilkan halaman ini
      redirect('admin/dashboard');
    }
  }

  // Simpan data user
  public function register()
  {

    $this->load->model('user_model');
    $this->load->library('form_validation');

    // Buat validasi untuk Nama, Email, Password
    $this->form_validation->set_rules('name', 'Name', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
      'is_unique' => 'This email has already registered!'
    ]);
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
      'matches' => 'Password dont match!',
      'min_length' => 'Password too short!'
    ]);
    $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

    // Get Last ID
    // $last_id = $this->auth_model->get_last_id();

    // Get the INT part within the string
    // $id = preg_replace('/[^0-9]/', '', $last_id);

    // Random id number string alphanumeric
    $id = substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(10 / strlen($x)))), 1, 10);

    $data = [
      'id' => $id,
      'name' => $this->input->post('name'),
      'email' => $this->input->post('email'),
      'username' => $this->input->post('username'),
      'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
      'role' => $this->input->post('role'),
      'avatar' => '',
      'created_at' => time(),
      'password_updated_at ' => time()
    ];

    // Panggil function insert_data pada model
    $this->user_model->insert_data($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data telah ditambahkan</div>');
    redirect('admin/user/');
  }

  // Halaman edit user
  public function edit($id)
  {
    $data['title'] = 'Administrator';
    $data['user'] = $this->user_model->get_by_id($id);
    $this->load->view('admin/users/edit_user', $data);
  }

  // Ubah data user
  public function update($id)
  {
    $this->load->model('user_model');

    $data = [
      'name' => $this->input->post('name'),
      'email' => $this->input->post('email'),
      'username' => $this->input->post('username'),
      'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
      'avatar' => '',
      'role' => $this->input->post('role'),
      'created_at' => time(),
      'password_updated_at ' => time()
    ];

    // Panggil function insert_data pada model
    $this->user_model->update_data($id, $data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data telah diubah</div>');
    redirect('admin/user/');
  }

  // Hapus data user
  public function delete($id)
  {
    $this->user_model->delete($id);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data telah dihapus!</div>');
    redirect('admin/user/');
  }

}

?>