<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Blog extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'blog_title'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'slug' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'blog_description' => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'sampul' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
			'deleted_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			]
		]);
		$this->forge->addKey('id', true);
		$attributes = ['ENGINE' => 'InnoDB'];
		$this->forge->createTable('blog', FALSE, $attributes);
	}

	public function down()
	{
		$this->forge->dropTable('blog');
	}
}