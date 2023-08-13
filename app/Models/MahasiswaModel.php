<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = "mahasiswa";
    protected $primaryKey = "id_mahasiswa";
    protected $allowedFields = ["nama_mahasiswa","email_mahasiswa", "no_hp"];
    protected $useTimestamps = false;

}