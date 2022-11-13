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

    // Hilangkan tanda baca, spasi, dan parse ke hurif kecil
    $keyword = strtolower(str_replace(' ', '', $data['keyword']));

    $this->load->model('article_model');

    $data['search_result'] = $this->article_model->search($keyword);

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

  public function findbykategori($category_id)
  {
    // Ambil semua kategori
    $data['categories'] = $this->article_model->get_kategori();

    // Ambil semua film
    $data['articles'] = $this->article_model->get_published();

    // Cari film berdasarkan kategori melalui Model
    $data['search_result'] = $this->article_model->search_by_category($category_id);

    if (count($data['search_result']) > 0) {
      // kirim data artikel ke view
      $this->load->view('mobile/partials/header');
      $this->load->view('mobile/article/search', $data);
      $this->load->view('mobile/partials/footer');
    } else {
      // kirim data artikel ke view
      $this->load->view('partials/header');
      $this->load->view('partials/navbar');
      $this->load->view('artikel/not_found', $data);
      $this->load->view('partials/footer');
    }
  }

  // Function explore untuk artikel by judul, directors, writers, actors
  public function explore()
  {
    $data['categories'] = $this->article_model->get_kategori();
    $data['articles'] = $this->article_model->get_published();
    $data['keyword'] = $this->input->get('keyword');
    $this->load->model('article_model');

    $data['search_result'] = $this->article_model->search($data['keyword']);

    $this->load->view('mobile/partials/header');
    $this->load->view('mobile/article/explore', $data);
    $this->load->view('mobile/partials/footer');
  }

  //  Cari artikel yang memiliki visitor lebih dari 100
  public function popular()
  {
    // Tampilkan artikel yang memiliki visitor lebih dari 100
    $data['search_result'] = $this->article_model->get_popular();

    // Title
    $data['title'] = 'Popular Articles';

    $this->load->view('mobile/partials/header');
    $this->load->view('mobile/article/popular', $data);
    $this->load->view('mobile/partials/footer');
  }

  // Cari artikel yang baru dipublish (terbaru)
  public function latest()
  {
    // Tampilkan artikel yang memiliki visitor lebih dari 100
    $data['search_result'] = $this->article_model->get_latest();

    //  Ambil artikel yang memiliki status draft false
    $data['search_result'] = $this->article_model->get_published();

    // Title
    $data['title'] = 'Latest Articles';

    $this->load->view('mobile/partials/header');
    $this->load->view('mobile/article/popular', $data);
    $this->load->view('mobile/partials/footer');
  }

}
