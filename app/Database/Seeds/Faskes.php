<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Faskes extends Seeder
{
	public function run()
	{
		$data = [
			[
				'nama' => 'Klinik Media Farma',
				'alamat' => 'Jl. Ahmad Yani',
				'telepon' => '0217503908',
				'provinsi' => 31,
				'kota' => 3174,
				'status' => 'Habis'
			],
			[
				'nama' => 'Klinik Siaga Utama',
				'alamat' => 'Jl. Dr. Sutomo',
				'telepon' => '0214535190',
				'provinsi' => 31,
				'kota' => 3174,
				'status' => 'Habis'
			],
			[
				'nama' => 'Rumah Sakit Umum Daerah',
				'alamat' => 'Jl. Elang',
				'telepon' => '0217471419',
				'provinsi' => 36,
				'kota' => 3674,
				'status' => 'Tersedia'
			],
			[
				'nama' => 'Rumah Sakit Siaga',
				'alamat' => 'Jl. Juanda',
				'telepon' => '0217471419',
				'provinsi' => 31,
				'kota' => 3173,
				'status' => 'Habis'
			],
			[
				'nama' => 'Puskesmas Serang',
				'alamat' => 'Jl. Cendana',
				'telepon' => '0214493489',
				'provinsi' => 36,
				'kota' => 3604,
				'status' => 'Habis'
			],
			[
				'nama' => 'Klinik Harmoni',
				'alamat' => 'Jl. Bung Tomo',
				'telepon' => '0226783498',
				'provinsi' => 32,
				'kota' => 3273,
				'status' => 'Tersedia'
			],
			[
				'nama' => 'Klinik Mitra Keluarga',
				'alamat' => 'Jl. Sejati',
				'telepon' => '0225498237',
				'provinsi' => 32,
				'kota' => 3273,
				'status' => 'Habis'
			],
		];

		foreach ($data as $d) {
			// Using Query Builder
			$this->db->table('faskes')->insert($d);
		}
	}
}
