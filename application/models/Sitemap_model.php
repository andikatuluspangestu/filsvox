<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap_model extends CI_Model {
  function create() {
    return $this->db->order_by('created_at', 'desc')->get('article')->result_array();
  }
}
