<?php

namespace App\Controllers;

use App\Models\BeasiswaModel;
use App\Models\MahasiswaModel;

class Home extends BaseController
{
	public function index()
	{
		$model = new BeasiswaModel();
		$data['beasiswa'] = $model->get_data_beasiswa();
		return view('landing_page', $data);
	}
	public function hasil()
	{
		$data = $this->request->getGet();
		if($data){

			if($data['email'] != NULL && $data['nama'] != NULL){
            
				$model = new MahasiswaModel();
				$datas['hasil'] = true;
				$datas['beasiswa'] = $model->get_data_beasiswa($data['email'], $data['nama']);
				// var_dump($datas['data_beasiswa']);
				
			}else{
	
				$datas['hasil'] = false;
			}
			return view('hasil', $datas);
			// var_dump($datas);

		}else{
			$datas['hasil'] = false;
			return view('hasil', $datas);
		}

		

		
	}
}
