<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Faskes extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'telepon' => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'alamat' => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'kota' => [
				'type'       => 'INT',
				'constraint' => 11,
				'unsigned'       => true,
			],
			'provinsi' => [
				'type'       => 'INT',
				'constraint' => 11,
				'unsigned'       => true,
			],
			'status' => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'created_at' => [
				'type' => 'DATETIME',
				'null' => true
			],
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => true
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('faskes');
	}

	public function down()
	{
		$this->forge->dropTable('faskes');
	}
}
