<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use CodeIgniter\API\ResponseTrait;


class CheckingController extends BaseController
{
    use ResponseTrait;

	public function mahasiswa($nama, $email)
	{
        $this->mahasiswaModel = new MahasiswaModel();
        // Lakukan query atau proses untuk mendapatkan IPK berdasarkan nama dan email
        $response = $this->mahasiswaModel->get_data_mahasiswa($nama, $email);

        return $this->respond($response);
	}
}
