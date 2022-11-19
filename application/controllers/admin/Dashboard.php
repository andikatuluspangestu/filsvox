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
    $this->load->model('auth_model');
    $this->load->model('category_model');
    $data['current_user'] = $this->auth_model->current_user();

    $data = [
      "current_user" => $this->auth_model->current_user(),
      "user_count" => $this->auth_model->count(),
      "article_count" => $this->article_model->count(),
      "draft_count" => $this->article_model->count_draft(),
      "category_count" => $this->article_model->count_category(),

      // User
      "count_published_user" => $this->article_model->count_published_user(
        $data['current_user']->name
      ),
      "count_draft_user" => $this->article_model->count_draft_user(
        $data['current_user']->name
      ),
    ];

    $this->load->view('admin/dashboard.php', $data);
  }
}
