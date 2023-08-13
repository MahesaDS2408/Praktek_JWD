<?php

namespace App\Controllers;

use App\Models\BeasiswaModel;
use App\Models\SemesterModel;

class AjuanBeasiswaController extends BaseController
{
	public function index()
	{
		$model = new BeasiswaModel();
		$data['beasiswa'] = $model->get_data_beasiswa();
		$model = new SemesterModel();
		$data['semester'] = $model->get_data_semester();
		return view('ajuan_beasiswa', $data);
	}
}
