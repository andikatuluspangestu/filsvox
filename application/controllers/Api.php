<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    //load model
    $this->load->model('article_model');

    //load library form validasi
    $this->load->library('form_validation');
  }

  /**
   * Get All Data
   */
  public function index()
  {
    $data = $this->article_model->get_all();

    $response = array();

    foreach ($data->result() as $hasil) {

      $response[] = array(
        "id" => $hasil->id,
        "title" => $hasil->title,
        "content" => $hasil->content,
        "created_at" => $hasil->created_at,
        "slug" => $hasil->slug,
      );
    }

    header('Content-Type: application/json');
    echo json_encode(
      array(
        'success' => true,
        'message' => 'Get All Data Data',
        'data'    => $response
      )
    );
  }
}
