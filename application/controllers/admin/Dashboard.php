<?php

class Dashboard extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('auth_model');
    if (!$this->auth_model->current_user()) {
      redirect('auth/login');
    }
  }

  public function index()
  {
    $this->load->model('article_model');

    $data = [
      "current_user" => $this->auth_model->current_user(),
      "user_count" => $this->auth_model->count(),
      "article_count" => $this->article_model->count(),
      "draft_count" => $this->article_model->count_draft(),
      "category_count" => $this->article_model->count_kategori()
    ];

    $this->load->view('admin/dashboard.php', $data);
  }
}
