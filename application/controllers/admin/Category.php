<?php

class Category extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('category_model');
    $this->load->model('auth_model');
    if (!$this->auth_model->current_user()) {
      redirect('auth/login');
    }
  }

  // Tampilkan Semua Kategori
  public function index()
  {
    $data['current_user'] = $this->auth_model->current_user();
    $data['title'] = 'Category';
    $data['categories'] = $this->category_model->get();
    $this->load->view('admin/category/list_category', $data);
  }

  // function untuk menampilkan form tambah kategori
  public function create()
  {
    $data['title'] = 'Create Category';
    $this->load->view('admin/category/create_category', $data);
  }

  // function untuk tambah kategori ke tabel category
  public function new()
  {
    $data['current_user'] = $this->auth_model->current_user();
    $data['categories'] = $this->category_model->get();
    $this->load->library('form_validation');

    if ($this->input->method() === 'post') {

      $rules = $this->category_model->rules();
      $this->form_validation->set_rules($rules);

      if ($this->form_validation->run() === FALSE) {
        return $this->load->view('admin/category/list_category.php', $data);
      }

      $category = [
        'id' => $this->input->post('id'),
        'name' => $this->input->post('name')
      ];

      $saved = $this->category_model->insert($category);

      if ($saved) {
        $this->session->set_flashdata('message', 'Category was added successfully');
        return redirect('admin/category/');
      }
    }

    $this->load->view('admin/category/list_category,php', $data);
  }


  // function untuk hapus kategori
  public function delete($id)
  {
    $this->category_model->delete($id);
    redirect('admin/category');
  }

}
