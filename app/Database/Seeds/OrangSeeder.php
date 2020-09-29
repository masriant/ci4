<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class OrangSeeder extends \CodeIgniter\Database\Seeder
{
  public function run()
  {

    // Test 2 ok OrangSeeder Simple Queries => php spark db:seed OrangSeeder
    // $data = [
    //   'nama'        => 'Masrianto',
    //   'alamat'      => 'Jakarta',
    //   'created_at'  => Time::now(),
    //   'updated_at'  => Time::now()
    // ];
    // Simple Queries
    // $this->db->query(
    //   "INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)",
    //   $data
    // );


    //---------------------------------------------------------------------------------
    // Test 3 Ok OrangSeeder Query Builder => php spark db:seed OrangSeeder
    // Using Query Builder
    // $data = [
    //   'nama'        => 'Masrianto',
    //   'alamat'      => 'Jakarta',
    //   'created_at'  => Time::now(),
    //   'updated_at'  => Time::now()
    // ];
    // Using Query Builder
    // $this->db->table('orang')->insert($data);
    //---------------------------------------------------------------------------------


    // Test 4 ok OrangSeeder Query Builder insertBatch => php spark db:seed OrangSeeder
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