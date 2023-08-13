<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class CheckingController extends BaseController
{
	public function mahasiswa($nama, $email)
	{
        $model = new KabupatenModel();
        $model->get_data_mahasiswa($nama, $email);
        // return $this->respond($response);
	}
}
