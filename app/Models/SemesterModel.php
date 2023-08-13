<?php

namespace App\Models;

use CodeIgniter\Model;

class SemesterModel extends Model
{
    protected $table = "mahasiswa";
    protected $primaryKey = "id_semester";
    protected $allowedFields = ["value_semester"];
    protected $useTimestamps = false;

}