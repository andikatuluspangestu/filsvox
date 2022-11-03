<?php

class Post extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('article_model');
    $this->load->model('auth_model');
    if (!$this->auth_model->current_user()) {
      redirect('auth/login');
    }
  }

  // Tampilkan Semua Artikel
  public function index()
  {
    $data['categories'] = $this->article_model->get_kategori();
    $data['current_user'] = $this->auth_model->current_user();
    $data['articles'] = $this->article_model->get();
    if (count($data['articles']) <= 0) {
      $this->load->view('admin/post_empty.php', $data);
    } else {
      $this->load->view('admin/post_list.php', $data);
    }
  }

  // Tambah Artikel
  public function new()
  {
    $data['current_user'] = $this->auth_model->current_user();
    $data['categories'] = $this->article_model->get_kategori();
    $this->load->library('form_validation');

    if ($this->input->method() === 'post') {

      $rules = $this->article_model->rules();
      $this->form_validation->set_rules($rules);

      if ($this->form_validation->run() === FALSE) {
        return $this->load->view('admin/post_new_form.php', $data);
      }

      $slug = url_title($this->input->post('title'), 'dash', TRUE);

      $article = [
        'id' => $this->input->post('id'),
        'title' => $this->input->post('title'),
        'cover' => $this->input->post('cover'),
        'trailer' => $this->input->post('trailer'),
        'kategori' => $this->input->post('kategori'),
        'slug' => $slug,
        'content' => $this->input->post('content'),
        'headline' => $this->input->post('headline'),
        'draft' => $this->input->post('draft')
      ];

      $saved = $this->article_model->insert($article);

      if ($saved) {
        $this->session->set_flashdata('message', 'Article was created');
        return redirect('admin/post');
      }
    }

    $this->load->view('admin/post_new_form.php', $data);
  }

  // Edit Artikel
  public function edit($id = null)
  {
    $data['categories'] = $this->article_model->get_kategori();
    $data['current_user'] = $this->auth_model->current_user();
    $data['article'] = $this->article_model->find($id);
    $this->load->library('form_validation');

    if (!$data['article'] || !$id) {
      show_404();
    }

    if ($this->input->method() === 'post') {

      $rules = $this->article_model->rules();
      $this->form_validation->set_rules($rules);

      if ($this->form_validation->run() === FALSE) {
        return $this->load->view('admin/post_edit_form.php', $data);
      }

      $article = [
        'id' => $id,
        'title' => $this->input->post('title'),
        'cover' => $this->input->post('cover'),
        'trailer' => $this->input->post('trailer'),
        'kategori' => $this->input->post('kategori'),
        'content' => $this->input->post('content'),
        'headline' => $this->input->post('headline'),
        'draft' => $this->input->post('draft')
      ];
      $updated = $this->article_model->update($article);
      if ($updated) {
        $this->session->set_flashdata('message', 'Article was updated');
        redirect('admin/post');
      }
    }

    $this->load->view('admin/post_edit_form.php', $data);
  }

  // Delete Artikel
  public function delete($id = null)
  {
    if (!$id) {
      show_404();
    }

    $deleted = $this->article_model->delete($id);
    if ($deleted) {
      $this->session->set_flashdata('message', 'Article was deleted');
      redirect('admin/post');
    }
  }
}
