<?php

namespace App\Models;

use CodeIgniter\Model;

class BeasiswaModel extends Model
{
    protected $table = "beasiswa";
    protected $primaryKey = "id_beasiswa";
    protected $allowedFields = ["value_beasiswa"];
    protected $useTimestamps = false;

    public function get_data_beasiswa()
    {
        return $this->db->table('beasiswa')
        ->get()->getResultArray();
    }
}