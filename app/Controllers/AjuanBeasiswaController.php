<?php

namespace App\Controllers;

use App\Models\AjuanBeasiswaModel;
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

	public function create()
	{
		$data = $this->request->getPost();
		$file =  $this->request->getFile('file_berkas');
        $randomName = $file->getRandomName();

		// menyimpan data dari form ke dalam database tabel ajuan beasiswa
        $this->ajuanbeasiswaModel = new AjuanBeasiswaModel();
		$this->ajuanbeasiswaModel->save([
			'id_beasiswa' => $data['beasiswa'],
			'id_ipk' => $data['id_ipk'],
			'file_ajuan_beasiswa' => $randomName,
			'status_ajuan' => 'belum di verivikasi'
		]);
		//masukan file ke folder
		if ($file->isValid() && ! $file->hasMoved())
		{
			$file->move(ROOTPATH.'public/dokumen/',$randomName);
		}
		return redirect()->to('hasil/'.$data['email'].'/'.$data['nama']);
	}
}
