<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRegister extends Model
{
  protected $table      = 'register';
  protected $primaryKey = 'noreg';
  protected $useSoftDeletes = true;
  protected $useTimestamps = true;

  protected $allowedFields = ['noreg', 'nama', 'tmplahir', 'tgllahir', 'jenkel', 'foto'];
}