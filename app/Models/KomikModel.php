<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
  protected $table = 'komik';
  protected $useSoftDeletes = true;
  protected $useTimestamps = true;
}