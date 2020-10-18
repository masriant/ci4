<?php

namespace App\Models;

use CodeIgniter\Model;

class LakipModel extends Model
{
  protected $table = 'lakip';
  protected $useSoftDeletes = true;
  protected $useTimestamps = true;
  protected $allowedFields = ['judul', 'slug', 'description', 'penulis', 'penerbit', 'sampul'];

  public function getLakip($slug = false)
  {
    if ($slug == false) {
      return $this->findAll();
    }

    return $this->where(['slug' => $slug])->first();
  }
}
