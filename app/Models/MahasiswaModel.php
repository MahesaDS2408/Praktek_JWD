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
        // return $this->db->table('mahasiswa')
        // ->join('ipk','ipk.id_mahasiswa=mahasiswa.id_mahasiswa')
        // ->get()->getResultArray();

        $query = $this->db->table('mahasiswa')
            ->select('mahasiswa.*, ipk.nilai_ipk')
            ->join('ipk', 'ipk.id_mahasiswa = mahasiswa.id_mahasiswa')
            ->where('ipk.id_semester', function ($subquery) {
                $subquery->select('MAX(id_semester)')
                    ->from('ipk')
                    ->where('id_mahasiswa = mahasiswa.id_mahasiswa');
            })
            ->get()
            ->getResultArray();

        foreach ($query as $row) {
            echo "Nama: " . $row['nama'] . "<br>";
            echo "IPK Semester Akhir: " . $row['ipk'] . "<br><br>";
        }
    }

}