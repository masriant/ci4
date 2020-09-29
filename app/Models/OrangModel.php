<?php

namespace App\Models;

use CodeIgniter\Model;

class OrangModel extends Model
{
  protected $table = 'orang';
  protected $useSoftDeletes = true;
  protected $useTimestamps = true;
  protected $allowedFields = ['nama', 'slug', 'alamat', 'sampul'];

  public function getOrang($slug = false)
  {
    if ($slug == false) {
      return $this->findAll();
    }

    return $this->where(['slug' => $slug])->first();
  }
}