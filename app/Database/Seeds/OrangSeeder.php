<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class OrangSeeder extends \CodeIgniter\Database\Seeder
{
  public function run()
  {
    $data = [
      'nama'        => 'Masrianto',
      'alamat'      => 'Jakarta',
      'created_at'  => Time::now(),
      'updated_at'  => Time::now()
    ];

    // Test 2 OrangSeeder Simple Queries => php spark db:seed OrangSeeder
    // Simple Queries
    // $this->db->query(
    //   "INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)",
    //   $data
    // );


    // Test 3 OrangSeeder Query Builder => php spark db:seed OrangSeeder
    // Using Query Builder
    $this->db->table('orang')->insert($data);
  }
}