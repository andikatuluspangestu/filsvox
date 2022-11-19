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

  // Tampilkan data user berdasarkan id
  public function get_by_id($id)
  {
    $this->db->select('*');
    $this->db->from($this->_table);
    $this->db->where('id', $id);
    $query = $this->db->get();
    return $query->row();
  }

  // Get current user
  public function current_user()
  {
    $user = $this->session->userdata('user');
    if ($user) {
      return $this->get_by_id($user['id']);
    }
    return false;
  }

  // Simpan data user
  public function insert_data($data)
  {
    $this->db->insert($this->_table, $data);
  }

  // Update data
  public function update_data($id, $data)
  {
    $this->db->where('id', $id);
    $this->db->update($this->_table, $data);
  }

  // Hapus Data user
  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete($this->_table);
  }

}

?>