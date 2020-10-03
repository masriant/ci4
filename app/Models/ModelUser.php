<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
  protected $table = 'users';
  protected $useSoftDeletes = true;
  protected $useTimestamps = true;
  protected $allowedFields = ['nama', 'slug', 'username', 'password', 'level'];

  // public function __construct()
  // {
  //   $this->db = db_connect();
  // }

  public function getUsers($slug = false)
  {
    if ($slug == false) {
      return $this->findAll();
    }

    return $this->where(['slug' => $slug])->first();
  }
  //--------------------------------------------------------------------

  // public function get_data()
  // {
  //   return $this->db->table('users')->get()->getResultArray();
  // }

  // public function insert_data($data)
  // {
  //   return $this->db->table('users')->insert($data);
  // }
  // public function update_data($id)
  // {
  //   return $this->db->table('users')->update($id);
  // }
}