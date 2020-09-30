<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
  protected $table = 'komik';
  protected $useSoftDeletes = true;
  protected $useTimestamps = true;
  protected $allowedFields = ['judul', 'slug', 'penulis', 'penerbit', 'sampul'];

  public function getKomik($slug = false)
  {
    if ($slug == false) {
      return $this->findAll();
    }

    return $this->where(['slug' => $slug])->first();
  }

  public function search($keyword)
  {
    // $builder = $this->table('komik');
    // $builder->like('judul', $keyword);
    // return $builder;

    // return $this->table('komik')->like('judul', $keyword);

    return $this->table('komik')->like('judul', $keyword)
      ->orLike('penulis', $keyword)
      ->orLike('penerbit', $keyword);
  }
}