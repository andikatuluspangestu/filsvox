<?php

class Category_model extends CI_Model {

  private $_table = 'category';

  public function __construct()
  {
    parent::__construct();
  }

  // Tampilkan Semua Kategori
  public function get()
  {
    return $this->db->get('category')->result();
  }

  public function find($id)
  {
    if (!$id) {
      return;
    }

    $query = $this->db->get_where($this->_table, array('id' => $id));
    return $query->row();
  }

  // Insert Artikel
  public function insert($category)
  {
    return $this->db->insert($this->_table, $category);
  }

  // Edit Kategori
  public function edit($data)
  {
    $this->db->where('id', $data['id']);
    $this->db->update('category', $data);
  }

  // Delete Kategori
  public function delete($id)
  {
    if (!$id) {
      return;
    }

    return $this->db->delete($this->_table, ['id' => $id]);
  }


  // Tampilkan jumlah artikel dalam setiap kategori
  public function get_article_count($id)
  {
    return $this->db->get_where('article', ['kategori' => $id])->num_rows();
  }

  // Tampilkan jumlah artikel draft dalam setiap kategori
  public function get_article_draft_count($id)
  {
    return $this->db->get_where('article', ['kategori' => $id, 'draft' => 'true'])->num_rows();
  }

  // Category Rules
  public function rules()
  {
    return [
      [
        'field' => 'name',
        'label' => 'Category',
        'rules' => 'required'
      ]
    ];
  }

}