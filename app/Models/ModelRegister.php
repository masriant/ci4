<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRegister extends Model
{
  protected $table      = 'register';
  protected $primaryKey = 'noreg';
  // protected $useSoftDeletes = true;
  protected $useTimestamps = true;

  protected $allowedFields = ['noreg', 'nama', 'tmplahir', 'tgllahir', 'jenkel', 'foto'];

  public function getRegistrar($slug = false)
  {
    if ($slug == false) {
      return $this->findAll();
    }

    return $this->where(['slug' => $slug])->first();
  }

  public function tampil_data()
  {
    return $this->db->get('register');
  }
  public function input_data($data, $table)
  {
    return $this->db->insert($table, $data);
  }
}