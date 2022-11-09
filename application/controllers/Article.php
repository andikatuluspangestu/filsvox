<?php

class Article extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('article_model');
  }

  public function index()
  {
    // ambil artikel yang statusnya bukan draft
    $data['articles'] = $this->article_model->get_published();

    // ambil data kategori
    $data['categories'] = $this->article_model->get_kategori();

    if (count($data['articles']) > 0) {
      // kirim data artikel ke view
      $this->load->view('partials/header');
      $this->load->view('partials/navbar');
      $this->load->view('artikel/movies', $data);
      $this->load->view('partials/footer');
    } else {
      $this->load->view('artikel/not_found');
    }
  }

  public function show($slug = null)
  {
    // jika gak ada slug di URL tampilkan 404
    if (!$slug) {
      show_404();
    }

    // Ambil Data Kategori
    $data['categories'] = $this->article_model->get_kategori();

    // Ambil artikel dengan slug yang diberikan
    $data['article'] = $this->article_model->find_by_slug($slug);

    // Jika artikel tidak ditemuakn di database tampilkan 404
    if (!$data['article']) {
      show_404();
    }

    // tampilkan artikel
    $this->load->view('partials/header');
    $this->load->view('partials/navbar');
    $this->load->view('artikel/read', $data);
    $this->load->view('partials/footer');
  }

  public function read($slug = null)
  {
    // jika gak ada slug di URL tampilkan 404
    if (!$slug) {
      show_404();
    }

    // Ambil Data Kategori
    $data['categories'] = $this->article_model->get_kategori();

    // Ambil artikel dengan slug yang diberikan
    $data['article'] = $this->article_model->find_by_slug($slug);

    // Jika artikel tidak ditemuakn di database tampilkan 404
    if (!$data['article']) {
      show_404();
    }

    // tampilkan artikel
    $this->load->view('mobile/article/read', $data);
  }
}
