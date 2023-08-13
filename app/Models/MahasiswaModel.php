<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = "mahasiswa";
    protected $primaryKey = "id_mahasiswa";
    protected $allowedFields = ["nama_mahasiswa","email_mahasiswa", "no_hp"];
    protected $useTimestamps = false;

    public function get_data_mahasiswa($nama, $email)
    {
        return $this->db->table('mahasiswa')
        ->join('ipk','ipk.id_mahasiswa=mahasiswa.id_mahasiswa')
        ->where('mahasiswa.nama_mahasiswa',['nama_mahasiswa'=>$nama])
        ->where('mahasiswa.email_mahasiswa',['email_mahasiswa'=>$email])
        ->orderBy('id_ipk', 'desc')
        ->limit(1)
        ->get()->getRow('ipk');

    }

}