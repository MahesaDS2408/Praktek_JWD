<?php

namespace App\Controllers;
use Spatie\SimpleExcel\SimpleExcelReader;
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

// Export
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Export extends BaseController
{
	public function index()
	{
        // $mobil = new SiswaModel();
        // $dataMobil = $mobil->findAll();
    
        $spreadsheet = new Spreadsheet();
        // tulis header/nama kolom 
        $spreadsheet->setActiveSheetIndex(0)
                    ->setCellValue('A1', 'Nama')
                    ->setCellValue('B1', 'Kelas')
                    ->setCellValue('C1', 'Jurusan')
                    ->setCellValue('D1', 'Angkatan')
                    ->setCellValue('E1', 'NIS');
        
        $column = 2;
        // tulis data mobil ke cell
        // foreach($dataMobil as $data) {
            $spreadsheet->setActiveSheetIndex(0)
                        ->setCellValue('A' . $column, 'mahesa')
                        ->setCellValue('B' . $column, '10')
                        ->setCellValue('C' . $column, 'tkj')
                        ->setCellValue('D' . $column, '2016')
                        ->setCellValue('E' . $column, '14116071');
            // $column++;
        // }
        // tulis dalam format .xlsx
        $writer = new Xlsx($spreadsheet);
        $fileName = 'Data Siswa';
    
        // Redirect hasil generate xlsx ke web client
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename='.$fileName.'.xlsx');
        header('Cache-Control: max-age=0');
    
        $writer->save('php://output');
	}
    public function char()
	{
        
        $char = range('A', 'Z');
        foreach ($char as $abjad) {
            echo  $abjad;
            echo "<br>";
        }
	}
    public function jumlah_char(){
        $spreadsheet = new Spreadsheet();

        $pathToCsv = ROOTPATH.'public/assets/Rekap Desa Tegineneng.csv';
		$rows = SimpleExcelReader::create($pathToCsv)->getRows();
		$header = fopen($pathToCsv, "r");
		$isiheader = fgetcsv($header, 2048);

        $char = range('A', 'Z');
		// var_dump($isiheader);
		// echo "<br>";
        $panjangHead = count($isiheader);
        // echo count($isiheader);
        // echo "<br>";
        $y = 0;
        
        // Header
        // echo "<h1>Header</h1>";
        // echo "<br>";
        for ($i = 0; $i < $panjangHead; $i++) {
            foreach($isiheader as $isi){
                if($y == $i){
                    $spreadsheet->setActiveSheetIndex(0)
                        ->setCellValue($char[$i].'1', $isiheader[$y]);
                    // echo $char[$i]."1, ".$isiheader[$y];
                    // echo "<br>";
                    $y++;
                    break;

                }
             

            }
        }
        // echo "<br>";
        // echo "<h1>Isi</h1>";
        // echo "<br>";
        $column = 2;
        $b = 0;
            foreach ($rows as $row) {
                // echo "<h1>Kolom".$column."</h1>";
                for ($a = 0; $a < $panjangHead; $a++) {
                    foreach($isiheader as $isi){
                        if($b == $a){
                            if($b < $panjangHead){
                                $spreadsheet->setActiveSheetIndex(0)
                                ->setCellValue($char[$a] . $column, $row[$isiheader[$b]]);
                                // echo $char[$a].$column." = ".$row[$isiheader[$b]];
                                // echo "<br>";
                                $b++;
                                break;
                            }
                            
                                    
                        }else{
                            // posisi saat loop max
                            $b = 0;
                        }
                        
                    }
                }                
                $column++;

            }



        $writer = new Xlsx($spreadsheet);
        $fileName = 'Data Siswa';
    
        // Redirect hasil generate xlsx ke web client
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename='.$fileName.'.xlsx');
        header('Cache-Control: max-age=0');
    
        $writer->save('php://output');
       
        
    }
    

}
