<?php

class User_model extends CI_Model
{
  private $_table = 'user';

  public function __construct()
  {
    parent::__construct();
  }

  // Tampilkan semua data yang ada di tabel user
  public function get()
  {
    $this->db->select('*');
    $this->db->from($this->_table);
    $this->db->order_by('id', 'asc');
    $query = $this->db->get();
    return $query->result();
  }

  // Hapus Data user
  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete($this->_table);
  }

}

?>