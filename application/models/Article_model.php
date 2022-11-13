<?php

class Article_model extends CI_Model
{

  private $_table = 'article';

  // Tampilkan semua artikel
  public function get()
  {
    $query = $this->db->get($this->_table);
    return $query->result();
  }

  // Cek status Draft
  public function get_published($limit = null, $offset = null)
  {
    if (!$limit && $offset) {
      $query = $this->db
        ->get_where($this->_table, ['draft' => 'FALSE']);
    } else {
      $query =  $this->db
        ->get_where($this->_table, ['draft' => 'FALSE'], $limit, $offset);
    }
    return $query->result();
  }

  // Function untuk menampilkan semua kategori di tabel Category
  public function get_kategori()
  {
    $query = $this->db->get('category');
    return $query->result();
  }

  // Function untuk mencari artikel berdasarkan slug
  public function find_by_slug($slug)
  {
    if (!$slug) {
      return;
    }
    $query = $this->db->get_where($this->_table, ['slug' => $slug]);
    return $query->row();
  }

  // Function untuk mencari artikel berdasarkan id
  public function find($id)
  {
    if (!$id) {
      return;
    }

    $query = $this->db->get_where($this->_table, array('id' => $id));
    return $query->row();
  }

  // Insert Artikel
  public function insert($article)
  {
    return $this->db->insert($this->_table, $article);
  }

  // Update Artikel
  public function update($article)
  {
    if (!isset($article['id'])) {
      return;
    }

    return $this->db->update($this->_table, $article, ['id' => $article['id']]);
  }

  // Delete Artikel
  public function delete($id)
  {
    if (!$id) {
      return;
    }

    return $this->db->delete($this->_table, ['id' => $id]);
  }

  // Hitung Jumlah Artikel
  public function count()
  {
    return $this->db->count_all($this->_table);
  }

  // Hitung jumlah artikel dengan status Draft
  public function count_draft()
  {
    return $this->db->where('draft', 'TRUE')->count_all_results($this->_table);
  }

  // Hitung jumlah kategori di tabel kategori
  public function count_kategori()
  {
    return $this->db->count_all('category');
  }

  // Function untuk mengupdate jumlah visitor
  function update_counter($slug)
  {
    $this->db->where('slug', urldecode($slug));
    $this->db->select('visitor');
    $count = $this->db->get('article')->row();

    $this->db->where('slug', urldecode($slug));
    $this->db->set('visitor', ($count->visitor + 1));
    $this->db->update('article');
  }

  // Menampilkan Data dengan REST API
  public function get_all()
  {
    $this->db->select("*");
    $this->db->from("article");
    $this->db->order_by("id", "DESC");
    return $this->db->get();
  }

  // Pencarian Data yang memiliki keyword
  public function search($keyword)
  {
    $this->db->select("*");
    $this->db->from("article");
    $this->db->like('slug', $keyword);
    return $this->db->get()->result();
  }

  // Pencarian Film berdasarkan judul, directors, writers, actors
  public function search_film($keyword)
  {
    if (!$keyword) {
      return null;
    }
    $this->db->like('title', $keyword);
    $this->db->or_like('directors', $keyword);
    $this->db->or_like('writers', $keyword);
    $this->db->or_like('actors', $keyword);
    $query = $this->db->get('film');
    return $query->result();
  }

  // Cari artikel yang memiliki visitor lebih dari 100
  public function get_popular()
  {
    $this->db->where('visitor >', 50);
    $query = $this->db->get($this->_table);
    return $query->result();
  }

  // Cari artikel terbaru dalam seminggu terakhir
  public function get_latest()
  {
    $this->db->where('created_at >', date('Y-m-d', strtotime('-7 days')));
    $query = $this->db->get($this->_table);
    return $query->result();
  }

  // Cari artikel yang memiliki headline = TRUE
  public function get_headline()
  {
    $this->db->where('headline', 'true');
    $query = $this->db->get($this->_table);
    return $query->result();
  }

  // Cari artikel yang memiliki draft = TRUE
  public function get_draft()
  {
    $this->db->where('draft', 'true');
    $query = $this->db->get($this->_table);
    return $query->result();
  }

  // Cek $slug artikel yang memiliki draft = TRUE
  public function get_draft_by_slug($slug)
  {
    $this->db->where('slug', $slug);
    $this->db->where('draft', 'true');
    $query = $this->db->get($this->_table);
    return $query->row();
  }

  // Pencarian Film berdasarkan Kategori
  public function search_by_category($category_id)
  {
    if (!$category_id) {
      return null;
    }
    $this->db->where('kategori', $category_id);
    $query = $this->db->get($this->_table);
    return $query->result();
  }

  // Tampilkan artikel yang memiliki visitor terbanyak limit 3
  public function get_most_viewed()
  {
    $this->db->order_by('visitor', 'DESC');
    $this->db->limit(3);
    $query = $this->db->get($this->_table);
    return $query->result();
  }

  // Database Rules
  public function rules()
  {
    return [
      [
        'field' => 'title',
        'label' => 'Title',
        'rules' => 'required|max_length[128]'
      ],
      [
        'field' => 'draft',
        'label' => 'Draft',
        'rules' => 'required|in_list[true,false]'
      ],
      [
        'field' => 'content',
        'label' => 'Content',
        'rules' => '' // ini boleh kosong
      ]
    ];
  }
}
