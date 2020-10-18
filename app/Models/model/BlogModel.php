<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
  protected $table = 'blog';
  protected $useSoftDeletes = true;
  protected $useTimestamps = true;
  protected $allowedFields = ['blog_title', 'slug', 'blog_description', 'sampul'];

  public function getBlog($slug = false)
  {
    if ($slug == false) {
      return $this->findAll();
    }

    return $this->where(['slug' => $slug])->first();
  }

  public function search($keyword)
  {
    // $builder = $this->table('blog');
    // $builder->like('blog_title', $keyword);
    // return $builder;

    // return $this->table('blog')->like('blog_title', $keyword);

    return $this->table('blog')->like('blog_title', $keyword)->orLike('blog_description', $keyword);
  }
}