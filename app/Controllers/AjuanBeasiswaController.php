<?php

namespace App\Controllers;

use App\Models\BeasiswaModel;

class AjuanBeasiswaController extends BaseController
{
	public function index()
	{
		$model = new BeasiswaModel();
		$data['beasiswa'] = $model->get_data_beasiswa();
		return view('ajuan_beasiswa', $data);
	}
}
