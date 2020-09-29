<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class OrangSeeder extends \CodeIgniter\Database\Seeder
{
  public function run()
  {
    // Test 4 OrangSeeder Query Builder => php spark db:seed OrangSeeder
    // array didalam array
    $data = [
      [
        'nama'        => 'Masrianto',
        'alamat'      => 'Jakarta',
        'created_at'  => Time::now(),
        'updated_at'  => Time::now()
      ],
      [
        'nama'        => 'Ida',
        'alamat'      => 'Sulbar',
        'created_at'  => Time::now(),
        'updated_at'  => Time::now()
      ],
      [
        'nama'        => 'Yanti',
        'alamat'      => 'Lampung',
        'created_at'  => Time::now(),
        'updated_at'  => Time::now()
      ],
      [
        'nama'        => 'Risma',
        'alamat'      => 'Makassar',
        'created_at'  => Time::now(),
        'updated_at'  => Time::now()
      ]
    ];


    // Using Query Builder
    // $this->db->table('orang')->insert($data);
    $this->db->table('orang')->insertBatch($data);
  }
}