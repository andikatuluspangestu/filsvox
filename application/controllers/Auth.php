<?php

class Auth extends CI_Controller
{
  public function index()
  {
    show_404();
  }

  // Buat function untuk halaman register
  public function signup()
  {
    $this->load->view('auth/register');
  }

  // Buat function untuk Register
  public function register()
  {

    $this->load->model('auth_model');
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

    // Create random id number string alphanumeric
    $id = substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(10 / strlen($x)))), 1, 10);

    // Jika validasi salah
    if ($this->form_validation->run() == false) {
      $data['title'] = 'User Registration';
      $this->load->view('auth/register', $data);
    } else {
      // Jika validasi benar
      $data = [
        'id' => $id,
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'username' => $this->input->post('username'),
        'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        'avatar' => 'default.jpg',
        'created_at' => time(),
        'password_updated_at ' => time()
      ];

      // Panggil function insert_data pada MY_Model
      $this->auth_model->insert_data($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please Login</div>');
      redirect('auth/login');
    }
  }

  // Login
  public function login()
  {
    $this->load->model('auth_model');
    $this->load->library('form_validation');

    $rules = $this->auth_model->rules();
    $this->form_validation->set_rules($rules);

    if ($this->form_validation->run() == FALSE) {
      return $this->load->view('auth/index');
    }

    $username = $this->input->post('username');
    $password = $this->input->post('password');

    if ($this->auth_model->login($username, $password)) {
      redirect('admin');
    } else {
      $this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan passwrod benar!');
    }

    $this->load->view('auth/index');
  }

  // Logout
  public function logout()
  {
    $this->load->model('auth_model');
    $this->auth_model->logout();
    redirect(site_url('/auth/login'));
  }
}
