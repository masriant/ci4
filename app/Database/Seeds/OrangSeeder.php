<?php

namespace App\Database\Seeds;

// use CodeIgniter\I18n\Time;

class OrangSeeder extends \CodeIgniter\Database\Seeder
{
  public function run()
  {
    // faker
    // $faker = \Faker\Factory::create('id_ID');
    // for ($i = 0; $i < 100; $i++) {
    //   $data = [
    //     'nama'        => $faker->name,
    //     'alamat'      => $faker->address,
    //     'created_at'  => Time::createFromTimestamp($faker->unixTime()),
    //     'updated_at'  => Time::now(),
    //   ];
    //   $this->db->table('orang')->insert($data);
    // }



    // Test 1 OrangSeeder Simple Queries => php spark db:seed OrangSeeder
    $data = [
      'nama'      => 'Masrianto',
      'alamat'    => 'admin@masrianto.com'
    ];
    // Simple Queries
    $this->db->query(
      "INSERT INTO orang (nama, alamat) VALUES(:nama:, :alamat:)",
      $data
    );



    // Using Query Builder
    // $this->db->table('users')->insert($data);
  }
}