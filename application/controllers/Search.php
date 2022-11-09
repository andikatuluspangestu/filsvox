<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('article_model');
  }

  public function index()
  {

    $data['categories'] = $this->article_model->get_kategori();
    $data['articles'] = $this->article_model->get_published();
    $data['keyword'] = $this->input->get('keyword');
    $this->load->model('article_model');

    $data['search_result'] = $this->article_model->search($data['keyword']);

    $this->load->view('partials/header');
    $this->load->view('partials/navbar');
    $this->load->view('artikel/search', $data);
    $this->load->view('partials/footer');
  }

  // Function Serach in Mobile Layouts
  public function find()
  {

    $data['categories'] = $this->article_model->get_kategori();
    $data['articles'] = $this->article_model->get_published();
    $data['keyword'] = $this->input->get('keyword');
    $this->load->model('article_model');

    $data['search_result'] = $this->article_model->search($data['keyword']);

    $this->load->view('mobile/partials/header');
    $this->load->view('mobile/article/search', $data);
    $this->load->view('mobile/partials/footer');
  }


  // Function menampilkan hasil pencarian artikel by kategori
  public function kategori($category_id)
  {
    // Ambil semua kategori
    $data['categories'] = $this->article_model->get_kategori();

    // Ambil semua film
    $data['articles'] = $this->article_model->get_published();

    // Cari film berdasarkan kategori melalui Model
    $data['search_result'] = $this->article_model->search_by_category($category_id);

    if (count($data['search_result']) > 0) {
      // kirim data artikel ke view
      $this->load->view('partials/header');
      $this->load->view('partials/navbar');
      $this->load->view('artikel/search', $data);
      $this->load->view('partials/footer');
    } else {
      // kirim data artikel ke view
      $this->load->view('partials/header');
      $this->load->view('partials/navbar');
      $this->load->view('artikel/not_found', $data);
      $this->load->view('partials/footer');
    }
  }
}
