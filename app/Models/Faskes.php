<?php

namespace App\Models;

use CodeIgniter\Model;

class Faskes extends Model
{
  protected $table         = 'faskes';
  protected $useTimestamps = true;
  protected $allowedFields = ['nama', 'alamat', 'telepon', 'kota', 'provinsi', 'status'];
}
