<?php

namespace App\Controllers;
use Spatie\SimpleExcel\SimpleExcelReader;
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

// use PhpOffice\PhpSpreadsheet\Helper\Sample;
// use PhpOffice\PhpSpreadsheet\IOFactory;
// use PhpOffice\PhpSpreadsheet\Spreadsheet;

class Read extends BaseController
{
	public function csv()
	{
		// Gabungan antara package composer require spatie/simple-excel dan manual header ngide
		$pathToCsv = ROOTPATH.'public/assets/Rekap Desa Tegineneng.csv';
		$rows = SimpleExcelReader::create($pathToCsv)->getRows();
		$header = fopen($pathToCsv, "r");
		$isiheader = fgetcsv($header, 2048);
		// var_dump($isiheader);
		// echo "<br>";
		foreach ($rows as $row) {
			foreach($isiheader as $isi){
				// echo $isi;
				echo $isi." = ".$row[$isi];
				echo "<br>";
			}
			echo "<br>";
		}

		// foreach($rows as $row){
		// 	echo $row["email"];
		// 	echo "<br>";
		// }
		// // Header
		// foreach($isiheader as $isi){
		// 	echo "<br>";
		// 	echo "Header <br>";
		// 	echo $isi;

		// }

		// $rows->each(function(array $rowProperties) {
		// 	// in the first pass $rowProperties will contain
		// 	// ['email' => 'john@example.com', 'first_name' => 'john']
		// 	var_dump($rowProperties);
		//  });
		 
	}
	public function csv2003()
	{
		$pathToCsv = ROOTPATH.'public/assets/URUSAN BIDANG KOMUNIKASI DAN INFORMATIKA.csv';
		$rows = SimpleExcelReader::create($pathToCsv)->getRows();
		$header = fopen($pathToCsv, "r");
		$isiheader = fgetcsv($header, 2048);
		// var_dump($isiheader);
		// echo "<br>";
		foreach ($rows as $row) {
			foreach($isiheader as $isi){
				echo $isi;
				echo $isi." = ".$row[$isi];
				echo "<br>";
			}
			echo "<br>";
		}

	}
	public function excel()
	{
		// Gabungan antara package composer require spatie/simple-excel dan manual header ngide
		$pathToCsv = ROOTPATH.'public/assets/kominfo.xlsx';
		$rows = SimpleExcelReader::create($pathToCsv)->getRows();
		$header = fopen($pathToCsv, "r");
		$isiheader = fgetcsv($header, 2048);
		// foreach ($rows as $row) {
		// 	foreach($isiheader as $isi){
		// 		echo $row[$isi];
		// 	}
		// }
		foreach($rows as $row){
			var_dump($row);
		}
		// foreach($isiheader as $isi){
		// 	echo "<br>";
		// 	echo "Header <br>";
		// 	echo $isi;

		// }
	}
	public function csv1()
	{
		$pathToCsv = ROOTPATH.'public/assets/simple.csv';
		$rows = SimpleExcelReader::create($pathToCsv)
			->noHeaderRow()
			->getRows()
			->each(function(array $rowProperties) {
			// in the first pass $rowProperties will contain
			echo $rowProperties[0];
			// [0 => 'john@example', 1 => 'john']
		});
	}
	public function excelmanual()
	{
		$path =  ROOTPATH.'public/assets/simple.xlsx';
		$reader = ReaderEntityFactory::createXLSXReader();
		$reader->open($path);
		# read each cell of each row of each sheet
		foreach ($reader->getSheetIterator() as $sheet) {
			foreach ($sheet->getRowIterator() as $row) {
				// if($row->getCells('A2')){
				// 	echo "ada";
				// }else{
				// 	echo "tidak";
				// }
				foreach ($row->getCells() as $cells) {
					var_dump($cells->getValue());
				}
			}
		}
		$reader->close();
	}
	public function csvmanual()
	{
		$pathToCsv = ROOTPATH.'public/assets/simple.csv';
		$i = 0;
		$header = fopen($pathToCsv, "r");
		$handle = fopen($pathToCsv, "r");
		$isiheader = fgetcsv($header, 2048);
		$row = fgetcsv($handle, 2048);
					while (($row = fgetcsv($handle, 2048))) {
						$i++;
						if ($i == 1) continue;

						// Data yang akan disimpan ke dalam databse
						var_dump($row['email']);
						// $data = [
						// 	'nama' => $row[1],
						// 	'no_hp' => $row[2],
						// 	'email' => $row[3],
						// 	'alamat' => $row[4],
						// ];

						// Simpan data ke database.
						// $this->pelanggan->save($data);
					}
					var_dump($isiheader);
					fclose($handle);

	}
}
