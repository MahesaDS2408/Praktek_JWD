<?php

namespace App\Models;

use CodeIgniter\Model;

class AjuanBeasiswaModel extends Model
{
    protected $table = "ajuan_beasiswa";
    protected $primaryKey = "id_ajuan_beasiswa";
    protected $allowedFields = ["id_mahasiswa","file_ajuan_beasiswa", "status_ajuan"];
    protected $useTimestamps = false;

}