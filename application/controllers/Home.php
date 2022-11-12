<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('article_model');
	}

	public function index()
	{

		// ambil kategori artikel berdasarkan headline
		$data['categories'] = $this->article_model->get_kategori();

		// ambil artikel yang statusnya bukan draft dengan LIMIT 6
		$data['articles'] = $this->article_model->get_published(6, 0);

		// ambil artikel yang status headline = true
		$data['headline'] = $this->article_model->get_headline();

		if (count($data['articles']) > 0) {
			// kirim data artikel ke view
			$this->load->view('partials/header');
			$this->load->view('partials/navbar');
			$this->load->view('home', $data);
			$this->load->view('partials/footer');
		} else {
			// kirim data artikel ke view
			$this->load->view('partials/header');
			$this->load->view('partials/navbar');
			$this->load->view('artikel/not_found');
			$this->load->view('partials/footer');
		}
	}

	public function mobile()
	{

		// ambil kategori artikel berdasarkan artikel
		$data['categories'] = $this->article_model->get_kategori();

		// ambil artikel yang statusnya bukan draft dengan LIMIT 6
		$data['articles'] = $this->article_model->get_published(6, 0);

		// ambil artikel yang status headline = true
		$data['headline'] = $this->article_model->get_headline();

		if (count($data['articles']) > 0) {
			// kirim data artikel ke view
			// $this->load->view('partials/header');
			// $this->load->view('partials/navbar');
			$this->load->view('mobile/index', $data);
			$this->load->view('partials/headline', $data);
			// $this->load->view('partials/footer');
		}
	}
}
